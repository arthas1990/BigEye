<?php
class Bootstrap extends Controller{
	 
 
	function __construct(){
	parent::__construct();
	
	require("Controllers/error.php"); 
	
	 $error=new Error();
			
			
		$url=isset($_GET['url'])?$_GET['url']:null;
		$url=rtrim($url,'/');
		$url= explode("/",$url);
	if(empty($url[0])){
		$url[0]='index';
	}
		$file="Controllers/".$url[0].".php";
		if(file_exists($file)){
			require($file);
		}else{
			$error->index("این ماژول وجود ندارد و یا خراب شده است");
			return false;
		}
		
		$controller=new $url[0];
		
		
		
		$controller->loadModel($url[0]);
		if(isset($url[1]))
		if(method_exists($controller,$url[1]) ){
			if(isset($url[2])){
				$controller->{$url[1]}($url[2]);
				
			}
			else{
				if(isset($url[1])){
					$controller->{$url[1]}();
				} 	
			}
		}else{
			$error->index('متد نامعتبر');
			return false;
		}
if(isset($url[1])){
	if((!(strstr($url[1],'xhr')))&& (!(strstr($url[1],'pst'))))
				$controller->index();
}else{$controller->index();}
			
	
	}
}

?>