<?php 
	
	include_once '../model/class/Conn.class.php';
	include_once '../model/class/Manager.class.php';

	$manager = new Manager();

	$update_recruit = $_POST;
	$id = $_POST['id'];

		if(isset($id) && !empty($id)){
			$manager->updateRecruit("registros", $update_recruit, $id);
			header("location: ../index.php?recruit=info_updated");
		}

 ?>