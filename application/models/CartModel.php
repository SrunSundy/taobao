<?php

class CartModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	
	public function insertCart($request){
		
		$param = array();
		$sql = " INSERT INTO tblcart(
					user_id,
					item_id,
					item_title,
					item_url,
					item_size,
					item_color,
					item_domestic,
					item_price,
					item_price_dollar,
					item_message,
					item_photo,
					item_qty
					) VALUES(?,?,?,?,?,?,?,?,?,?,?,?) ";
		
		
		array_push($param, $request["user_id"], $request["item_id"], $request["item_title"], $request["item_url"]
		, $request["item_size"] , $request["item_color"], $request["item_domestic"], $request["item_price"]
		, $request["item_price_dollar"], $request["item_message"], $request["item_photo"], $request["item_qty"]);
		
		$this->db->query($sql , $param);
		$insert_id = $this->db->insert_id();
		return $insert_id;
		
	} 
	
	public function checkIfItemExist($request){
		
		$param = array();
		$sql = " SELECT count(*) AS cnt
			FROM tblcart WHERE item_id = ? AND item_size = ? AND item_color = ? AND user_id = ? ";
		
		array_push($param, $request["item_id"] , $request["item_size"], $request["item_color"], $request["user_id"]);
		
		$query = $this->db->query($sql , $param);
		$response = $query->row();
				
		return ($response->cnt > 0) ? true:false;
		
		
	}
	
	public function updateCart($request){
		
		$param = array();
		$sql = " UPDATE tblcart SET item_qty = item_qty + ? WHERE item_id = ? AND item_size = ? AND item_color = ? AND user_id = ?  ";
		
		array_push($param,  $request["item_qty"], $request["item_id"] , $request["item_size"], $request["item_color"], $request["user_id"]);
		
		return $this->db->query($sql , $param);
		
	}
	
	public function listCartByUserId($userId){
		
		$param = array();
		$sql = " SELECT item_id,
				     item_title,
				     item_url,
					 item_size,
					 item_color,
					 item_domestic,
					 item_price,
					 item_price_dollar,
					 item_message,
					 item_photo,
					 item_qty
				FROM tblcart WHERE user_id = ? ";
		
		
		
		$sql .= "\n ORDER BY cart_id ASC ";
		array_push($param, $userId);
		
		$query = $this->db->query($sql , $param);
		$response["response_data"] = $query->result();
			
		return $response;
		
	}
	
	public function countCartByUserId($userId){
		
		$param = array();
		$sql = " SELECT count(*) AS cnt
				FROM tblcart WHERE  user_id = ? ";
		
		array_push($param, $userId);
		
		$query = $this->db->query($sql , $param);
		$response = $query->row();
			
		return $response->cnt;
		
	}
	
	public function deleteCartByUserId( $resq  ){
		
		$param = array();
		$sql = " DELETE FROM tblcart 
				WHERE user_id = ? 
				AND item_id = ? 
				AND item_size = ?
				AND item_color = ? ";
		
		array_push($param, $resq["user_id"] ,$resq["item_id"] ,$resq["item_size"] , $resq["item_color"]  );
		
		return $this->db->query($sql , $param);
		
	}
	
	public function deleteAllCartByUserId($userId){
		
		$param = array();
		$sql = " DELETE FROM tblcart
				WHERE user_id = ? ";
		
		array_push($param, $userId );
		
		return $this->db->query($sql , $param);
		
	}

}

?>