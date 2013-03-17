<?php

class Add_module extends Controller{
	function __construct(){
		parent::__construct();
		
}
	
	function index(){
		 
				$this->view->render('add_module/index');
			 

	}
	public function pst_add(){
	$upl=new Uploader();
	
	$done=$upl->upload($_FILES["mdl_file"],'application/zip','module','');
	//or application/x-gzip
	 
	$xml = simplexml_load_file("Modules_list/".$done.".xml");
	$this->view->renderHead();
	
	$this->view->set('add_module/add_module_head'); 
	$this->view->set_change('{Fileadd}',$xml->getName());
	$this->view->set_echo();
	$this->view->set_clear();	
	
	foreach($xml->children() as $child)
	{
		$this->view->set('add_module/add_module_details'); 
		$this->view->set_change('{property}',$child->getName());
		$this->view->set_change('{value}',$child);
		$this->view->set_echo();
		$this->view->set_clear();
	
	}

	$this->view->set('add_module/add_module_foot'); 
	$this->view->set_echo();
	$this->view->set_clear();
	
	$this->view->renderFoot();
	
	}
	public function pst_insert(){
		  $tmp=$this->model->insert();
		  if(!$tmp){
			$error=new Error();
			$error->index('خزا در زمان نصب ماژول');
		  }
		  $this->view->render('add_module/add_module_success');
	}
		public function run(){
		$this->model->run();	
	}
	
	
}


?>