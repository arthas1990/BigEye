<?php
class	About extends Controller{
	function __construct(){
	parent::__construct();
		
	}
	function index(){
		$this->view->render('about/index');
	}
	public function other($arg=false){
		//echo 'we are inside other';
		//echo 'Oprional arg='.$arg;
	
		//$this->view->show=$model->show();
	}
		public function run(){
		$this->model->run();	
	}
	
	
}
?>