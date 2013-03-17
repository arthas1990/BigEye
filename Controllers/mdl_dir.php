<?php

class Mdl_dir extends Controller{
	function __construct(){
		parent::__construct();
}
	
		/*function index(){
		 
				$this->view->render('modules/index');
			 

	}*/
	public function index(){
	if(isset($_GET['down'])){
	if(is_dir($_GET['down'])){
		$dirname=array_reverse(explode('/',$_GET['down']));
		$dirname=$dirname[0];
		$archive = new PclZip($dirname.'.zip');
		$v_list = $archive->add($_GET['down']);
		if ($v_list == 0) {
				die("Error : ".$archive->errorInfo(true));
		}
		header('Content-Disposition: attachment; filename="'.$dirname.'.zip"');
		echo file_get_contents($dirname.'.zip', true);
		exit;
	}
		$filename=array_reverse(explode('/',$_GET['down']));
		$filename=$filename[0];
		
		 header('Content-Disposition: attachment; filename="'.$filename.'"');
		 echo file_get_contents($_GET['down'], true);
		 exit;
	}
	$known_ext=Array('doc','docx','log','rtf','tex','txt',
	'jpg','jpeg','tif','png','gif','psd','bmp',
	'avi','wmv','mpg','mp4','3gp','flv',
	'mp3','wma','ogg',
	'sys','exe','com','sh','cmd',
	'lnk',
	'php','asp','aspx','php3','js','css','xml','c','cpp','dir');
	if(!isset($_GET['dir']) || $_GET['dir']=='/'){$dir_tmp='/';}else {$dir_tmp=$_GET['dir'].'/';}
	
	$tmp=scandir($dir_tmp);

	$this->view->renderHead();
	$this->view->render('mdl_dir/files_head',true);
	foreach($tmp as $file){
				if(($file!='.') && ($file!='..')){
				$this->view->set('mdl_dir/files_item');
				$tmpext=array_reverse(explode('.',$file));
				$dir_move=$dir_tmp;
				if(count($tmpext)==1){$tmpext[0]='sys';}
				if(is_dir($dir_tmp.$file)){
					$tmpext[0]='dir';
					// $size=(getDirectorySize($dir_tmp.$file));
					// $size='~ '.format_bytes($size['size']);
					$size='-';
					$dir_move=$dir_tmp.$file;
				}else{
					if(@filesize($dir_tmp.$file)<1)
						$size='-';
					else
						$size=format_bytes(@filesize($dir_tmp.$file));
				}
				if(!in_array($tmpext[0],$known_ext))$tmpext[0]='other';
				$perm=substr(@sprintf('%o', @fileperms($dir_tmp.$file)), -4);
				
				$this->view->set_change('{item_type}',$tmpext[0]);
				$this->view->set_change('{item_name}',$file);
				$this->view->set_change('{item_perm}',$perm);
				$this->view->set_change('{item_dir}',$dir_move);
				$this->view->set_change('{item_size}',$size);
				$this->view->set_change('{item_down}',$dir_tmp.$file);
				$this->view->set_echo();
				$this->view->set_clear(); }
	}
	$this->view->render('mdl_dir/files_foot',true);
	$this->view->renderFoot();
		
	}
	public function moduleDetails(){
		  
	}
		public function run(){
		$this->model->run();	
	}
	
	
}


?>