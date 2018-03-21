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
        
        $url = $this->input->get('url');
        $query_str = parse_url($url, PHP_URL_QUERY);
        parse_str($query_str, $query_params);
        $id= $query_params['id'];
        $data = [];
        $data['size'] = '';
        $data['img'] = '';
        $data['color'] = '';
        $data['colorImage'] = '';
        
        $data = file_get_contents("https://hws.alicdn.com/cache/wdetail/5.0/?id=$id");
        $data1 = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
            return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UTF-16BE');
        }, $data);
            
            
        $data=json_decode($data1,true) ;
        
       
        $itemPrice = "";
        if(isset($data['data']['apiStack'])){
            $priceDom = $data['data']['apiStack'];
            if(count($priceDom) > 0){
                $priceInnerDom = $priceDom[0];
                if(isset($priceInnerDom["value"])){
                    $itemPrice = json_decode($priceInnerDom["value"]);
                    
                    $aliasDom = $itemPrice->data->itemInfoModel->priceUnits;
                    if(isset($aliasDom)){
                        if(count($aliasDom) > 0){
                            $priceTag = $aliasDom[0];
                            $itemPrice = $priceTag->price;
                        }
                    }
                        
                }
            }
        }
        
        $myDesc ="";
        
        if(isset($data['data']['descInfo']['briefDescUrl'])){
            $descImage = urldecode ("http:".$data['data']['descInfo']['briefDescUrl']);
            $getDescImage = file_get_contents($descImage);
            $getDescImage=json_decode($getDescImage,true);
            
            
            if($getDescImage['data']['images'])
                $myDesc = $getDescImage['data']['images'];
        }
        
       
        $sizearryName = array();
        $colorImageArray = array();
        $colorArray = array();
        if(isset($data['data']['skuModel']['skuProps'])){
            foreach($data['data']['skuModel']['skuProps'] as $value){
                
                
                if($value['propName']=='尺寸' || $value['propName']=='尺码'){
                    
                   
                    foreach($value['values'] as $size){
                        
                        if(isset($size['name']))
                            $sizearryName[]=$size['name'];
                            
                    }
                }
                
              
                if($value['propName']=='颜色分类' || $value['propName']=='主要颜色' ||  $value['propName']=='颜色'){
                    foreach($value['values'] as $color){
                        
                        if(isset($color['name']))
                            $colorArray[]=$color['name'];
                            if(isset($color['imgUrl']))
                                $colorImageArray[]=$color['imgUrl'];
                                
                    }
                }
                
            }
        }
        
        
        $image=$data['data']['itemInfoModel']['picsPath'];
        $title = '';
        
        
        $myData['title'] = $data['data']['itemInfoModel']['title'];
        $myData['color'] = $colorArray;
        $myData['colorImage'] = $colorImageArray;
        $myData['image'] = $image;
        $myData['size'] = (empty($sizearryName) ? '':$sizearryName);
        $myData['price'] = $itemPrice;
        $myData["image_detail"] = $myDesc;
        
        $this->response($myData ,200);
        
        
    }
}