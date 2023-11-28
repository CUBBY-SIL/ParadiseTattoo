<?php
	session_start();
	unset($_SESSION['name']);
    unset($_SESSION['pochta']);
	session_destroy();
	header('Location:  http://paradisetattoo/');  
?>