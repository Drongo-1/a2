<?php 
	session_start();
	require_once('config.php');
	if (isset($_POST['login'])) {
		if (empty($_POST['user_name']) || empty($_POST['password'])) {
			header("location:index.php?Empty=Please fill all details in the login form");  
		}

		else{
			$query="SELECT * FROM users WHERE user_name='".$_POST['user_name']."' and password='".$_POST['password']."'";
			$result=mysqli_query($conn, $query);
				if (mysqli_fetch_assoc($result)) {
					$_SESSION['user']=$_POST['user_name'];
					header('location:homepage.php');
				}
				else{
					header('location:index.php?Invalid= Enter valid login details to login');	
				}

		}
	}

	else{
		echo "!isset";
	}
?>