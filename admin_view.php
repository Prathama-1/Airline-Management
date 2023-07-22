<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<style>
	

	body {
	  margin: 0;
	  background: rgb(34,193,195);
	background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,0.1517857142857143) 100%);
	  background-attachment: relative;
	  	background-size: cover;

	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: rgba(255,202,40,1);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 4px solid #000000;
		border-radius: 15px;
		margin: auto;
		width: 900px;
		padding: 20px;
		box-shadow: 0 10px 20px rgba(129,212,250,1);
		postion:absolute;
		

	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 1px;
	  	width: 20%;
	  	font-size: 24px;
	  	background-color: rgba(255,202,40,1);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 200%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: black;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: rgba(255,202,40,1) ;
	  	color: black;
	}
	

	li a:hover:not(.active) {
	  	background-color: skyblue;
	  	color: black;
	  	text-decoration: underline;
	}

	div1.slide-left {
  width:100%;
  overflow:hidden;
}

</style>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1">THE <p style="color: #7FFFD4; display: inline;">JET CONNECT </p> </td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Flights Information</a></li>
		<li><a href="add_room_admin.php">Add Flights</a></li>
		<li><a href="remove_room_admin.php">Remove Flights</a></li>
		
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="searching.php">Search</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Flights Information</p></th>
				</tr>
				<tr>
					<th>Flight ID</th>
					<th>Airways Name</th>
					<th>Depart From</th>
					<th>Arrive To</th>
					<th>Price</th>
				</tr>
			<?php 
			$myfile = fopen("picture.txt", "r") or die("Unable to open file!");
			$indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
			$index = array();
$indsize = sizeof($index);
$a = array();
$list = array(array(),array());
if($indexf)
{
	while(($line=fgets($indexf))!=false)
	{
		
		$str_arr = explode("|",$line);
		$index[$indsize]=array("$str_arr[0]","$str_arr[1]");
		
		
		$indsize ++;
		
	}
	
}

for ($i=0;$i<$indsize;$i++){
	$a[$i] = $index[$i][0];
}
sort($a);
$indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
$i =0;
while($i<sizeof($a))
{
	$indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
	if($indexf)
{
	while(($line=fgets($indexf))!=false)
	{
		
		$str_arr = explode("|",$line);
		if($str_arr[0]==$a[$i]){
		$position = $str_arr[1];
		
		fseek($myfile,$position,SEEK_SET);
	  $line1=fgets($myfile);
	  $val_arr = explode("|",$line1);
	  
		
			
			
			
			
			
			
			
			
			
			
			
			
				
	  
		
			
			
			
			
			
			
			
			
			
			
		
    			?>	
				<tr>
					<td><?php echo $val_arr[0]; ?></td>
					<td><?php echo $val_arr[1]; ?></td>
					<td><?php echo $val_arr[2]; ?></td>
					<td><?php echo $val_arr[3]; ?></td>
					<td><?php echo $val_arr[4]; 
					
	}
	
	
	
}
}
$i++;
}
		 
		 	
		 
	 
	 
	 
?></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>			
	</div>
</body>
</html>