<!DOCTYPE html>
<html>
<head>
	<title>User Signed In</title>
	<style>
		.container{
			position: relative;
		}
		.container .content {
		position : relative;
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 0, 0.5);
		color: white;
		margin-right: 40px;
		padding-top: 40px;
		}
	</style>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background-color: #0093E9;
	  background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
	  background-size: cover ;
	  background-position: fit;
	  background-repeat: no-repeat;
	}
	table {
		font-size: 22px;
		border-collapse: collapse;
	}
	td{
		padding-left: 12px;
		font-size: 20px;
	}
	th{
		font-size: 20px;
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
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 1000px;
		padding: 20px;
		padding-top: 10px;
		
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
	li a:visited {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;	
	}
	li a:active {
		background-image: url(images/A2.jpg);
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;
	}
	td{
		color: white;
		font-weight: bold;
	}
</style>
<body>
	<?php
		$myfile = fopen("book.txt", "r") or die("Unable to open file!");
        $indexf=fopen("indexb.txt","r") or die("Unable to open file!");
		?>
	<table style="width: 100%;">
		<tr>
		<td id="td1" style="padding: 5px; font-size: 40px; position: sticky; z-index: 1;color: white;">THE <p style="color: white; display: inline;">JET CONNECT </p>
			<td id="td1" style="font-size: 25px; text-align: right;color: white;">Hello, <?php echo $_COOKIE["username1"]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Information</a></li>
		<li><a href="bookroom.php">Book A Flight</a></li>
		
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="search.php">Search</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div class= "container"; style="margin-left:25%;padding:10px 5px;height:658px;">
		<p style="margin-left: 0%; margin-top: 3%; font-size: 10px;"></p>
		<div class="content">
			<table class="basic_box" border="1" >
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
					<th>Price  </th>
				</tr>
				<tr>
				<?php
					$phone = $_COOKIE["phone"];
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
$i =0;
while($i<$indsize){
	
	$v= $index[$i][0];
	if(((strcmp($phone,$v)) == 0)){
	  
	  $flag = 1;
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
							<td><?php echo $val_arr[7]; ?></td>
				</tr><?php
				      
	  
	}
	
	else{
		$i ++;	}
}?>
			</table><br><br>
		</div>	
	</div>

	
</body>
</html>