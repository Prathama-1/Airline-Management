<html>
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
.message {
		
		margin-bottom: 10px;
		font-weight: bold;
		font-size: 18px;
	}
	.container {
		width: 300px;
		margin: 50px 0 0 50px;
		padding: 20px;
		background-color: #FFFFFF;
		border-radius: 5px;
		text-align: center;
	}
		</style>
<body>.
<div class="container">
<?php

$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");

		$indexf=fopen("index1.txt","a+") or die("Unable to open file!");
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
$user = $_POST["adminid"];
$low = 0;

$flag =0;
$found;
while($low <$indsize){
	
	$v= $index[$low][0];
	if(((strcmp($user,$v)) == 0)& $flag == 0){
	  echo '<div class="message">Admin ID already exist</div>';
	  $flag = 1;
	  $found = $index[$low][1];
	  fseek($myfile,$found,SEEK_SET);
	  $line=fgets($myfile);
	 
	  
	  break;
	  
	}
	
	else{
		$low++;	}
}
if($flag == 0){
 fseek($myfile,0,SEEK_END);
 
$k= ftell($myfile);



#$index[$indsize]=array($k,$user);

fwrite($indexf, $user."|".$k."|\n");

$pwd = $_POST["password"];

$a = "|";

fwrite($myfile, $user.$a.$pwd.$a."\n");
echo '<div class="message">SignUp Successful!</div>';

fclose($myfile);
fclose($indexf);
}
?>
</div>
</body>
</html>