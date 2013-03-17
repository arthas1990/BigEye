<?php
class Modules_Model extends Model{
	function __construct(){
		 parent::__construct();
	}
	public function all(){
	 
		$tmp=$this->db->prepare("select * from modules");
		$tmp->execute();
		$data=$tmp->fetchAll();
		 
		 
		return $data;
	}

}
?>