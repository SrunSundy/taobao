<?php

class BalanceModel extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
  
  #################### Awaiting Payment
  function awaitingPayment($phone){
  	
  	
  	if(empty($phone)){
  		return 0;
  	}
  	
    $param = array($phone,$phone);
    $sql="SELECT o.synCode,weight, fee,o.price,o.qty, o.oid,o.price,o.curency,o.discount,o.total
          FROM tblorder o 
          INNER JOIN tblcustomer c ON o.customerId=c.username 
          LEFT JOIN syncode s ON o.synCode=s.synCode 
          WHERE (sdCustomerPhone=? OR c.phone=?) AND 	 o.status!='4'
          AND (s.arrivall IS NULL OR s.arrivall=1 OR s.arrivall=0)";
    $query = $this->db->query($sql , $param);
    $result = $query->result();
    if($result){
      $ytotal=0;
      foreach($result as $pay){
        $fee= $pay->fee;
				$weight=$pay->weight;
				if($fee!=NULL){
				  $weightkg=number_format($weight/1000, 3);
				  $feeperKg=number_format(($weight/1000)*3,2);
				  $ytotal +=round(ceil(($feeperKg+$fee+($pay->price*$pay->qty) )/0.01)*0.01, 2);
				}else{
				  $ytotal +=$pay->total;
				}
      }
      return $ytotal;
    }else{
      return 0;
    }
  }
  ############### total deposit ##############
  function sumDeposit($phone){
  	
  	if(empty($phone)){
  		return 0;
  	}
  	
  	
    $param = array($phone);
   // $sql="SELECT sum(amount) as total FROM deposit WHERE phone=? AND status=0 AND de_status=1";
    $sql="SELECT balance FROM tblcustomer WHERE phone=? ";

    $query = $this->db->query($sql , $param)->row();
   
    if($query->balance==NULL) 
      return 0;
    return $query->balance;
  }
}

?>