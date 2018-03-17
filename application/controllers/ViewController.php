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
	    $this->load->view('pages/myorder');
	   
	 /*   if($param == "/"){
	        $this->load->view('pages/myorder');
	    }
	    else if($param){
	        $this->load->view('pages/'.$param);
	    }*/
	    
	}
	
	public function my_cart(){
	    $this->load->view('pages/mycart');
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
	
	
}
