<?php
 


class Uploader {
	
	function __construct(){
	
}
public function upload($upload_src_file,$upload_mime_type='image/jpeg',$upload_usage_part='public',$upload_des_dir='Upload/'){
$error=new Error();

	if ($upload_src_file["type"] == $upload_mime_type){

		if (file_exists($upload_des_dir . $upload_src_file["name"]))
		  {
			$error->index($upload_src_file["name"] . " این فایل در سیستم وجود دارد ");
		  }
		else
		  {
		  move_uploaded_file($upload_src_file["tmp_name"],
		  $upload_des_dir . $upload_src_file["name"]);
		   
		  }
		  
		  
	}else{
			
			$error->index('نوع فایل نامعتبر است');
			
	}
	
switch($upload_usage_part){
	case 'public':
		return $upload_des_dir . $upload_src_file["name"];
		break;
	case 'module':
	
		$archive = new PclZip($upload_src_file["name"]);
		$tmp=$archive->extract();
		unlink($upload_src_file["name"]);
		if ($tmp == 0) {
			 
			$error->index('خطا در زمان خارج کردن ماژول از حالت فشرده');
		}  
		return rtrim($upload_src_file["name"],'.zip');
		break;

	
}


}


}
