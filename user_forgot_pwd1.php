

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
		$phone = $_POST["phone"];
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
	  
	  
    $cookie_name = "passwordu";
$cookie_value =  $val_arr[2];;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

header("Location: user_found.php");

	
	  
	  
	  break;
	  
	}
	
	else{
		$low ++;	}
}
		#$empid = $_POST["empid"];

		if($flag==0)
		{
			header("Location: user_not_found.php");
		}
	?>
		

	