<!DOCTYPE html>
<html>
<head>
	<title>Admin Room Added</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background-image: url(images/A10.jpg);
	  background-size: cover;
	  background-position: fit;
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
		background : linear-gradient(to left, #0066FF 0%, #000066 100%);
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
	  	background: linear-gradient(to top, #0066FF 0%, #000066 100%);
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
	  	background-color: #87CEEB;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: #87CEEB;
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
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1">THE <p style="color: #7FFFD4; display: inline;">SKY ESCAPE </p> </td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Flight Info</a></li>
		<li><a href="add_room_admin.php">Add Flight</a></li>
		<li><a href="remove_room_admin.php">Remove Flight</a></li>
		
		<li><a href="booking_history.php">Purchase History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%; margin-top: 13%; padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td>Picture ID Exist</td>
				</tr>
				<tr>
					<td><a href="admin_view.php">Click here to get redirected.</a></td>
				</tr>
			</table>
		</div>
	</body>
</html>