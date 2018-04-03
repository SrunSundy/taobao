<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');

require APPPATH . '/libraries/REST_Controller.php';
class ScrapeDataController extends REST_Controller
{
    public function __construct() {
        parent::__construct();     
    }

    public function index_get(){
    	echo "234";
    }

    public function scrape_data_by_url_get(){
        
    	$url = urldecode($this->input->get('url'));
    	$query_str = parse_url($url, PHP_URL_QUERY);
    	parse_str($query_str, $query_params);
    	$id= $query_params['id'];
    	$api_server = 'http://api.onebound.cn/taobao/api_call.php';
    	$url = $api_server.'?api_name=item_get&key=cambodg.com&is_promotion=1&num_iid='.$id;
    	
    	$data['size'] = '';
    	$data['img'] = '';
    	$data['color'] = '';
    	$data['colorImage'] = '';
    	
    	$data = file_get_contents($url);
    	$obj = json_decode($data,true);
    	
    	$price = "";
    	$data_title = "";
    	$imagedetail = array();
    	$colorArray = array();
    	$colorImageArray = array();
    	$sizearryName = array();
    	
    	$myDesc = array();

    	if(isset($obj['item'])){
    		
    		$itemInfo = $obj['item'];
    		
    		if(isset($obj['item']['price']))
    			$price= $obj['item']['price'];
    		
    		if(isset($obj['item']['title']))
    			$data_title = $obj['item']['title'];
    		
    		if(isset($itemInfo['item_imgs'])){
    			foreach($itemInfo['item_imgs'] as $key=>$value){
    				$imagedetail[]=$value['url'];
    			
    			}
    		}
    		
    		
    		if(isset($itemInfo["desc"])){
    			$doc = new DOMDocument();
    			$doc->loadHTML($itemInfo["desc"]);
    			$imageTags = $doc->getElementsByTagName('img');
    			
    			foreach($imageTags as $tag) {
    			
    				$myDesc[]=$tag->getAttribute('src');
    			}
    			 
    			
    		}
    		
    		
    		 
    		/*$skus = json_decode(json_encode($itemInfo['skus']),true);
    		$skus_arr = array();
    		
    		if($skus['sku']){
    			$qs = 0;
    			foreach($skus['sku'] as $sku){
    				$qs+=$sku['quantity'];
    			}
    			foreach($skus['sku'] as $sku){
    				if(!$sku['quantity'] && !$qs)$sku['quantity']=999;
    				$sku['price'] = $this->taobao_price($sku['price'],$itemInfo['num_iid'],$itemInfo['cid']);
    				$sku['orginal_price'] = $this->taobao_price($sku['orginal_price'],$itemInfo['num_iid'],$itemInfo['cid']);
    				$skus_arr[] = array(
    						$sku['sku_id'],
    						$sku['properties'],
    						$sku['price'],
    						(int)$sku['quantity'],
    						$sku['orginal_price']
    				);
    			}
    			 
    			 
    		}
    		
    		$skus_json = json_encode($skus_arr);*/
    		 
    		$prop_imgs_arr = array();
    		
    		if(isset($itemInfo['prop_imgs'])){
    			
    			$prop_imgs = json_decode(json_encode($itemInfo['prop_imgs']),true);
    			if($prop_imgs['prop_img']){
    				foreach($prop_imgs['prop_img'] as $prop_img){
    					$prop_imgs_arr[$prop_img['properties']] = $prop_img['url'];
    				}
    			}
    		}
    	
    			
    		
    		
    		$prop_array=array();
    		
    		if(isset($itemInfo['props_list'])){
    			foreach($itemInfo['props_list'] as $dk=>$val){
    				$dks=explode(':',$dk);
    				$vals=explode(':',$val);
    				$prop_img = !empty($prop_imgs_arr[$dks[0].':'.$dks[1]])?$prop_imgs_arr[$dks[0].':'.$dks[1]]:'';
    			
    				$prop_array[$dks[0]][$dks[1]]=array(
    						'prop_key'=>$dks[0],
    						'prop_val'=>$dks[1],
    						'name'=>$vals[0],
    						'value'=>$vals[1],
    						'pic_url'=>$prop_img,
    				);
    			}
    		}
    		
    		 
    		 
    		############################ 	feacg color and collor image ######################################
    		 
    		foreach($prop_array as $dk=>$dv){
    		 $dvv = current($dv);
    		
    		 foreach($dv as $dkk=>$value){
    		
	    			if($dvv['name']=='尺寸' || $dvv['name']=='尺码'){
	    				$sizearryName[]=$value['value'];
	    			}
	    			if($dvv['name']=='颜色分类' || $dvv['name']=='主要颜色' ||  $dvv['name']=='颜色'){
	    			   $colorArray[]=$value['value'];
	    			   $colorImageArray[]=$value['pic_url'];
	    			 }
    		   }
    		
    		
    		}
    		
    		
    		
    	}

    	
    	
		
		if(isset($obj["item"]["error"]) && $obj["item"]["error"] != ""){
			$myData["status"] = "410";
		}else
		{
			$myData["status"] = "200";
		}
        
        $myData['title'] = $data_title;
        $myData['color'] = $colorArray;
        $myData['colorImage'] = $colorImageArray;
        $myData['image'] = @$imagedetail;
        $myData['size'] = (empty($sizearryName) ? '':$sizearryName);
        $myData['price'] = $price;
        $myData["image_detail"] = $myDesc;
    	
        $this->response( $myData ,200);
        
        
    }
    
    function taobao_price($price,$id,$cid){
    	return $price*1;
    }
}