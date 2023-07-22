<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<style>
	div {
		width: 40%;
		height: 10%;
		text-align: center;
		position: absolute
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 20px;
		/*padding-top: 15px; */
		padding-bottom: 30px; 
		/*box-shadow: 0 10px 20px rgba(09,41,98,0.19); */
		/*border-radius: 15px;*/
		color: #000000;
		border: 12px solid white;
		
		/*border-radius: 15px; */	
	}
	body  {
		background-image: url(images/sky.jpg);
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family:avondale;
	}
	button, .button {
		background-color: #ffA500;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
	}
	.input {
		font-size: 20px;
		text-align: center;
		/*opacity: 0.5;*/
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: FF7F50;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #000000;
		text-decoration: none;  
		font-size: 20px;
	}
	input:hover, input:active 
	{
		background-color: #FF7F50;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br>
	<div style="background-color: #E6F2F8;">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: #094198;"><b>Admin Login</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Admin ID:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter password" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="font-size: 25px; " type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: #094198;"><b>New Admin?</b></td>
				<td style="color: #094198;"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="admin_signup.php">Admin SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none; font-size: 25px;" href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
</div>
</body>
</html>