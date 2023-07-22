<!DOCTYPE html>
<html>
<head>
	<title>Admin Add Rooms</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	  background-image: url(images/A2.jpg);
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	td {
		text-align: center;
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
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$myfile = fopen("room.txt", "r") or die("Unable to open file!");
			$indexf = fopen("indexr.txt", "r") or die("Unable to open file!");
			
			
			?>
			<div class="basic_box">
		  	<table>
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Add Rooms</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Price</th>
				</tr>
			<?php 
			
			
			
			$indexf = fopen("indexr.txt", "r") or die("Unable to open file!");

class TreeNode
{
     public $data;
     public $child;
	 public $leaf;
	 public $n;
	 
}
    function init( )
    {
		$t = new TreeNode;
        $t->data = array();
		for($i=0;$i<5;$i++){
			$t->data[$i]= null;
		}
		$t-> leaf = true;
		
		$t->n = 0;
        $t->child = array();
		for($i=0;$i<6;$i++){
			$t->child[$i]= null;
		}
		
		return ($t);
		
    }
	

    




  function sort1($data , $n){
	  for ($i=0; $i<$n;$i++){
		  for($j=$i; $j<=$n; $j++){
			  if($data[$i]>$data[$j]){
				  $temp = $data[$i];
				  $data[$i] = $data[$j];
				  $data[$j] = $temp;
			  }
			  
		  }
	  }
	  	
		 return $data;}
	  
  
  
  function split_child($tree, $i)
  {  
      global $root;
	  $np1 = init();
	  
	  $np3 = init();
	  
	  $y = init();
	  
	  $np3->leaf = true;
	  if($i == -1){
		  $mid = $tree->data[2];
		  $tree->data[2] = 0;
		  $tree->n--;
		  $np1->leaf =false;
		  $tree->leaf = true;
		  for($j=3;$j<5;$j++){
			  $np3->data[$j-3] = $tree->data[$j];
			  $np3 ->child[$j-3] = $tree->child[$j];
			  $np3->n++;
			  $tree->data[$j] = 0;
			  $tree->n--;
		  }
		  for($j=0;$j<6;$j++)
		  {
			  $tree->child[$j] = null;
		  }
		  $np1->data[0] = $mid;
		  $np1->child[$np1->n] = $tree;
		  $np1->child[$np1->n+1] = $np3;
		  $np1->n++;
		  $root = $np1;
	  }
	  else{
		  $y = $tree->child[$i];
		  $mid = $y->data[2];
		  $y->data[2] = 0;
		  $y->n--;
		  for($j=3; $j<5;$j++){
			  $np3->data[$j-3] = $y->data[$j];
			  $np3-> n++;
			  $y->data[$j] = 0;
			  $y->n--;
		  }
		  $tree->child[$i+1] = $y;
		  $tree->child[$i+1] = $np3;
	  }
	  return $mid;
  }
  
  function insert($a){
	  global $root;
	  global $flag;
	  
	  if($flag == 0){
		  $root = init();
		  $x = &$root;
		  $flag = 1;
	  }
	  else
	  {  $x = &$root;
		  if(($x->leaf == true ) & $x->n == 5){
			  
			  $temp = split_child($x , -1);
			 
			  $x = &$root;
			  for($i = 0; $i< ($x->n);$i++)
			  {
				  if(($a> $x->data[$i])& ($a< $x->data[$i+1])){
					  $i++;
					  break;
				  }
				  elseif ($a < $x->data[0]){
					  break;
				  }
				  else{
					  continue;
				  }
			  }
			  $x = &$x->child[$i];
		  }
		  else{
			  while ($x->leaf == false)
			  {
				  for($i=0; $i<($x->n);$i++){
					  if(($a>$x->data[$i]) & ($a< $x->data[$i+1])){
						  $i++;
						  break;
					  }
					  elseif($a < $x->data[0]){
						  break;
					  }
					  else{
						  continue;
					  }
				  }
				  if(($x->child[$i])->n == 5){
					  $temp = split_child($x,$i);
					 
					  $x->data[$x->n] = &$temp;
					  $x->n++;
					  continue;
				  }
				  else{
					  $x = &$x->child[$i];
				  }
			  }
		  }
	  }
	 # $x->data = &$root->data;
	 #if($x->n <= 3){
	  $x->data[$x->n] = $a;
	  
	  $x->data = sort1($x->data, $x->n);
	 $x->n++;
	 #}
  }
 
  global $root;
$index = array();
$indsize = sizeof($index);
if($indexf)
{
	while(($line=fgets($indexf))!=false)
	{
		
		$str_arr = explode("|",$line);
		$index[$indsize]=array("$str_arr[0]","$str_arr[1]");
		
		
		$indsize ++;
		
	}
	
}
   
  $b = array();
  $b = [2,0,3,1,4,9,8,7,9];
  $ans = array(); 
  
   global $flag;
   $flag = 0;
  global $count;
  $count = 0;
  
  
  for ($i=0; $i<sizeof($index); $i++)
  {
	 
	  insert($index[$i][0]);
	  #echo $root->n;
	  
	  
  }
  $r = &$root;
   #echo $root->n;
  traverse($r);
  
  
  
   function traverse($tree)
 { global $count;
 
	 for($i=0;$i<$tree->n;$i++)
	 {
		 if($tree->leaf == false){

			 traverse($tree->child[$i]);
			   $tree->data[$i] ;
			   
		 }	 
		 $a= $tree->data[$i];
		 $indexf = fopen("indexr.txt", "r") or die("Unable to open file!");
		 $index = array();
$indsize = sizeof($index);
if($indexf)
{
	while(($line=fgets($indexf))!=false)
	{
		
		$str_arr = explode("|",$line);
		$index[$indsize]=array("$str_arr[0]","$str_arr[1]");
		if ($index[$indsize][0] == $a)
		{$position = $index[$indsize][1];
		$myfile = fopen("room.txt", "r") or die("Unable to open file!");
		fseek($myfile,$position,SEEK_SET);
	  $line1=fgets($myfile);
	  $val_arr = explode("|",$line1);
	  
		
			
			
			
			
			
			
			
			
			
			
			
			
			?>	
				<tr>
					<td><?php echo $val_arr[0]; ?></td>
					<td><?php echo $val_arr[1]; ?></td>
					<td><?php echo $val_arr[2]; 
					
			}
		
		$indsize ++;
		
	}
	
	
}
		 
		 	
		 
	 }
	 
	 
	 if($tree->leaf == false)
	 {
		 traverse($tree->child[$i]);
	 }
 } ?></td>
				</tr>
			</table>
			<br><br><br>
			<form action="admin_room_added.php" method="post">
			<table>
				<tr>
					<td style="text-align: left;"><b>Select room type:</td>
					<td style="text-align: left;">
						<select name="rooms" required>
							<option value="">Select</option>
							<option value="Single bed">Single bedded</option>
							<option value="Double bed">Double bedded</option>
							<option value="Four bed">Four bedded</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter number of rooms to add:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofrooms" id="rooms" required></td>
					
					<td style="text-align: left;">Enter the price:</td>
					<td style="text-align: left;"><input type="number" min="0" name="price" id="price" required></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
			<span style="margin-left: 43%"><input align="center" type="submit" value="Add Room"></span>
			</form>
			<br><br>
		</div>
	</div>
</body>
</html>