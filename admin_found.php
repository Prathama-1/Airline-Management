<!DOCTYPE html>
<html>
<head>
	<title>Admin Found</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid black;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
		margin-top: 280px;
	}
	body  {
		background-color: #74EBD5;
background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);


	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
</style>
<body>
	<div style="background-color: #f2f2f2;">
		<?php
	$value = $_COOKIE['password'];

	echo "Password is $value";
		?>
		<br><br>
		<a href="admin_login.php">Redirect to Admin Login</a>
	</div>
</body>
</html>