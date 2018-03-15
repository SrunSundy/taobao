<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');

require APPPATH . '/libraries/REST_Controller.php';
class AddToCartController extends REST_Controller
{
    public function __construct() {
        parent::__construct();     
    }

    public function index_get(){
    	echo "234";
    }

    public function add_to_cart_post(){
        
        $reqt_data = $this->input->post('reqt_data');
        
      
       
        if(!isset($this->session->userdata['my_cart'])){
            $myRecentCart = array();
            array_push($myRecentCart, $reqt_data);
            $this->session->set_userdata('my_cart', $myRecentCart);
        }else{
            $myRecentCart = array();
            $myRecentCart = $this->session->userdata['my_cart'];
            array_push( $myRecentCart , $reqt_data);
            $this->session->set_userdata('my_cart', $myRecentCart);
        }
        
        
       
        $resp_data["my_cart_num"] = count($this->session->userdata['my_cart']);
        
        $this->response( $resp_data,200);
        
    }
}