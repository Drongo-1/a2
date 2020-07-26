<?php
session_start();

if (isset($_SESSION['user'])) {
	echo "welcome ". $_SESSION['user'];		
	echo ' <a href="logout.php?logout">logout</a>';
}

else{
	header('location:index.php');
}
?>