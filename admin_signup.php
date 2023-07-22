<!DOCTYPE html>
<html>
<head>
	<title>Admin SignUp</title>
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
		background-image: url(images/2.jpg);
	  background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family:avondale;
	}
	button {
		background-color: skyblue;
		border: 1px solid #a6a6a6;
		/*border-radius: 10px;*/
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
	/*input:hover, input:active 
	{
		background-color: #f5deb3;
		box-shadow: 2px 2px #a6a6a6;
	} */
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
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: #f2f2f2;">
		<form action="3.php" method="post">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #000000;"><b>Admin SignUp</b></p></td>
				</tr>
				<tr>
					<td>Admin ID:</td>
					<td><input class="input" type="text" name="adminid"  placeholder="Enter admin ID" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password"  placeholder="Enter password" required></td>
				</tr>
				
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input style="font-size: 25px; background-color: skyblue ; border: 2px solid #0000ff; box-shadow: 2px 2px #ffff00; color: black; border-radius: 30px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form> 
	</div>
</body>
</html>