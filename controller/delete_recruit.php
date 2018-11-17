<?php 
	
	include_once '../model/class/Conn.class.php';
	include_once '../model/class/Manager.class.php';

	$manager = new Manager();

	$id = $_POST['id'];

	if(isset($id) && !empty($id)){
		$manager->deleteRecruit("registros", $id);
		header("location ../index.php?recruit=deleted_success");
	}

 ?>