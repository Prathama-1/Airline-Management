<!DOCTYPE html>
<html>
<head>
	<title>User Forgot Password</title>
	<style>
		.container{
			position: relative;
		}
	</style>
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
		border: 4px thin #FFEBCD;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 80, 0.6);
		color: #FFFFFF;
	}
	body  {
		
	  	background-color: #d9d9d9;
	  	background-size: cover;
	  	background-position: center;
	  	background-attachment: local;
	  	background-repeat: no-repeat;
	}
	button {
		background-color: #009999;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
		box-shadow: 2px 2px #a6a6a6;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.6;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited 
	{
		text-decoration: none;
	}
	button:hover, button:active 
	{
		background-color: #e6b800;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
		box-shadow: 2px 2px #a6a6a6;
		font-size: 28px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<?php $email = 0;
		$dob = 0;
		?>
		<br><br><br><br><br><br><br><br><br><br>
	<div class="container" style="background-color: rgba(180, 0, 36, 0.72);">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #FFFFFF;"><b>User Forgot Password</b></p></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<form action="user_forgot_pwd1.php" method="post">
			<tr>
				<td>Enter Phone Number: </td>
				<td><input class="input" type="text" pattern="[0-9]{10}" name="phone" placeholder="Enter Number" required></td>
			</tr>
			<tr><td><br></td>
			</tr>
			<tr>
				<td>Enter Date Of Birth:</td>
				<td> <input class="input" type="date" name="dob" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input style="font-size: 28px; background-color: #F4A460; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Recover Password"></td>
			</tr>
			</form>
		</table>
	</body>
</html>