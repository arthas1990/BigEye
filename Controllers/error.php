<?php

class Error extends Controller{
	function __construct(){
		parent::__construct();
	}
		function index($arg="این صفحه وجود ندارد"){
			$this->view->msg=$arg;
			$this->view->render('error/index');
			exit;
		}
		
	
}


?>