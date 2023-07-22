<!DOCTYPE html>
<html>
<head>
	<title>User Found</title>
	<style>
		.container{
			position: relative;
		}
	</style>
</head>
<style>
	div {
		width: 600px;
		height: 0.1px;
		margin-top: 500px;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 80, 0.6);
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 180px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: #FFFAFA;
		border: 10px thin #00008B;
		
	}
	
	body  {
	  	background-image: url(images/A2.jpg);
		background-size: cover;
	  	background-position: center;
	  	background-attachment: local;
	  	background-repeat: no-repeat;
	  	background-color: #FFFAFA;
	  	font-family: sans-serif;
	}
</style>
<body>
	<div class="container" style="background: rgba(0, 0, 80, 0.6);">
		<?php
			$value = $_COOKIE['passwordu'];
			echo "Your password is: ".$value;
		?>
		<br><br>
		<a style="text-decoration: none;  font-size: 25px; color: #C0C0C0" href="user_login.php">Redirect to User Login</a>
	</div>
</body>
</html>