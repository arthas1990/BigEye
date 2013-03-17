<?php

class View{
private $tmp;
	function __construct(){
		//echo 'we have a view';
	}
	public function render($name,$noInclude=false){
		if($noInclude==true){
			require("Views/".$name.".php");	
		}
		else{
			require("Views/header.php");
			require("Views/".$name.".php");	
			require("Views/footer.php");
		}
	}
 
	public function renderHead(){
		require("Views/header.php");	
	}
	public function renderFoot(){
		require("Views/footer.php");	
	}
	
	public function set($name){
		$this->tmp=file_get_contents("Views/".$name.".php");
		
	}
	public function set_change($tag,$rep){
		
		$this->tmp=str_replace($tag,$rep,$this->tmp);
		
	}
	public function set_add_html($html){
		
		$this->tmp.=$html;
		
	}
	public function set_clear(){
		$this->tmp= '';
	}
	public function set_echo(){
		echo $this->tmp;
	}
}

?>