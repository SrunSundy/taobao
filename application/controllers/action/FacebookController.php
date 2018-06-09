<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');

require APPPATH . '/libraries/REST_Controller.php';
//require APPPATH . '/libraries/Facebook/Facebook.php';

require_once $_SERVER['DOCUMENT_ROOT'].'chhoun/taobao/application/libraries/Facebook/autoload.php';

class FacebookController extends REST_Controller
{
	
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model("CustomerModel");
	}
	
	
	public function logout_get(){
		
		$this->session->unset_userdata('my_cart');
		$this->session->unset_userdata('user_sess');
		redirect('/', 'refresh');
		
	}
	
	
	public function fb_login_get(){
		
		$facebook = new Facebook\Facebook([
				'app_id' => fb_appId,
				'app_secret' => fb_appSecret,
				'default_graph_version' => 'v2.10',
				]);
		
		$helper = $facebook->getRedirectLoginHelper();
		try {
		  $accessToken = $helper->getAccessToken();
		  $response = $facebook->get('/me?fields=id,name,gender,email', $accessToken);
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Graph returned an error: ' . $e->getMessage();
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		}
		if (! isset($accessToken)) {
			var_dump($helper);
		  if ($helper->getError()) {
		    header('HTTP/1.0 401 Unauthorized');
		    echo "Error: " . $helper->getError() . "\n";
		    echo "Error Code: " . $helper->getErrorCode() . "\n";
		    echo "Error Reason: " . $helper->getErrorReason() . "\n";
		    echo "Error Description: " . $helper->getErrorDescription() . "\n";
		  } else {
		    header('HTTP/1.0 400 Bad Request');
		    echo 'Bad request';
		  }
		  exit;
		}
		
		
		$user = $response->getGraphUser();
		
		$dataFromModel = $this->CustomerModel->listCustomer($user['id']);		
		$isUserExist = (count($dataFromModel) > 0 ) ? true : false;

		$sess = array();
		if($isUserExist){
			
			$sess['user_name'] = $dataFromModel[0]->fullName;
			$sess['user_id'] = $dataFromModel[0]->username;
			$sess['user_manual_id'] = $dataFromModel[0]->uid;
			
		}else{
			
			$request["fullName"] = $user['name'];
			$request["gender"] = $user['gender'];
			$request["phone"] = "";
			$request["address"] = "";
			$request["username"] = $user['id'];
			$request["email"] = (isset($user['email'])) ? $user['email'] : "";
			$request["password"] = uniqid();
			$request["logFrom"] = "Facebook";
			$request["status"] = 1;
			
			$id = $this->CustomerModel->addCustomer($request);		
			
			$sess['user_name'] = $user['name'];
			$sess['user_id'] = $user['id'];
			$sess['user_manual_id'] = $id;
			
		}
		
		$sess['user_phone'] = "093971733";
		$this->load->model("CartModel");
		
		$myRecentCart = $this->CartModel->listCartByUserId($user['id']);
		$allData = json_decode(json_encode($myRecentCart["response_data"]), true);
		
		
		$user_sess = json_decode(json_encode($sess), true);
		
		$this->session->set_userdata('my_cart', $allData);
		$this->session->set_userdata('user_sess', $user_sess);
		redirect('/', 'refresh');
		
		
	}
	
}