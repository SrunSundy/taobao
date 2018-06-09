<?php

class BalanceTransactionModel extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
  
 
	public function addBalance($request){
	
		$param = array();
		$zonename = "Asia/Phnom_Penh";
		$current_time = new DateTime();
		$current_time->setTimezone(new DateTimeZone($zonename));
		$current_time = $current_time->format('Y-m-d H:i:s');
		
		$sql = " INSERT INTO deposit(de_id,
					name,
					phone,
					description,
					amount,
					photo,
					created_date,
					by_who,
					status,
					de_status)
			VALUES(?,?,?,?,?,?,?,?,?,?) ";
	
	
		array_push($param, $request["de_id"], $request["name"], $request["phone"] ,$request["detail"], 
						   $request["amount"] , $request["photo"], $current_time , $request["by_who"] , 0 , 0);
	
		$this->db->query($sql , $param);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
	public function listBalance($request){
		
		$row = (int)$request["row"];
		$page = (int)$request["page"];
		
		if(!$row) $row = 10;
		if(!$page) $page = 1;
		
		$limit = $row;
		$offset = ($row*$page)-$row;
		
		$param = array();
		
		$sql = " SELECT id,
					de_id,
				    created_date,
					de_status,
					amount
				FROM deposit
				WHERE phone = ? 
				ORDER BY id DESC";
		
		array_push($param, $request["phone"]);
		
		$query_record = $this->db->query($sql, $param);
		$total_record = count($query_record->result());
		$total_page = $total_record / $row;
		if( ($total_record % $row) > 0){
			$total_page += 1;
		}
		
		$response["total_record"] = $total_record;
		$response["total_page"] = (int)$total_page;
	
		$sql .= " LIMIT ? OFFSET ? ";
		array_push($param, $limit, $offset);
		
		$query = $this->db->query($sql , $param);
		$response["response_data"] = $query->result();
			
		return $response;
		
	}
	
}

?>