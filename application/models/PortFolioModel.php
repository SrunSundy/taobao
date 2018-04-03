<?php

class PortFolioModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	
	public function listPortFolio($request){
		
		$row = (int)$request["row"];
		$page = (int)$request["page"];
		
		$limit = $row;
		$offset = ($row*$page)-$row;
		$sort_type = " potf_id DESC ";
		
		 
		$param = array();
		$sql = " SELECT potf_id,
				     potf_img_name,
				     created_date
				FROM tblportfolio WHERE status = 1 ";

		
		$query_record = $this->db->query($sql);
		$total_record = count($query_record->result());
		$total_page = $total_record / $row;
		if( ($total_record % $row) > 0){
			$total_page += 1;
		}
		
		$response["total_record"] = $total_record;
		$response["total_page"] = (int)$total_page;
		
		$sql .= "\n ORDER BY ".$sort_type;
		$sql .= "\n LIMIT ? OFFSET ? ";		
		array_push($param, $limit , $offset);
		
		$query = $this->db->query($sql , $param);
		$response["response_data"] = $query->result();
			
		return $response;
		
	}
	

}

?>