<?php
class Database extends PDO{
	function __construct(){
		$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',); 
		parent::__construct(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS, $options);

	}
}
