<!DOCTYPE html>
<html>
<head>
	<title>User Room Book</title>
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
	  
	  background-size: cover;
	  background-position: fit;
	  background-repeat: no-repeat;
	}
	table {
		font-size: 22px;
		border-collapse: collapse;
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
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
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
	li a:active {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: 10px;
		width: 1000px;
		padding: 10%;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		position : relative;
		box-sizing: content-box;
		background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
		
	}
	.bin_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: 10px;
		width: 500px;
		padding: 2%;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		position : relative;
		box-sizing: content-box;
		background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
		
	}
	td{
		color: black;
		font-weight: bold;
	}

	th:first-child {
    padding-left: 20px; /* Add left padding to the first th element */
}

	a.snapchat {
  position: relative;
  background: lightgrey;
}

	a.snapchat img {
  position: absolute;
  opacity: 0;
  width: 600px;
  height: 300px;
  left: 0;
  top: -20px;
  transition: opacity .5s, top .5s;
}

	a.snapchat:hover img {
  opacity: 1;
  top: -20px;
}
</style>
<body>
	<?php
		
         $a1 = $_COOKIE["username1"]	;	?>
	<table style="width: 100%;">
		<tr>
		<td id="td1" style="padding: 5px; font-size: 40px; position: sticky; z-index: 1;color: black;">THE <p style="color: black; display: inline;">JET CONNECT </p> </td>
			</td>
			<td id="td1" style="font-size: 25px; text-align: right;color: black;">Hello, <?php echo $a1; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Information</a></li>
		<li><a href="bookroom.php">Book a Flight</a></li>
		
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="search.php">Search</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div class="container" style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			
			
			?>
			<table class="basic_box">
			
				<tr>
					<th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Flight Details</p></th>
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
					
				<td style="padding-left: 50px;"><?php echo $val_arr[0]; ?></td>
					<td><?php echo $val_arr[1]; ?></td>
					<td><?php echo $val_arr[2]; ?></td>
					<td><?php echo $val_arr[3]; ?></td>
					<td><?php echo $val_arr[4]; 
					echo '<td colspan="5" style="height: 40px;"></td>';
					
					
			
		}
		
	
	
	
}

}
$i++;
}
echo '<td colspan="5" style="height: 50px;"></td>';
		 
		 	
		 
	
			?></td>
				</tr>
				
			</table><br><br>
			<form class="bin_box" action="bookroom1.php" method="post">
				<table>
					
					<tr>
						<td style="text-align: left;">Enter Flight ID:   </td>
						<td style="text-align: left;"><input type="number" min="0" name="pid" id="pid" required></td>
							
						</td>
					</tr>
					<tr>
					<td style="text-align: left;">Enter the number of seats:   </td>
					<td style="text-align: left;"><input type="number" min="0" name="pid1" id="pid1" required></td>
				</tr>
					
					<tr>
						<td style="text-align: left;">Enter departure date:    </td>
						<td style="text-align: left;">
							<input type="date" name="pdate">
						</td>
					</tr>
					<tr>
					<td colspan="2" style="height: 10px;"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
					</tr>
				</table>
				
			</form>
	</div>
</body>
</html>