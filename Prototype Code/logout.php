<?php
	session_start();
	if (isset($_SESSION['pass'])) {
		session_start() ;
		session_destroy();
		header('Location: ./index.php');
	}
	else{
		header('Location: ./admin.php');
	}
		
?>