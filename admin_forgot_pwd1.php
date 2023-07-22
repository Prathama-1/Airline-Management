<?php
   

		$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");

		$indexf=fopen("index1.txt","r") or die("Unable to open file!");
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
while($low < $indsize){
	
	$v= $index[$low][0];
	if(((strcmp($user,$v)) == 0)& $flag == 0){
	  
	  
	  $flag = 1;
	  $found = $index[$low][1];
	  fseek($myfile,$found,SEEK_SET);
	  $line=fgets($myfile);
	  $val_arr = explode("|",$line);
	  
	  
    $cookie_name = "password";
$cookie_value =  $val_arr[1];;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
header("Location: admin_found.php");

	
	  
	  
	  break;
	  
	}
	
	else{
		$low ++;	}
}
		$empid = $_POST["empid"];

		if($flag==0)
		{
			header("Location: admin_not_found.php");
		}
	?>
		

	