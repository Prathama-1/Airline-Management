<!DOCTYPE html>
<html>
<head>
	<title>Admin Booking History</title>
	<style>
		.container{
			position: fixed;
		}
	</style>
</head>
<style>
	body {
	   margin: 0;
	  background: #f2f2f2;
	  background: rgb(34,193,195);
	background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,0.1517857142857143) 100%);

	  background-size: cover;
	  background-position: fit;
	  background-repeat: no-repeat;
	}
	table {
		font-size: 22px;
		
	}
	td {
		text-align: center;
		color: black;
	}
	.basic_box {
		border: 6px solid #000000;
		border-radius: 15px;
		margin: auto;
		width: 1100px;
		padding-left: 150px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		position : relative;
		box-sizing: content-box;
		
		
		color: #f1f1f1;
		transform: translateX(60px);
		
	}
	#td1
	{
		background-color: rgba(255,202,40,1);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
		color: black;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
		  background-color: rgba(255,202,40,1);
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
	  	color: black;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
		background-color: rgba(255,202,40,1);
	  	color: black;
	}

	li a:hover:not(.active) {
	  	background-color: skyblue;
	  	color: black;
	  	text-decoration: underline;
	}
</style>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #7FFFD4; display: inline;">JET CONNECT</p>
			</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Flights Information</a></li>
		<li><a href="add_room_admin.php">Add Flights</a></li>
		<li><a href="remove_room_admin.php">Remove Flights</a></li>
		
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:15%; padding:6px 35px;height:1000px;width:900;">
		<p style="margin-left: 5%; margin-top: 5%; font-size: 20px ;"></p>
			<table class="basic_box" border=1 style="border-collapse: collapse;">
				<tr>
					<td colspan="8"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Booking History</b></p>
				</td>
				<tr>
				<th>Booking ID     </th>
					<th>Phone Number     </th>
					<th>Flight ID     </th>
					<th>Number of Seats  </th>
					<th>Date of Departure    </th>
					<th>Depart from    </th>
					<th>Arrive to     </th>
					<th >Price  </th>
				</tr>
				<tr>
				<?php
						$myfile = fopen("book.txt", "r") or die("Unable to open file!");
        $indexf=fopen("indexb.txt","r") or die("Unable to open file!");
		
		$index = array();
					$indsize = sizeof($index);
					if($indexf)
					{
					while(($line=fgets($indexf))!=false)
					{
		
						$str_arr = explode("|",$line);
						$index[$indsize]=array("$str_arr[1]","$str_arr[2]");
						$p = $index[$indsize][1];
		
							$indsize ++;
		
							}
	
							}
							
							
$found;
$i = 0;
while($i<$indsize){
	
	$v= $index[$i][0];
	
	  $found = $index[$i][1];
	  
	  fseek($myfile,$found,SEEK_SET);
	  $line=fgets($myfile);
	  $val_arr = explode("|",$line);
	  $i++;
	  
				    		?>
				    		<td><?php echo $val_arr[0]; ?></td>
				   			<td><?php echo $val_arr[1]; ?></td>
				   			<td><?php echo $val_arr[2]; ?></td>
				   			<td><?php echo $val_arr[3]; ?></td>
				    		<td><?php echo $val_arr[4]; ?></td>
				    		<td><?php echo $val_arr[5]; ?></td>
							<td><?php echo $val_arr[6]; ?></td>
							<td style="padding-right: 30px;"><?php echo $val_arr[7]; ?></td>
				</tr><?php
				    	}
				    	
				    ?>
			</table><br><br>
			
		</div>
	</body>
</html>