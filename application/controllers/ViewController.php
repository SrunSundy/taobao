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
	    
	   // $param = $this->uri->segment(1);
	    $data['sumaryOrder']=$this->UserOrderDetail->summaryOrder('010959905');
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
	    $this->load->view('pages/mycart');
	}
	public function empty_cart(){
		$this->load->helper('url');
		$this->session->userdata['my_cart']=null;
		redirect('my_cart', 'refresh');
	}
	public function scrape(){
	    
	    $url = $this->input->get('input_url');
	    $resp["url"] = $url;
	    $this->load->view('pages/scrape' , $resp);
	}
	
	public function dashboard(){
	    $this->load->view('pages/dashboard');
	}
	
	public function address_record(){
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
