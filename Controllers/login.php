<?php
class	Login extends Controller{
	function __construct(){
	parent::__construct();
		
	}
	public function index(){
		
		$this->view->render('login/index');
	}
	public function run(){
		$count=$this->model->run();	
		if($count>0)
		{
			Session::init();
			Session::set('loggedIn',true);
			header('location:../Modules');
		}
		else{
			header('location:../login');
		}
		
		
	}
		public function logout(){
		Session::destroy();
			header('location:../login');
			exit;
	}
}
?>