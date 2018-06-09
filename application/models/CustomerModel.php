<?php

class CustomerModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	
	public function addCustomer($request){
		
		$param = array();
		$sql = " INSERT INTO tblcustomer(
					fullName,
					gender,
					phone,
					address,
					username,
					email,
					password,
					logFrom,
					status)
				VALUES(?,?,?,?,?,?,?,?,?) ";
		
		
		array_push($param, $request["fullName"], $request["gender"], $request["phone"], $request["address"]
						 , $request["username"], $request["email"], $request["password"], $request["logFrom"]
						 , $request["status"]);
		
		$this->db->query($sql , $param);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
	public function listCustomer($cusId){
	
			
		$param = array();
		$sql = " SELECT uid,
				     fullName,
				     username
				FROM tblcustomer WHERE username = ? ";
	
	
		array_push($param, $cusId);
	
		$query = $this->db->query($sql , $param);
			
		return $query->result();
	}
	

}

?>