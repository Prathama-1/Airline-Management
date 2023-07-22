<!DOCTYPE html>
<html>
<head>
	<title>User Signed In</title>
	<style>
		.container{
			position: fixed;
			
		}
		.container .content {
		height: 50%;
		width: 100%;
		background-color: #0093E9;
		background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
		color: #f1f1f1;
		
		}
	
	body {
	  margin: 0;
	  background-image: url(images/c2.jpg);
	  
	  background-size: cover;
	  background-position: fit;
	  background-repeat: no-repeat;
	}
	table {
		font-size: 23px;
		border-collapse: collapse;
		
	}
	td {
		padding: 10px;
	}
	#td1
	{
		
		background-color: #0093E9;
		background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);

		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
		
	}
	ul {
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
	li a:visited {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;	
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 5px solid white;
		border-radius: 15px;
		margin: auto;
		width: 500px;
		height: 400px;
		margin-top:340px;
		padding: 50px;
		text-align: justify;
		box-shadow: 20 20px 10px rgba(0,0,0,0.19);
		
	}
	
	.decor {
		font-family: Times New Roman;
	}
	td{
		color: black;
		font-weight: bold;
	}
</style>
</head>
<body>
	<?php
				$myfile = fopen("user.txt", "r") or die("Unable to open file!");

		$indexf=fopen("indexu.txt","r") or die("Unable to open file!");
		$index = array();
$indsize = sizeof($index);
if($indexf)
{
	while(($line=fgets($indexf))!=false)
	{
		
		$str_arr = explode("|",$line);
		$index[$indsize]=array("$str_arr[0]","$str_arr[1]");
		$p = $index[$indsize][0];
		#print nl2br("$p\n");
		$indsize ++;
		
	}
	
}
		$phone = $_COOKIE['phone'];
		$low = 0;


$flag =0;
$found;
while($low < $indsize){
	
	$v= $index[$low][0];
	if(((strcmp($phone,$v)) == 0)& $flag == 0){
	  
	  
	  $flag = 1;
	  $found = $index[$low][1];
	  fseek($myfile,$found,SEEK_SET);
	  $line=fgets($myfile);
	  $val_arr = explode("|",$line);
	  
	  $cookie_name = "username1";
    $cookie_value =  $val_arr[1];;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	  
 

	
	  
	  
	  break;
	  
	}
	
	else{
		$low ++;	}
}
		

		 ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 5px; font-size: 40px; position: sticky; z-index: 1;color: black;">THE <p style="color: black; display: inline;">JET CONNECT </p> </td>
			<td id="td1" style="font-size: 25px; text-align: right; color: black;">Hello, <?php echo $val_arr[1]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Information</a></li>
		<li><a href="bookroom.php">Book a Flight</a></li>
		
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="search.php">Search</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div class="container" style="margin-left:35%;padding:0.5px 0.2px;margin-top: -13%;height:800px;">
		<p style="margin-left: 10%; margin-top: 30%; font-size: 20px;"></p>
		<div class="content" >
			<table  class="basic_box decor; ">
				<tr>
					
					<td style="color: black" colspan="2"><p style="margin-top: 0%;font-size: 35px; text-align: left;text-decoration: underline;"><b>Welcome!</b></p>
				<tr>
					<td><b>Name : </b></td>
					<td><?php echo $val_arr[1] ?><br></td>
				</tr>
				<tr>
					<td><b>Phone number : </b></td>
					<td><?php echo $val_arr[0] ?><br></td>
				</tr>
				<tr>
					<td><b>Email address : </b></td>
					<td><?php echo $val_arr[3] ?><br></td>
				</tr>
				<tr>
					<td><b>Date of birth : </b></td>
					<td><?php echo $val_arr[5] ?><br></td>
				</tr>
				<tr>
					<td><b>ID Proof : </b></td>
					<td><?php echo $val_arr[4] ?><br></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table></div>
	</div>
</body>
</html>