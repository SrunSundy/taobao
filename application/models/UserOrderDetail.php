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
  
  public function summaryOrder1($phone, $userId){
  
   	$sql = "SELECT  COUNT(CASE WHEN o.status!='4' AND (s.arrivall IS NULL OR s.arrivall=1 OR s.arrivall=0) then 1 ELSE NULL END) as allOrder,
  	COUNT(CASE WHEN  s.arrivall = 1 then 1 ELSE NULL END) as arrival,
  	COUNT(CASE WHEN  s.arrivall = 2 then 1 ELSE NULL END) as delivery,
  	COUNT(CASE WHEN  s.arrivall = 1 then 1 ELSE NULL END) as waitingArrival,
  	COUNT(CASE WHEN o.status=4 then 1 ELSE NULL END) as outstock
  	FROM tblorder o INNER JOIN tblcustomer c ON o.customerId=c.username LEFT JOIN syncode s ON o.synCode=s.synCode
  	WHERE ";
   	
   	$params = array();
   	if(isset($phone) && isset($userId)){
   		$sql .= " sdCustomerPhone=? AND o.customerId=? ";
   		array_push($params, $phone , $userId);
   	}else{

   		if(isset($phone)){
   			$sql .= " sdCustomerPhone=? ";
   			array_push($params, $phone);
   		}else{
   			$sql .= " o.customerId=? ";
   			array_push($params, $userId);
   		}
   	}
   	
   	
  	$query = $this->db->query($sql , $params);
  	return $query->row();
  		
  
  }
  
  ############################### deliver ############################
  public function getDeliverLimit($request){
    $customerId = $request["customerId"];
    $row = (int)$request["row"];
		$page = (int)$request["page"];
    $limit = $row;
		$offset = ($row*$page)-$row;
    $param = array($customerId, $limit, $offset );
    $sql = "SELECT s.arrivall, o.status,o.vid,o.dateOrder,o.synCode,weight, fee,o.price,o.mImage,o.qty, o.oid,o.size,o.color,o.price,o.curency,o.discount,o.mlink,o.total,o.deliverDate,o.invoiceNote,o.note
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=? AND s.arrivall='2' 	ORDER BY o.dateOrder DESC
            LIMIT ? OFFSET ? ";	
		$query = $this->db->query($sql , $param);
		return $query->result();
  }

  public function getDeliverCount($request){
    $customerId = $request["customerId"];
    $param = array($customerId);
    $sql = "SELECT COUNT(*) as totalrow
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=? AND s.arrivall='2' 	ORDER BY o.dateOrder DESC";	
		$query = $this->db->query($sql , $param)->row();
		return $query->totalrow;
  }
  ############################### end  deliver ############################

  ############################### Awaiting Delivery Limit ############################
	public function getAwaitingDeliveryLimit($request){
    $customerId = $request["customerId"];
    $row = (int)$request["row"];
		$page = (int)$request["page"];
    $limit = $row;
		$offset = ($row*$page)-$row;
    $param = array($customerId, $limit, $offset );
    $sql = "SELECT  s.arrivall,o.status,o.vid,o.dateOrder, o.synCode,weight, fee,o.price,o.mImage,o.qty, o.oid,o.size,o.color,o.price,o.curency,o.discount,o.mlink,o.total,o.deliverDate,o.invoiceNote,o.note
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=? AND s.arrivall='1' ORDER BY o.dateOrder DESC
            LIMIT ? OFFSET ? ";	
		$query = $this->db->query($sql , $param);
		return $query->result();
  }
  public function getAwaitingDeliveryCount($request){
    $customerId = $request["customerId"];
    $param = array($customerId);
    $sql = "SELECT COUNT(*) as totalrow
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=? AND s.arrivall='1'";	
		$query = $this->db->query($sql , $param)->row();
		return $query->totalrow;
  }
  ###############################End Awaiting Delivery Limit ############################
  
  #################### New arrival ##############
  public function getNeworderLimit($request){
    $customerId = $request["customerId"];
    $row = (int)$request["row"];
		$page = (int)$request["page"];
    $limit = $row;
		$offset = ($row*$page)-$row;
    $param = array($customerId, $limit, $offset );
    $sql = "SELECT  s.arrivall,o.status, o.vid,o.dateOrder,o.synCode,weight, fee,o.price,o.mImage,o.qty, o.oid,o.size,o.color,o.price,o.curency,o.discount,o.mlink,o.total,o.deliverDate,o.invoiceNote,o.note
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=? AND 	 o.status!='4'
	            		AND (s.arrivall IS NULL OR s.arrivall=1 OR s.arrivall=0) 
          	ORDER BY o.dateOrder DESC
            LIMIT ? OFFSET ?";	
		$query = $this->db->query($sql , $param);
		return $query->result();
  }
  public function getNeworderCount($request){
    $customerId = $request["customerId"];
    $param = array($customerId);
    $sql = "SELECT COUNT(*) as totalrow
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=? AND 	 o.status!='4'
	            		AND (s.arrivall IS NULL OR s.arrivall=1 OR s.arrivall=0) ";	
		$query = $this->db->query($sql , $param)->row();
		return $query->totalrow;
  }
  ###################### end new arrival #################33

  ################################ get outstock ####################33
  public function getOutStockLimit($request){
    $customerId = $request["customerId"];
    $row = (int)$request["row"];
    $page = (int)$request["page"];
    $limit = $row;
		$offset = ($row*$page)-$row;
    $param = array($customerId, $limit, $offset );
   
    $sql = "SELECT  s.arrivall,o.status,o.vid,o.dateOrder, o.synCode,weight, fee,o.price,o.mImage,o.qty, o.oid,o.size,o.color,o.price,o.curency,o.discount,o.mlink,o.total,o.deliverDate,o.invoiceNote,o.note
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=?	AND o.status='4' 	ORDER BY o.dateOrder DESC
            LIMIT ? OFFSET ?";
		$query = $this->db->query($sql , $param);
		return $query->result();
  }
  
  public function getOutStockCount($request){
    $customerId = $request["customerId"];

    $param = array($customerId);
    $sql = "SELECT COUNT(*) as totalrow
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=?	AND o.status='4'";
            
		$query = $this->db->query($sql , $param)->row();
		return $query->totalrow;
  }
   ################################ end get outstock ####################


   #### Search ########
   public function searchOrder($request){
    $customerId = $request["customerId"];
    $synCode = $request["synCode"];
		$startDate = $request["startdate"];
    $endDate = $request["endDate"];
    $param = array($customerId, $endDate, $startDate, $synCode );
    $sql = "SELECT  s.arrivall,o.status, o.vid,o.dateOrder,o.synCode,weight, fee,o.price,o.mImage,o.qty, o.oid,o.size,o.color,o.price,o.curency,o.discount,o.mlink,o.total,o.deliverDate,o.invoiceNote,o.note
            FROM tblorder o 
            LEFT JOIN syncode s ON o.synCode=s.synCode 
            WHERE o.customerId=? AND o.dateOrder <=? AND o.dateOrder >=? AND o.synCode=?
          	ORDER BY o.dateOrder DESC";	
		$query = $this->db->query($sql , $param);
		return $query->result();
  }

}

?>