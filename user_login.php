<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>

<style>
	.container{
			position: relative;
			z-index: 2;
			
		}
	div {
		width: 40%;
		height: 70%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 80, 0.6);
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: #1E90FF;
		border: 10px thin; #00008B;
		border-radius: 15px;
	}
	body  {
		background-image: url(images/X1.jpg);
		background-size: cover;
	  	background-position: center;
	  	background-attachment: local;
	  	background-repeat: no-repeat;
	  	background-color: #FFFAFA;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: #191970;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.8;
	}
	table {
		width: 100%;
	}
	td {
		color: #FFFFFF;
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: #FFFAFA;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 0.5px thin #A6A6A6;
		box-shadow: 1px 1px #a6a6a6;
		color: #708090;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
</head>
<body>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<div class ="container" style="background: rgba(0, 0, 80, 0.6)">
		<form action="user_logged_in.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color: #f1f1f1;"><b>User Login</b></p></td>
				</tr>
				<tr>
					<td>Phone number : </td>
					<td><input class="input" type="text" name="phone"  ></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password"></td>
				</tr>
			</table>
		<br>
		<input class="button"style="text-decoration: none;  font-size: 25px;color: #C0C0C0" type="submit" value="Login">
		</form>
		<br>
		<table>
			<tr>
				<td style="color: #F0FFF0;"><b>New User?</b></td>
				<td style="color: #F0FFF0;"><b>Unable to Login</b></td>
			</tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color: #C0C0C0" href="user_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px; color: #C0C0C0" href="user_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table><br>
	</div>
</body>
</html>