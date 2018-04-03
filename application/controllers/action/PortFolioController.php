<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');

require APPPATH . '/libraries/REST_Controller.php';
class PortFolioController extends REST_Controller
{
    public function __construct() {
        parent::__construct();     
        $this->load->model("PortFolioModel");
    }

    public function index_get(){
    	echo "234";
    }
    
    /*
      row = 15;
      page = 1;
      sort_type = 0 -- deafault: 0
                    - 0 means latest data
     */
    public function list_portfolio_get(){
    	
    	$row = $this->input->get('row');
    	$page = $this->input->get('page');
    	$sortType = $this->input->get('sort_type');
    	
    	$request["row"] = (isset($row)) ? $row: 15;
    	$request["page"] = (isset($page)) ? $page : 1;
    	$request["sort_type"] = (isset($sortType)) ? $sortType : 0;
    	
    	$data = $this->PortFolioModel->listPortFolio($request);
    	
    	$response["response_code"] = "200";
    	$response["total_record"] = $data["total_record"];
    	$response["total_page"] = $data["total_page"];
    	$response["response_data"] = $data["response_data"];
    	$this->response($response, 200);
    	
    }


}