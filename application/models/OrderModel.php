<?php

class OrderModel extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function checkout($arryInvoice,$arrayOder){

		$this->db->trans_begin();
		$this->db->insert_batch('invoice', $arryInvoice);
		$this->db->insert_batch('tblorder', $arrayOder);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			$response["status"] = 402;
			$response["message"] = "Transaction rollback!";
		}
		else
		{
			$this->db->trans_commit();
			$response["status"] = 200;
			$response["message"] = "success";
			
		}
		
		return $response;	
	}
	
	function insertOrder($request){
		
		$user_sess = $this->session->userdata('user_sess');
		$param = array();
		$sql = " INSERT INTO tblorder(customerId,
					vid,
					customerName,
					sdCustomerName,
					sdCustomerPhone,
					rdaddress_id,
					rdadress,
					rddis,
					color,
					size,
					price,
					yuan_price,
					curency,
					qty,
					total,
					order_type,
					mp_name,
					mlink,
					mImage,
					order_from,
					dateOrder) 
	             VALUES ";
		
		$sql1 = "INSERT INTO invoice(idIn,
					cusid,
					cusname,
					vdate,
					totalprice) 
				 VALUES ";
		
		$cusId = $user_sess['user_id'];
		$cusName = $user_sess['user_name'];
		$cusPhone = $user_sess['user_phone'];
		$zonename = "Asia/Phnom_Penh";
		$current_time = new DateTime();
		$current_time->setTimezone(new DateTimeZone($zonename));
		$current_time = $current_time->format('Y-m-d H:i:s');
		$addressId = $request["address_id"];
		$rdadress =  $request["address"];
		$grandTotal = 0;
		
		$insertData = $request["data"];
		for($i =0; $i<count($insertData); $i++){
			$MyZone=3600*7;
			$vid = "TB".gmdate("YmdHis", time() + $MyZone).uniqid();
			
			$rddis = "0";
			$color = $insertData[$i]["color"];
			$size = $insertData[$i]["size"];
			$price = $insertData[$i]["dollar_price"];
			$yuan_price = $insertData[$i]["yuan_price"];
			$cr = "$";
			$qty =  $insertData[$i]["qty"]; 
			$total = (($qty * $price)+$insertData[$i]["domestic_express"])/$qty;
			
			$grandTotal += $total;
			
			if($total <= 0){
				break;
				return false;
			}
			$productName = $insertData[$i]["pro_name"]; 
			$productLink = $insertData[$i]["pro_link"];
			$productPhoto = $insertData[$i]["pro_photo"];
			
			$sql .= "('$cusId',
					  '$vid',
					  '$cusName',
					  '$cusName',
					  '$cusPhone',
					  '$addressId',
					  '$rdadress',
					  '$rddis',
					  '$color',
					  '$size',
					  '$price',
					  '$yuan_price',
					  '$cr',
					  '$qty',
					  '$total',
					  '1',
					  '$productName',
					  '$productLink',
					  '$productPhoto',
					  'Taobaooutlets',
					  '$current_time'),";
			
			$sql1 .= "('$vid','$cusId','$cusName','$current_time',$total),";
		}
		
		$this->load->model('BalanceModel');
		$myBalance = $this->BalanceModel->sumDeposit($user_sess['user_phone']);
		$awaitingPayment =  $this->BalanceModel->awaitingPayment($user_sess['user_phone']);
		
		$totalBalance = $myBalance - $awaitingPayment;
		if($totalBalance < $grandTotal){
			return false;
		}
		
		$sql = substr($sql , 0, -1);
		$sql1 = substr($sql1 , 0, -1);
		
		//return $grandTotal;
		$this->db->query($sql);
		$this->db->query($sql1);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return false;
		}
		else
		{
			$this->db->trans_commit();
			return true;
		}
		
		
	}
	
	


}

?>