<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();
        $this->load->model('UserOrderDetail');
        $this->load->model('BalanceModel');
        $this->load->library('session');
        
        $user_sess = $this->session->userdata('user_sess');
        if(!empty($user_sess)){
        	$this->load->model("CartModel");
	        $myRecentCart = $this->CartModel->listCartByUserId($user_sess["user_id"]);
	        $allData = json_decode(json_encode($myRecentCart["response_data"]), true);
	        
	        $this->session->set_userdata('my_cart', $allData);
        }
        
        
        
        //$this->lang->load('message',$this->session->userdata('site_lang'));
        
        
    }
	public function index()
	{
	    $this->load->view('pages/home');
	   
	}
	
	public function home(){
	    $this->load->view('pages/home');
	    
	}
	
	public function about_us(){
	    $this->load->view('pages/aboutus');
	    
	}
	
	public function how_to_order(){
	    $this->load->view('pages/howtoorder');
	}
	
	public function my_order(){
		
		$user_sess = $this->session->userdata('user_sess');
		if(empty($user_sess)){
			redirect('/login', 'refresh');
		}
	  $userphone=$user_sess['user_phone'];
	   // $param = $this->uri->segment(1);
      $data['sumaryOrder'] = $this->UserOrderDetail->summaryOrder($userphone);
      $data['awaitingPayment'] = $this->BalanceModel->awaitingPayment($userphone);
      $data['sumDeposit'] = $this->BalanceModel->sumDeposit($userphone);
	    $this->load->view('pages/myorder',$data);
	   
	 /*   if($param == "/"){
	        $this->load->view('pages/myorder');
	    }
	    else if($param){
	        $this->load->view('pages/'.$param);
	    }*/ 
	    
	}
	
	public function my_cart(){
		//$cart=@$this->session->userdata['my_cart'];
		$user_sess = $this->session->userdata('user_sess');
		if(empty($user_sess)){
			redirect('/login', 'refresh');
		}
		
		
		$data['awaiting_payment'] = $this->BalanceModel->awaitingPayment($user_sess['user_phone']);
		$data['my_balance'] = $this->BalanceModel->sumDeposit($user_sess['user_phone']);
		
	    $this->load->view('pages/mycart', $data);
	}
	public function empty_cart(){
		$this->load->helper('url');
		$this->session->userdata['my_cart']=null;
		redirect('my_cart', 'refresh');
	}
	public function scrape(){
		
		$user_sess = $this->session->userdata('user_sess');
		if(empty($user_sess)){
			redirect('/login', 'refresh');
		}
	    
	    $url = $this->input->get('input_url');
	    $resp["url"] = $url;
	    $this->load->view('pages/scrape' , $resp);
	}
	
	public function dashboard(){
		
		$user_sess = $this->session->userdata('user_sess');
		if(empty($user_sess)){
			redirect('/login', 'refresh');
		}
		
	    $this->load->view('pages/dashboard');
	}
	
	public function address_record(){
		
		$user_sess = $this->session->userdata('user_sess');
		if(empty($user_sess)){
			redirect('/login', 'refresh');
		}
		
		$this->load->view('pages/addressrecord');
	}
	
	public function cost_calculator(){
	    $this->load->view('pages/costcalculator');
	}
	
	public function help(){
	    $this->load->view('pages/help');
	}
	
	public function list_news(){
		$this->load->view('pages/listnews');
	}
	
	public function list_portfolio(){
		$this->load->view('pages/listportfolio');
	}
	
	public function login(){
		$this->load->view('pages/login');
	}
	
	public function list_topup(){
		
		$user_sess = $this->session->userdata('user_sess');
		if(empty($user_sess)){
			redirect('/login', 'refresh');
		}
		
		$myBalance = $this->BalanceModel->sumDeposit($user_sess['user_phone']);
		$msg = $this->input->post('msg');
		if(isset($msg)){
			$resp["msg"] = $msg;
			$resp["my_balance"] = $myBalance;
			$this->load->view('pages/listtopup', $resp);
		}else{
			$resp["msg"] = "";
			$resp["my_balance"] = $myBalance;
			$this->load->view('pages/listtopup', $resp);
		}
		
	}
	
	public function list_withdraw(){
		$this->load->view('pages/listwithdraw');
	}
	
	public function order_success(){
		$msg = $this->input->post('msg');
		if(isset($msg)){
			$this->load->view('pages/ordersuccess');
		}else{
			redirect('/my_cart', 'refresh');
		}
		
	}
	
	public function topup(){
		$this->load->view('pages/topup');
	}
	
	public function withdraw(){
		$this->load->view('pages/withdraw');
	}
	
	public function news_detail(){
		
		$newsId = $this->input->get('news_id');
		
		if(!isset($newsId) || $newsId == null ){
		//	$this->load->view('pages/listnews');
			redirect('list_news');
		}else{
			
			$resp["news_id"] = $newsId;
			$this->load->view('pages/newsdetail', $resp);
		}
		
	}
	
	
}
