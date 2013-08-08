<?php
	if(isset($_SESSSION['user_id'])){
		header('location: dashboard.php');
	}else{
		header('location: login.php');
	}
?>