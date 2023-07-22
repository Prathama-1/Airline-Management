<!DOCTYPE html>
<html>
<head>
	<title>Confirm Room Book</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background-image: url(images/8.jpg);
	  background-size: cover;
	  background-position: center top;
	  background-repeat: no-repeat;
	}
	table {
		font-size: 22px;
		border-collapse: collapse;
	}
	p {
		font-size: 24px;
	}
	#td1
	{
		background : linear-gradient(to left, #0066FF 0%, #000066 100%);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
		font-family: georgia;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background: linear-gradient(to top, #0066FF 0%, #000066 100%);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	a:active {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;		
	}
	a.button {
		display: inline-block;
		padding: 10px 20px;
		background-color: #0066FF;
		color: white;
		border: none;
		text-decoration: none;
		border-radius: 4px;
		font-size: 20px;
	}
	a.button:hover {
		background-color: #0044CC;
	}
	a:hover {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
	
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #7FFFD4; font-size: 48px; display: inline;">SKY ESCAPE </p> </td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $_COOKIE["username1"]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Information</a></li>
		<li><a href="bookroom.php">Book a Flight</a></li>
		
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:45%;padding:1px 1px;height:700px; color: #F0FFFF">
		<p>Flight has been booked successfully!<br></p>
		<P>Click Next to get redirected to home page </P>
		<a href="user_view.php" class="button">Next</a>
	</div>
</body>
</html>