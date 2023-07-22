<!DOCTYPE html>
<html>
<head>
	<title>New User SignUp</title>
	<script>
        function clearPasswordField() {
            var passwordField = document.getElementById('password');
            passwordField.value = '';
        }
    </script>
	

<style>
	.container{
			position: relative;
			margin-left: 850px;
			top:-150px;
		}
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 80, 0.6);
		font-size: 30px;
		border: 10px thin; #00008B;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
		color: #FFFFFF;
	}
	body  {
		background-image: url(images/X2.jpg);
	  	background-color: #d9d9d9;	  	
	  	background-attachment: local;
	  	background-size: cover;
	 	background-position: center;
	  	background-repeat: no-repeat;
	}
	button {
		background-color: #009999;
		border: 1px thin #FFEBCD;
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
		padding-left: 10px;
		padding-right: 10px;
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

	</head>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div class ="container"style= "background: rgba(0, 0, 80, 0.5)">
		<form action="4.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #F0FFF0;"><b>New User SignUp</b></p></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Name: </td>
					<td><input class="input" type="text" name="name" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Phone Number: </td>
					<td><input class="input" type="text" pattern="[0-9]{10}" name="phone" placeholder="Enter Number" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Password: </td>
					<td><input class="input" type="password" id="password" name="password" placeholder="Enter password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Email ID: </td>
					<td><input class="input" type="email" name="email" placeholder="Enter Email" required></td>
				</tr>
				
					<td style="padding-left: 60px; text-align: left;">Aadhar Number: </td>
					<td><input class="input" type="text" name="idproof" placeholder="Enter Aadhar number" id="aadhar" pattern="\d{4}\s\d{4}\s\d{4}"required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Date of birth: </td>
					<td><input class="input" type="date" name="dob" value="01-01-2000"  max="2022-12-31" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="font-size: 28px; background-color: #1E90FF; border: 1px solid #a6a6a6; box-shadow: 2px 2px #a6a6a6; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div> 
</body>
</html>