<?php
class	Dashboard extends Controller{
	function __construct(){
		parent::__construct();
		
		if(Session::get('loggedIn')==false){
			Session::destroy();
			header('location:../login');
			exit;
		}
	$this->view->js=array('dashboard/js/script.js','dashboard/js/valid.js');
	}
	function index(){
		$this->view->render('dashboard/index');
	}
	function xhrInsert(){
		$this->model->xhrInsert();
	} 
		function xhrRoomInsert(){
		$this->model->xhrRoomInsert();
	} 
function xhrGetList(){
		$this->model->xhrGetList();
	} 
	function xhrDel(){
		$this->model->xhrDel();
	} 
}
?>