<?php
session_start();
if (isset($_GET['logout'])) {
	session_destroy();
	header('location:index.php');

	# code...
}
	else
	{
		header('location:homepage.php');
	}

?>