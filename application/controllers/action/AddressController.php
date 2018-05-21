<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');

require APPPATH . '/libraries/REST_Controller.php';
class AddressController extends REST_Controller
{
    public function __construct() {
        parent::__construct();     
        $this->load->model("AddressModel");
    }

    public function index_get(){
    	echo "234";
    }
    
	
    //user_id = 1
    public function list_address_get(){
    	
    	$userId = $this->input->get('user_id');
    	$userId = (isset($userId)) ? $userId : 0;
    	
    	$data = $this->AddressModel->listAddress($userId);
    	
    	$response["response_code"] = "200";
    	$response["response_data"] = $data["response_data"];
    	$this->response($response, 200);
    	
    }
    
    public function add_address_post(){
    	
    	$request["user_id"] = $this->input->post('user_id');
    	$request["rept_name"] = $this->input->post('rept_name');
    	$request["rept_tel"] = $this->input->post('rept_tel');
    	$request["rept_country"] = $this->input->post('rept_country');
    	$request["rept_city"] = $this->input->post('rept_city');
    	$request["rept_postcode"] = $this->input->post('rept_postcode');
    	$request["rept_addr"] = $this->input->post('rept_addr');
    	$request["is_default"] = $this->input->post('is_default');
    	
    	if($this->AddressModel->getAddressCnt($request["user_id"]) >= 5){
    		$response["response_code"] = "000";
    		$response["response_msg"] = "Fail to insert! Address is at maximum.";
    		$this->response($response, 200);
    		die;
    	}
    	
    	if((int)$request["is_default"] == 1){
    		$this->AddressModel->removeDefaultAddressByUserId($request["user_id"]);   		
    	}
    	
    	$data = $this->AddressModel->addAddress($request);
    	
    	if($data){
    		$response["response_code"] = "200";
    		$response["response_msg"] = "Insert Successfully!";
    		$response["response_data"] = $data;
    		$this->response($response, 200);
    	}else{
    		$response["response_code"] = "500";
    		$response["response_msg"] = "Fail to insert!";
    		$response["response_data"] = $data;
    		$this->response($response, 500);
    	}
	
    }
    
    public function update_address_post(){
    	
    	$request["rept_name"] = $this->input->post('rept_name');
    	$request["rept_tel"] = $this->input->post('rept_tel');
    	$request["rept_country"] = $this->input->post('rept_country');
    	$request["rept_city"] = $this->input->post('rept_city');
    	$request["rept_postcode"] = $this->input->post('rept_postcode');
    	$request["rept_addr"] = $this->input->post('rept_addr');
    	$request["is_default"] = $this->input->post('is_default');
    	$request["addr_id"] = $this->input->post('addr_id');
    	$request["user_id"] = $this->input->post('user_id');
    	
    	if($this->AddressModel->removeDefaultAddressByUserId($request["user_id"])){
    		$data = $this->AddressModel->updateAddress($request);
    		if($data){
    			$response["response_code"] = "200";
    			$response["response_msg"] = "Update Successfully!";
    			$response["response_data"] = $data;
    			$this->response($response, 200);
    		}else{
    			$response["response_code"] = "200";
    			$response["response_msg"] = "No data to update!";
    			$response["response_data"] = $data;
    			$this->response($response, 200);
    		}
    	}else{
    		$response["response_code"] = "200";
    		$response["response_msg"] = "No data to update!";
    		$this->response($response, 200);
    	}
    	
    	
    }
    
    public function update_default_address_post(){
    	
    	$addrId = $this->input->post('addr_id');
    	$userId = $this->input->post('user_id');
    	
    	if($this->AddressModel->removeDefaultAddressByUserId($userId)){
    		if($this->AddressModel->updateDefaultAddress($addrId)){
    			$response["response_code"] = "200";
    			$response["response_msg"] = "Update Successfully!";
    			$this->response($response, 200);
    		}else{
    			$response["response_code"] = "200";
    			$response["response_msg"] = "No data to update!";
    			$this->response($response, 200);
    		}
    	}else{
    		$response["response_code"] = "200";
    		$response["response_msg"] = "No data to update!";
    		$this->response($response, 200);
    	}
    	
    }
    
    public function delete_address_post(){
    	
    	$addrId = $this->input->post('addr_id');
    	if($this->AddressModel->deleteAddress($addrId)){
    		
    		$response["response_code"] = "200";
    		$response["response_msg"] = "Delete Successfully!";
    		$this->response($response, 200);
    		
    	}else{
    		$response["response_code"] = "200";
    		$response["response_msg"] = "No data to delete!";
    		$this->response($response, 200);
    	}
    	
    }
    
    
}