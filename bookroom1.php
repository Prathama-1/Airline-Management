<html>
	
	
	<?php 
	$cookie_name = "bookingid";
	
	if(!isset($_COOKIE[$cookie_name]))
	{
		$cookie_value =0;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		
	}	
	else
	{
		$cookie_value = $_COOKIE["bookingid"];
		$cookie_value ++;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	}
	
	
	$myfile = fopen("book.txt", "rw+") or die("Unable to open file!");
    $myfile1 = fopen("picture.txt", "r") or die("Unable to open file!");
$indexf=fopen("indexb.txt","rw+") or die("Unable to open file!");
$indexr=fopen("indexp.txt","r") or die("Unable to open file!");
	
	$pid = $_POST["pid"];
	$pid1 = $_POST["pid1"];
	$checkin = $_POST["pdate"];
	$phone = $_COOKIE["phone"];
	
	$index = array();
$indsize = sizeof($index);
if($indexr)
{
	while(($line=fgets($indexr))!=false)
	{
		
		$str_arr = explode("|",$line);
		$index[$indsize]=array("$str_arr[0]","$str_arr[1]");
		$p = $index[$indsize][1];
		
		$indsize ++;
		
	}
	
}
	
$flag =0;
$found;
$i =0;
while($i<$indsize){
	
	$v= $index[$i][0];
	if(((strcmp($pid,$v)) == 0)& $flag == 0){
	  
	  $flag = 1;
	  $found = $index[$i][1];
	  
	  fseek($myfile1,$found,SEEK_SET);
	  $line=fgets($myfile1);
	  $val_arr = explode("|",$line);
	  $price = $val_arr[4];
	  $fn = $val_arr[1];
	  $s = $val_arr[2];
	  $d = $val_arr[3];
	  $tprice = $price*$pid1;
	  
	  
	  
	  
	 
	  
	  break;
	  
	}
	
	else{
		$i ++;	}
}
if($flag == 1){
 fseek($myfile,0,SEEK_END);
 
 
$k= ftell($myfile);
fseek($myfile,0,SEEK_END);
fwrite($myfile,$_COOKIE["bookingid"]."|".$phone."|".$pid."|".$pid1."|".$checkin."|".$s."|".$d."|".$tprice."|\n");

fseek($indexf,0,SEEK_END);
fwrite($indexf,$_COOKIE["bookingid"]."|".$phone."|".$k."|\n");
header("Location: bookroom2.php");}
else {
	echo "Invalid";
}?>
</html>