<?php
class Commander{
	//private $Executers=Array('exec','system','shell_exec');
	 
	function __construct(){
		
	}
	
	public function execute($Command,$Executer=2){
	//ob_start();
	// eval ($this->Executers[$Executer]."('".HQDC.' '.$Command."');");
	
	//$result = ob_get_clean();
	
	// return shell_exec(HQDC.' '.$Command);
	$tmp=shell_exec(HQDC.' '.$Command);
	if(!$tmp){
		$error=new Error();
		$error->index('خطا در اجرای دستور');
	}
	return $tmp;
	}
}
