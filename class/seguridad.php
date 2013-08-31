<?php
	session_start();
	include('conexion.php');
	if(isset($_SESSION['userid'])){

	}else{
		header('location: '.BASE_URL.'error/401/');
	}
?>