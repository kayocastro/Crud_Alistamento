<?php 

	include_once '../model/class/Conn.class.php';
	include_once '../model/class/Manager.class.php';

	$manager = new Manager();

	$data = $_POST;

	if(isset($data) && !empty($data)){
		$manager->insertRecruit("registros", $data);
		header("location: ../index.php?recruit=add_success");
	}


?>