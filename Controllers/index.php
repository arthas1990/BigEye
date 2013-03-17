<?php
class	Index extends Controller{
	function __construct(){
	parent::__construct();
		/*//echo 'we are in index';*/
	}
		function index(){
		$this->view->render('index/index');
	}
		public function run(){
		$this->model->run();	
	}
	
}
?>