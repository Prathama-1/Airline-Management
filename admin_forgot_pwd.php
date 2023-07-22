<!DOCTYPE html>
<html>
<head>
	<title>Admin Forgot Password</title>
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
		border: 4px solid #000000;
		
		/*border-radius: 15px; */	
	}
	body  {
		
		background: rgb(40,24,219);
background: radial-gradient(circle, rgba(40,24,219,1) 0%, rgba(49,212,219,1) 100%);
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	.button {
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
	button:hover, button:active .button:hover, .button:active
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
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #f2f2f2;">
		<form method="post" action="admin_forgot_pwd1.php">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #009999;"><b>Admin Forgot Password</b></p></td>
				</tr>
				<tr>
					<td>Enter AdminID:</td>
					<td><input class="input" type="text" name="adminid" placeholder="Enter admin ID" required></td>
				</tr>
				<tr>
					<td>Enter Password:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter password" required></td>
				</tr>
				<tr>
					<td>Enter New Password:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter new password" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="font-size: 25px; background-color: #009999; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>