<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LOGIN</title>
</head>
<body>

	<link rel="stylesheet" type="text/css" href="style.css">
<header class="myheader"> 
<nav class="header">
	<p>thi is it</p>
</nav>
</header>


	<div class="container">
		<div class="row">
			<div class="col">
				<div class="login_div">
					<div class="alert_message">
						<h3>LOGIN FORM</h3>
					</div>
					<?php 
						if (@$_GET['Empty']==true) {
							# code...


						}
					?>
					<?php if (@GET['Invalid']==true) {
						# code...
					} ?>

					<div class="alert-light text-danger">
						<?php echo @$_GET['Empty']; ?>	
						<?php echo @$_GET['Invalid'];?>
					</div>

					<div class="login_body">
						<form action="process.php" method="POST">
							<input type="text" name="user_name" placeholder="user name">
							<input type="password" name="password" placeholder>
							<input type="submit	" name="login" value="login">
						</form>
					</div>
				</div>				
			</div>
		</div>
	</div>

</body>
</html>