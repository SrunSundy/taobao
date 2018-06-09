<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');

require APPPATH . '/libraries/REST_Controller.php';
class MyOrder extends REST_Controller
{
    public function __construct() {
        parent::__construct();     
        $this->load->model("UserOrderDetail");
        $user_sess = $this->session->userdata('user_sess');
        if(empty($user_sess)){
        	redirect('/login', 'refresh');
        }
    }

    public function index_get(){
    	echo "234";
    }
    
    
    public function get_order_detail_get(){
    	
    	$user_sess = $this->session->userdata('user_sess');
    	
    	$data = $this->UserOrderDetail->summaryOrder1($user_sess["user_phone"] , $user_sess["user_id"]);
    	$this->load->model('BalanceModel');
    	
    	
    	$data->awaiting_payment = $this->BalanceModel->awaitingPayment($user_sess["user_phone"]);
    	$data->my_balance = $this->BalanceModel->sumDeposit($user_sess["user_phone"]);
    	$response["response_code"] = "200";
    	$response["response_data"] = $data;
    	$this->response($response, 200);
    	
    }
    
    public function insert_order_post(){
    	
    	$user_sess = $this->session->userdata['user_sess'];
    	
    	$request["data"] = $this->input->post('data');
    	$request["address_id"] = $this->input->post('address_id');
    	$request["address"] = $this->input->post('address');
    	
    	$this->load->model("OrderModel");
    	
    	if($this->OrderModel->insertOrder($request)){
    		
    		$this->load->model("CartModel");
    		if($this->CartModel->deleteAllCartByUserId($user_sess["user_id"])){
    			$this->session->unset_userdata('my_cart');
    			
    			$response["response_code"] = "200";
    			$response["response_msg"] = "Insert successfully!";
    			$this->response($response, 200);
    		}else{
    			$response["response_code"] = "500";
    			$response["response_msg"] = "Fail to insert!";
    			$this->response($response, 200);
    		}
    		
    	}else{
    		$response["response_code"] = "500";
    		$response["response_msg"] = "Fail to insert!";
    		$this->response($response, 200);
    	}
    	
    }
    
    /*
      row = 15;
      page = 1;
      sort_type = 0 -- deafault: 0
                    - 0 means latest data
     */
    public function listOrder_get(){
      $row = $this->input->get('row');
      $page = $this->input->get('page');
      $sortType = $this->input->get('sort_type');
      $endpoint=  $this->input->get('endpoint');

    	$request["row"] = (isset($row)) ? $row: 2;
    	$request["page"] = (isset($page)) ? $page : 1;
      $request["sort_type"] = (isset($sortType)) ? $sortType : 0;
      $request["endpoint"] = (isset($endpoint)) ? $endpoint: 'listDeliverLimit';
      $request['customerId']=$user_sess['user_id']; 
      if($endpoint=='listDeliverLimit'){
        $data = $this->UserOrderDetail->getDeliverLimit($request);
        $totalrow= $this->UserOrderDetail->getDeliverCount($request);
      }else if($endpoint=='getOutStockLimit'){
        $data = $this->UserOrderDetail->getOutStockLimit($request);
        $totalrow= $this->UserOrderDetail->getOutStockCount($request);
      }else if($endpoint=='awaitDeliver'){
        $data = $this->UserOrderDetail->getAwaitingDeliveryLimit($request);
        $totalrow= $this->UserOrderDetail->getAwaitingDeliveryCount($request);
      }else{ 
        $data = $this->UserOrderDetail->getNeworderLimit($request);
        $totalrow= $this->UserOrderDetail->getNeworderCount($request);
      }
      
      $total_page = ceil($totalrow / $row);
      $mydata=array();
      foreach ($data as $obj){
        $obj->size!=''? $size = $obj->size: $size="N/A";  
        $fee = $obj->fee;
        $weight = $obj->weight;

        if($fee!=NULL){
          $weightkg = number_format($weight/1000, 3);
          $feeperKg = number_format(($weight/1000)*3,2);
          $ytotal = round(ceil(($feeperKg+$fee+($obj->price*$obj->qty) )/0.01)*0.01, 2);
        }else{
          $fee="N/A";
          $weight="N/A";
          $ytotal="N/A";
        }
        $vid  = "00".substr($obj->vid, -10);
        $date = date_create($obj->dateOrder);
        $date = date_format($date,"Y-M-d h:m:s");
        $mImage = $obj->mImage;
				$mlink = $obj->mlink;
        
        $color = $obj->color;
        $qty = $obj->qty;
        $price= $obj->price;
        $deliverDate= $obj->deliverDate;
        $synCode = $obj->synCode;
        $note= $obj->note;
        $invoiceNote = $obj->invoiceNote;
        $status= $obj->status;
        $arrivall=$obj->arrivall;
        $mydata[]=array('vid'=>$vid,'date'=>$date,'mImage'=>$mImage,'mlink'=>$mlink, 'color'=>$color,'qty'=>$qty,
                        'price'=>$price,'size'=>$size,'fee'=>$fee,'weight'=>$weight,'ytotal'=>$ytotal,'synCode'=>$synCode,
                        'note'=>$note, 'invoiceNote'=>$invoiceNote,'deliverDate'=>$deliverDate,'status'=>$status,'arrivall'=>$arrivall
                       );
      }
      
     
      	$response["response_code"] = "200";
   // 	$response["total_record"] = $data["total_record"];
      	$response["total_page"] = $total_page;
      	$response["response_data"] = $mydata;
      $this->response($response, 200);
    }
    public function searchOrder_get(){
      $request['synCode'] = $this->input->get('synCode');
      $request['startdate'] = $this->input->get('startdate');
      $request['endDate'] = $this->input->get('endDate');
      $request['customerId']=$user_sess['user_id'];
      $data = $this->UserOrderDetail->searchOrder($request);
      $mydata=array();
      foreach ($data as $obj){
        $obj->size!=''? $size = $obj->size: $size="N/A";  
        $fee = $obj->fee;
        $weight = $obj->weight;

        if($fee!=NULL){
          $weightkg = number_format($weight/1000, 3);
          $feeperKg = number_format(($weight/1000)*3,2);
          $ytotal = round(ceil(($feeperKg+$fee+($obj->price*$obj->qty) )/0.01)*0.01, 2);
        }else{
          $fee="N/A";
          $weight="N/A";
          $ytotal="N/A";
        }
        $vid  = "00".substr($obj->vid, -10);
        $date = date_create($obj->dateOrder);
        $date = date_format($date,"Y-M-d h:m:s");
        $mImage = $obj->mImage;
				$mlink = $obj->mlink;
        
        $color = $obj->color;
        $qty = $obj->qty;
        $price= $obj->price;
        $deliverDate= $obj->deliverDate;
        $synCode = $obj->synCode;
        $note= $obj->note;
        $invoiceNote = $obj->invoiceNote;
        $status= $obj->status;
        $arrivall=$obj->arrivall;
        $mydata[]=array('vid'=>$vid,'date'=>$date,'mImage'=>$mImage,'mlink'=>$mlink, 'color'=>$color,'qty'=>$qty,
                        'price'=>$price,'size'=>$size,'fee'=>$fee,'weight'=>$weight,'ytotal'=>$ytotal,'synCode'=>$synCode,
                        'note'=>$note, 'invoiceNote'=>$invoiceNote,'deliverDate'=>$deliverDate,'status'=>$status,'arrivall'=>$arrivall
                       );
      }
      
     
      	$response["response_code"] = "200";
   // 	$response["total_record"] = $data["total_record"];
      	//$response["total_page"] = $total_page;
      	$response["response_data"] = $mydata;
      $this->response($response, 200);

    }


}