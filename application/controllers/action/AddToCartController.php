<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');

require APPPATH . '/libraries/REST_Controller.php';
class AddToCartController extends REST_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("CartModel");
        $user_sess = $this->session->userdata('user_sess');
        if(empty($user_sess)){
        	redirect('/login', 'refresh');
        }
    }

    public function index_get(){
    	echo "234";
    }
    
    public function remove_cart_post(){
    	
    	$user_sess = $this->session->userdata['user_sess'];
    	 
    	$reqt_data = $this->input->post('items');
    	//$reqt_data["user_id"] = $user_sess["user_id"];
    	
    	if(!isset($reqt_data) || count($reqt_data) <= 0 ){
    		$response["response_code"] = "400";
    		$response["response_msg"] = "item_id is required!";
    		$this->response( $response ,400);
    		die();
    	}
    	
    	$status;
    	for($i=0; $i<count($reqt_data); $i++){
    		
    		$reqt_data[$i]["user_id"] = $user_sess["user_id"];
    		$status = $this->CartModel->deleteCartByUserId($reqt_data[$i]);
    	}
    	if($status){
    		$myRecentCart = $this->CartModel->listCartByUserId($user_sess["user_id"]);
    		
    		$allData = json_decode(json_encode($myRecentCart["response_data"]), true);
    		
    		$this->session->set_userdata('my_cart', $allData);
    		$response["response_code"] = "200";
    		$response["response_msg"] = "Delete Successfully!";
    		$response["my_cart_num"] = count($allData);
    		$this->response( $response ,200);
    	}else{
    		
    		$response["response_code"] = "500";
    		$response["response_msg"] = "Delete failed!";
    		$this->response( $response ,500);
    	}
    	
    	 
    	
    	
    }
    
    
    public function add_to_cart_post(){
    	
    	$user_sess = $this->session->userdata['user_sess'];
    	
    	$reqt_data = $this->input->post('reqt_data');
    	$reqt_data["user_id"] = $user_sess["user_id"];
    	
    	
    	if($this->CartModel->checkIfItemExist($reqt_data)){
    		$this->CartModel->updateCart($reqt_data);
    	}else{
    		$this->CartModel->insertCart($reqt_data);
    	}
    	
    	//$data = $this->CartModel->countCartByUserId($reqt_data["user_id"]);
    	$myRecentCart = $this->CartModel->listCartByUserId($reqt_data["user_id"]);
    	
    	$allData = json_decode(json_encode($myRecentCart["response_data"]), true);
    	
    	/*for($i=0; $i<count($myRecentCart["response_data"]); $i++){
    		array_push( $allData , $cart[$i]);
    	}*/
    	
    	
    	$response["response_code"] = "200";
    	$response["response_msg"] = "Insert Successfully!";
    	$response["my_cart_num"] = count($allData);
    	
    	
    	
    	$this->session->set_userdata('my_cart', $allData);
    	
    	$this->response( $response ,200);
    	
    }

   /* public function add_to_cart_post(){
        
        $reqt_data = $this->input->post('reqt_data');
        
      
       
        if(!isset($this->session->userdata['my_cart'])){
            $myRecentCart = array();
            array_push($myRecentCart, $reqt_data);
            $this->session->set_userdata('my_cart', $myRecentCart);
        }else{
            $myRecentCart = array();
            $myRecentCart = $this->session->userdata['my_cart'];
            
            $haveData = false;
            $dataIndex = 0;
            for($i=0; $i< count($myRecentCart); $i++){
            	if($myRecentCart[$i]["item_id"] == $reqt_data["item_id"]
                   && $myRecentCart[$i]["item_size"] == $reqt_data["item_size"]
            	   && $myRecentCart[$i]["item_color"] == $reqt_data["item_color"]){
            		$haveData = true;
            		$dataIndex = $i;
            	}
            }
            
            if($haveData){
 				
            	$myRecentCart[$dataIndex]["item_qty"] = (int)$myRecentCart[$dataIndex]["item_qty"] + (int)$reqt_data["item_qty"];
            }else{
            	array_push( $myRecentCart , $reqt_data);
            }
        
            $this->session->set_userdata('my_cart', $myRecentCart);
        }
        
        
       
        $resp_data["my_cart_num"] = count($this->session->userdata['my_cart']);
        
        $this->response( $resp_data,200);
        
    }*/
}