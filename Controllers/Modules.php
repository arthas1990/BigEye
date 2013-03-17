<?php

class Modules extends Controller{
	function __construct(){
		parent::__construct();
}
	
		/*function index(){
		 
				$this->view->render('modules/index');
			 

	}*/
	public function index(){
	 
		$all=$this->model->all();
		
			$this->view->renderHead();
			 
			foreach($all as $mdl){
			 
				$this->view->set('modules/module_icon');
				$this->view->set_change('{URL}',URL);
				$this->view->set_change('{module_name}',$mdl['ModuleName']);
				$this->view->set_change('{module_icon}',$mdl['ModuleIcon']);
				$this->view->set_change('{module_describe}',$mdl['ModuleDetails']); 
				$this->view->set_echo();
				$this->view->set_clear();
			}
		
			$this->view->renderFoot();
		
	}
	public function moduleDetails(){
		  
	}
		public function run(){
		$this->model->run();	
	}
	
	
}


?>