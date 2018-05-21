<?php

class UserOrderDetail extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	
	public function summaryOrder($phone){
			 
		$param = array($phone);
		$sql = "SELECT  COUNT(CASE WHEN o.status!='4' AND (s.arrivall IS NULL OR s.arrivall=1 OR s.arrivall=0) then 1 ELSE NULL END) as allOrder,
				COUNT(CASE WHEN  s.arrivall = 1 then 1 ELSE NULL END) as arrival,
				COUNT(CASE WHEN  s.arrivall = 2 then 1 ELSE NULL END) as delivery,
				COUNT(CASE WHEN  s.arrivall = 1 then 1 ELSE NULL END) as waitingArrival,
				COUNT(CASE WHEN o.status=4 then 1 ELSE NULL END) as outstock
				FROM tblorder o INNER JOIN tblcustomer c ON o.customerId=c.username LEFT JOIN syncode s ON o.synCode=s.synCode 
				WHERE (sdCustomerPhone='$phone' OR o.customerId='1027761280620309' )";	
		$query = $this->db->query($sql , $param);
		return $query->result();
			
		
	}
	

}

?>