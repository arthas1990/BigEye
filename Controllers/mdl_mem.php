<?php

class Mdl_mem extends Controller{
private $commander='';
	function __construct(){
		parent::__construct();
		$this->commander=new Commander();
}
	
		/*function index(){
		 
				$this->view->render('modules/index');
			 

	}*/
	public function index(){
		$this->view->renderHead();
		$this->view->set('mdl_mem/index');
		$this->view->set_change('{URL}','Module_includes/mdl_mem/index.php');
		$this->view->set_echo();
		$this->view->set_clear();
		$this->view->renderFoot();
		
	
	}
	 
	public function run(){
		$this->model->run();	
	}
	
	
}


?>