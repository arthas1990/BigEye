<?php

class Mdl_halt extends Controller{
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
		$this->view->set('mdl_halt/index');
		
		$this->view->set_change('{URL}',URL);
		$this->view->set_echo();
		$this->view->set_clear();
		$this->view->renderFoot();
	}
	public function pst_shutServer(){
		$this->commander->execute('mdl_halt server shut');
		$this->view->render('mdl_halt/resault');
	}
	public function pst_resetServer(){
		$this->commander->execute('mdl_halt server reset');
		$this->view->render('mdl_halt/resault');
	}
	public function pst_shutService(){
		$this->commander->execute('mdl_halt service '.$_POST['service_nam'].' '.$_POST['command']);
		$this->view->render('mdl_halt/resault');
	}
	public function run(){
		$this->model->run();	
	}
	
	
}


?>