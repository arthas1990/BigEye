<?php
class Add_module_Model extends Model{
	 function __construct(){
		parent::__construct();
	}
	public function insert(){
		$ModuleName=$_POST['ModuleName'];
		$ModuleProgrammer=$_POST['ModuleProgrammer'];
		$ModuleVersion=$_POST['ModuleVersion'];
		$ModuleWorkingVersion=$_POST['ModuleWorkingVersion'];
		$ModuleURL=$_POST['ModuleURL'];
		$ModuleIcon=$_POST['ModuleIcon'];
		$ModuleDetails=$_POST['ModuleDetails'];

		$tmp=$this->db->prepare("insert into modules (ModuleName,ModuleProgrammer,ModuleVersion,ModuleWorkingVersion,ModuleURL,ModuleIcon,ModuleDetails) values (:txt1,:txt2,:txt3,:txt4,:txt5,:txt6,:txt7);");
		$tmp->execute(array(':txt1'=>$ModuleName,':txt2'=>$ModuleProgrammer,':txt3'=>$ModuleVersion,':txt4'=>$ModuleWorkingVersion,':txt5'=>$ModuleURL,':txt6'=>$ModuleIcon,':txt7'=>$ModuleDetails));
		$data=$tmp->fetchAll();
		return $this->db->lastInsertId();
	}
 
}
?>
