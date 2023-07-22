<html>
	<head>
		<style>
	body  {
	background-image: url(images/102.jpg);
	background-size: cover;
	  background-position: center;
	  background-attachment: local;
	  background-repeat: no-repeat;
	  background-color: #FFFAFA;
	  font-family: sans-serif;
}
.container {
		width: 300px;
		margin: 50px 0 0 50px;
		padding: 20px;
		background-color: #FFFFFF;
		border-radius: 5px;
		text-align: center;
	}

	.message {
		
		margin-bottom: 10px;
		font-weight: bold;
		font-size: 18px;
	}
	a:link, a:visited 
		{
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

	a:hover, a:active 
		{
			background-color: rgba(255,224,130,0.29);
			color: #094198;
		}
		.reserve_room
		{
			color: black !important;
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: #f7e9be;
			width: 500px;
			margin: auto;
			border-radius: 50px;
			margin-top: 20px;
			margin-left:370px;
		}
		.reserve_room:hover
		{
			color: #000;
			border: 10px;
			padding: 14px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: #edd371;
			width: 500px;
			margin: auto;
			border-radius: 50px;
			margin-left:370px;
		}
		
</style>
</head>
<body>

	<div class="container">
<?php

$myfile = fopen("user.txt", "a+") or die("Unable to open file!");

$indexf=fopen("indexu.txt","a+") or die("Unable to open file!");

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
$phone = $_POST["phone"];
$low = 0;

$flag =0;
$found;
while($low < $indsize){
	
	$v= $index[$low][0];
	if(((strcmp($phone,$v)) == 0)& $flag == 0){
		echo '<div class="message">User already exists!</div>';
	  $flag = 1;
	  $found = $index[$low][1];
	  fseek($myfile,$found,SEEK_SET);
	  $line=fgets($myfile);
	 
	  
	  break;
	  
	}
	
	else{
		$low ++;	}
}
if($flag == 0){
 fseek($myfile,0,SEEK_END);
 
$k= ftell($myfile);



#$index[$indsize]=array($k,$user);

fwrite($indexf, $phone."|".$k."|\n");

$name = $_POST["name"];
$pass = $_POST["password"];
$email = $_POST["email"];
$idp = $_POST["idproof"];
$dob = $_POST["dob"];
$a = "|";

fwrite($myfile, $phone.$a.$name.$a.$pass.$a.$email.$a.$idp.$a.$dob.$a."\n");
echo '<div class="message">SignUp Successful!</div>';

fclose($myfile);
fclose($indexf);
}
?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a class="reserve_room" href="user_login.php">BOOK A FLIGHT</a><br>
</body>
</html>