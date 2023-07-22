<html>
<?php
	$myfile = fopen("picture.txt", "rw+") or die("Unable to open file!");

$indexf=fopen("indexp.txt","rw+") or die("Unable to open file!");
	
	$pid = $_POST["pid"];
	$pname = $_POST["pname"];
	$pname1 = $_POST["pname1"];
	$pname2= $_POST["pname2"];
	$price =$_POST["price"];
	$index = array();
$indsize = sizeof($index);
if($indexf)
{
	while(($line=fgets($indexf))!=false)
	{
		
		$str_arr = explode("|",$line);
		$index[$indsize]=array("$str_arr[0]","$str_arr[1]");
		$p = $index[$indsize][0];
		
		$indsize ++;
		
	}
	
}
	
	$low = 0;

$flag =0;
$found;
$i =0;
while($i<$indsize){
	
	$v= $index[$i][0];
	if(((strcmp($pid,$v)) == 0)& $flag == 0){
		
	  
	$flag = 1;
	//header("Location: Pid_exist.php");
	  
	  
	 
	  
	  break;
	  
	}
	
	else{
		$i ++;	}
}
if($flag == 0){
 fseek($myfile,0,SEEK_END);
 
 
$k= ftell($myfile);
fwrite($myfile,$pid."|".$pname."|".$pname1."|".$pname2."|".$price."|\n");

fseek($indexf,0,SEEK_END);
fwrite($indexf,$pid."|".$k."|\n");
header("Location: admin_room_added1.php");}
	else{
		  header("Location: Pid_exist.php");
	}
	
	

?>
</html>