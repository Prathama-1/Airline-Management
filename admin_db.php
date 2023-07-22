<html>
<body>

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
	  
	  
	  
	  $found = $index[$low][1];
	  fseek($myfile,$found,SEEK_SET);
	  $line=fgets($myfile);
	  $val_arr = explode("|",$line);
	  $pwd = $_POST["password"];
	  
	  if ((strcmp($pwd,$val_arr[1])) == 0)
	  {
	   $flag = 1;
    
	  header("Location: admin_view.php");
	  
	  }

	
	  
	  
	  break;
	  
	}
	
	else{
		$low ++;	}
}
if($flag==0)
		{
			echo("Invalid");
		}
		#$empid = $_POST["empid"];

	?>
		

	
</body>
</html>