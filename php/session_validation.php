<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['name']) == true and (!isset ($_SESSION['id']) == true))){
	    header('Location: login.php');
	}
?>