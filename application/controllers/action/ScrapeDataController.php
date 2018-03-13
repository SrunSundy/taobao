<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
class ScrapeDataController extends REST_Controller
{
    public function __construct() {
        parent::__construct();     
    }

    public function index_get(){
    	echo "234";
    }
    function switchLang($language = "") {
        
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
        
        redirect($_SERVER['HTTP_REFERER']);
        
    }
    function test_get(){
    	echo "234324";
    }
}