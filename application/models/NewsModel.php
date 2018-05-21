<?php

class NewsModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	
	public function listNews($request){
		
		$row = (int)$request["row"];
		$page = (int)$request["page"];
		
		$limit = $row;
		$offset = ($row*$page)-$row;
		$sort_type = " news_id DESC ";
		
		 
		$param = array();
		$sql = " SELECT news_id,
				     title,
				     thum_photo,
					 content,
					 news_format
				FROM tblnews WHERE status = 1 ";

		
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
	
	public function listRecommendedLatestNews($request){
		
		$row = (int)$request["row"];		
		$limit = $row;
		
			
		$param = array();
		$sql = " SELECT news_id,
				     title,
				     thum_photo,
					 news_format,
					 created_date
				FROM tblnews WHERE status = 1 AND news_id <> ? ";
		
	
		$sql .= "\n ORDER BY news_id DESC ";
		$sql .= "\n LIMIT ? ";
		array_push($param, $request["news_id"] , $limit);
		
		$query = $this->db->query($sql , $param);
		$response["response_data"] = $query->result();
			
		return $response;
	}
	
	public function getNews($newsId){
		
		$param = array();
		$sql = " SELECT n.news_id,
				     n.title,
				     n.thum_photo,
					 n.content,
					 n.news_format,
					 n.created_date,
					 n.view_cnt,
					 l.username
				FROM tblnews n 
				LEFT JOIN mylogin l ON n.creator = l.id
				WHERE n.status = 1 
				AND n.news_id = ? ";
		
		
		array_push($param, $newsId);
		$query = $this->db->query($sql , $param);
		$response["response_data"] = $query->row();
		return $response;
	}
	

}

?>