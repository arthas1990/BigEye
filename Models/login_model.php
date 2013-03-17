<?php
class Login_Model extends Model{
	function __construct(){
		 parent::__construct();
	}
	public function run(){
		$username=$_POST['usname'];
		$password=$_POST['password'];
		$tmp=$this->db->prepare("select ID from users where Username=:usname and Password=MD5(:pass)");
		$tmp->execute(array(':usname'=>$username,':pass'=>$password));
		$data=$tmp->fetchAll();
		
		$count=$tmp->rowCount();
		return $count;
	}

}
?>