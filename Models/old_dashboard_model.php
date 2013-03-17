<?php
class Dashboard_Model extends Model{
	function __construct(){
		 parent::__construct();
	}
	public function xhrInsert(){
		$txt=$_POST['txtNumber'];
		/*echo $txt;
		exit;*/
		$tmp=$this->db->prepare("insert into tbltmp (fld) values (:txt);");
		$tmp->execute(array(':txt'=>$txt));
		/*$data=$tmp->fetchAll();
		print_r($data);
		exit;*/
		//$count=$tmp->rowCount();
		//return $count;
		$data=array('fld'=>$txt,'id'=>$this->db->lastInsertId());
		echo json_encode($data);
	}	
	public function xhrRoomInsert(){
	//	$txt=$_POST['txtNumber'];
		/*echo $txt;
		exit;*/
	//	$tmp=$this->db->prepare("insert into tbltmp (fld) values (:txt);");
	//	$tmp->execute(array(':txt'=>$txt));
		/*$data=$tmp->fetchAll();
		print_r($data);
		exit;*/
		//$count=$tmp->rowCount();
		//return $count;
	//	$data=array('fld'=>$txt,'id'=>$this->db->lastInsertId());
	//	echo json_encode($data);
	echo 'done';
	}
	public function xhrDel(){
		$txt=$_POST['id'];
		/*echo $txt;
		exit;*/
		$tmp=$this->db->prepare("delete from tbltmp where  id=:txt;");
		$tmp->execute(array(':txt'=>$txt));
		/*$data=$tmp->fetchAll();
		print_r($data);
		exit;*/
		//$count=$tmp->rowCount();
		//return $count;
		echo 'done';
	}
	public function xhrGetList(){
		$sth=$this->db->prepare('select * from tbltmp');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data=$sth->fetchAll();
		echo json_encode($data);
	}
}
?>