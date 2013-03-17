<?php

class Controller{
	function __construct(){
		//echo"'Main Controller";	
		$this->view=new View(); 
	}
	public function loadModel($name){
		$path="Models/".$name."_model.php";
		if(file_exists($path)){
			require($path);
			$modelname=$name."_Model";
			
			$this->model=new $modelname();
			
		}
		
	}	
}

?>