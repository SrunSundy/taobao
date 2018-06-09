<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('moveImgGcloudToAmazon'))
{
	function moveImgGcloudToAmazon($souce, $destination){
		$this->load->library('s3'); // add Amazon Libray
		$bucket='dernham-store';
		if($this->s3->putObjectFile($souce, $bucket , substr($destination, 2), S3::ACL_PUBLIC_READ) ){
		  //unlink($destination_img);
			return true;
		}
	}
}


if ( ! function_exists('generateName'))
{
	function generateName($filename){
		$filename = strtoupper($filename);
		$ext = substr($filename, strrpos($filename, '.') + 1);
		$FileNameF = gmdate("YmdHis", time())."-".substr((string)microtime(), 2, 6);
		$exactfilename = 'Thefashion_'.$FileNameF.'.'. $ext;
		return $exactfilename;
	}
}



