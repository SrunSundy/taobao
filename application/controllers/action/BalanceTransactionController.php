<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');

require APPPATH . '/libraries/REST_Controller.php';
class BalanceTransactionController extends REST_Controller
{
    public function __construct() {
        parent::__construct();     
        $this->load->model("BalanceTransactionModel");
        $user_sess = $this->session->userdata('user_sess');
        if(empty($user_sess)){
        	redirect('/login', 'refresh');
        }
    }

    public function index_get(){
    	echo "234";
    }
    
    
    public function list_balance_get(){
    	
    	$user_sess = $this->session->userdata['user_sess'];
    	$request["phone"] = $user_sess["user_phone"];
    	$request["row"] = $this->input->get('row');
    	$request["page"] = $this->input->get('page');
    	
    	$responsequery = $this->BalanceTransactionModel->listBalance($request);
    	
    	$response["total_record"] = $responsequery["total_record"];
    	$response["total_page"] = $responsequery["total_page"];
    	$response["response_code"] = "200";
    	$response["response_data"] = $responsequery["response_data"];
    	
    	$this->response($response, 200);
    	
    	
    }
    
    public function add_balance_post(){
    	
    	$resp_json =  $_POST["json"];
    	if ( ! empty($_FILES))
    	{
    		
    		if(!isset($resp_json)){
    			$response["response_code"] = "400";
    			$response["response_msg"] = "param is invalid!";
    			$this->response($response, 400);
    			die;
    		}

    		$this->load->helper('util');
    		
    		$newName = "depos_".generateName($_FILES['file']['name']); 
    		$target_folder = UPLOAD_FILE_PATH ."/deposit/";
    		
    		if($this->resizeImageFixpixel($target_folder.$newName , $_FILES["file"]["tmp_name"])){
    			
    			$user_sess = $this->session->userdata['user_sess'];
    			$userId = $user_sess["user_id"];
    			 
    			$MyZone=3600*7;
    			$de_id= "PY".gmdate("YmdHis", time() + $MyZone);
    			
    			$resp_json = json_decode($resp_json);
    			
    			$request["user_id"] = $userId;
    			$request["de_id"] = $de_id;
    			$request["name"] = $user_sess["user_name"];
    			$request["phone"] =  $user_sess["user_phone"];
    			$request["detail"] = $resp_json->detail ." . ". $resp_json->remark ;
    			$request["amount"] = $resp_json->amount;
    			$request["photo"] = $newName;
    			$request["by_who"] = $user_sess["user_name"];
    			
    			if((float)$request["amount"] <= 0 ){
    				 
    				$response["response_code"] = "403";
    				$response["response_msg"] = "amount param is invalid!";
    				$this->response($response, 403);
    				die;
    			}
    			
    			
    			 
    			if(!$this->BalanceTransactionModel->addBalance($request)){
    				$response["response_code"] = "500";
    				$response["response_msg"] = "Fail to insert! ";
    				$this->response($response, 500);
    			}else{
    				$response["response_code"] = "200";
    				$response["response_msg"] = "insert successfully!";
    				$this->response($response, 200);
    			}
    			
    		}else{
    			$response["response_code"] = "500";
    			$response["response_msg"] = "Fail to insert! ";
    			$this->response($response, 500);
    		}
    		
    	}else{
    		$response["response_code"] = "400";
    		$response["response_msg"] = "FILE param is invalid!";
    		$this->response($response, 400);
    		die;
    	}
	
    }
    
    function resizeImageFixpixel($targetfolder , $sourcefolder){
    	
    	$this->load->library('s3'); // add Amazon Libray
    	$source_img = $sourcefolder;
    	$destination_img = $targetfolder;
    	$info = getimagesize($source_img);
    	list($width, $height) = $info;
    	
    		
    	// Resample
    	$image_p = imagecreatetruecolor($width, $height);
    	if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/jpg')
    		$image = imagecreatefromjpeg($source_img);
    	elseif ($info['mime'] == 'image/gif')
    	$image = imagecreatefromgif($source_img);
    	elseif ($info['mime'] == 'image/png')
    	$image = imagecreatefrompng($source_img);
    	else
    		return false;
    	$white = imagecolorallocate($image_p,  255, 255, 255);
    	imagefilledrectangle($image_p, 0, 0, $width, $height, $white);
    	imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height);
    	imagejpeg($image_p, $destination_img, 80);
    	$bucket='myfashion2017';
    
    	if($this->s3->putObjectFile($destination_img, $bucket , substr($targetfolder,2), S3::ACL_PUBLIC_READ) ){
    		unlink($destination_img);
    		return true;
    	}
    	return false;
    	//return imagejpeg($image_p, $destination_img, $quality);
    
    }
    
    
    
}