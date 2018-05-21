<?php

class AddressModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function listAddress($userId){
		
			
		$param = array();
		$sql = " SELECT addr_id,
				     rept_name,
				     rept_tel,
					 rept_country,
					 rept_city,
					 rept_postcode,
					 rept_addr,
					 is_default
				FROM tbladdress WHERE status = 1 
				AND user_id = ? ";
		
		
		
		$sql .= "\n ORDER BY addr_id ASC ";
		array_push($param, $userId);
		
		$query = $this->db->query($sql , $param);
		$response["response_data"] = $query->result();
			
		return $response;
	}
	
	public function getAddressCnt($userId){
		
		$param = array();
		$sql = " SELECT count(*) AS cnt
				FROM tbladdress WHERE status = 1
				AND user_id = ? ";
		
		array_push($param, $userId);
		
		$query = $this->db->query($sql , $param);
		$response = $query->row();
			
		return $response->cnt;
	}
	
	public function addAddress($request){
		
		$param = array();
		$sql = " INSERT INTO tbladdress(
					user_id,
					rept_name,
					rept_tel,
					rept_country,
					rept_city,
					rept_postcode,
					rept_addr,
					is_default )
				VALUES(?,?,?,?,?,?,?,?) ";
		
		
		array_push($param, $request["user_id"], $request["rept_name"], $request["rept_tel"], $request["rept_country"]
						 , $request["rept_city"], $request["rept_postcode"], $request["rept_addr"], $request["is_default"]);
		
		$this->db->query($sql , $param);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
	public function updateAddress($request){
		
		$param = array();
		$sql = " UPDATE tbladdress SET 
					rept_name = ?,
				    rept_tel = ?,
				    rept_country= ?,
					rept_city = ?,
					rept_postcode= ?,
					rept_addr = ?,
				    is_default = ? 
				 WHERE addr_id = ? ";
		
		array_push($param, $request["rept_name"], $request["rept_tel"], $request["rept_country"], $request["rept_city"]
						 , $request["rept_postcode"], $request["rept_addr"], $request["is_default"], $request["addr_id"]);
		
		return $this->db->query($sql , $param);
	}
		
	public function updateDefaultAddress($addrId){
		
		$param = array();
		$sql = " UPDATE tbladdress SET 
				is_default = 1 WHERE addr_id = ?";
		
		array_push($param, $addrId);
		
		return $this->db->query($sql , $param);
	}
	
	public function removeDefaultAddressByUserId($userId){
		
		$param = array();
		$sql = " UPDATE tbladdress SET
				is_default = 0 WHERE user_id = ?";
		
		array_push($param, $userId);
		
		return $this->db->query($sql , $param);
	}
	
	public function deleteAddress($addrId){
		
		$param = array();
		$sql = " DELETE FROM tbladdress WHERE addr_id = ?";
		
		array_push($param, $addrId);
		
		return $this->db->query($sql , $param);
		
	}

}

?>