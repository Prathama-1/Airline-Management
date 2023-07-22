<!DOCTYPE html>
<html>
<head>
	<title>Picture Added</title>
</head>
<style>
	body {
	  background-image: url(images/sky.jpg);
	  	background-color: #d9d9d9;
	  	background-size: cover;
	  	background-position: center;
	  	background-attachment: local;
	  	background-repeat: no-repeat;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: #e6b800;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1">THE <p style="color: #7FFFD4; display: inline;">JET CONNECT</p></td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Flight Information</a></li>
		<li><a href="add_room_admin.php">Add Flight</a></li>
		<li><a href="remove_room_admin.php">Remove Flight</a></li>
		
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td>Flight added successfully</td>
				</tr>
				<tr>
					<td><a href="admin_view.php">Click here to get redirected.</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>