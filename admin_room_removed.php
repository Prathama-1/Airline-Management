

<html>
<?php
	$myfile = fopen("picture.txt", "rw+") or die("Unable to open file!");

$indexf=fopen("indexp.txt","rw+") or die("Unable to open file!");
	
	$pid = $_POST["pid"];
	//$r = $_POST["rooms"];
	
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
	  $found = $index[$i][1];
	  
	  //fseek($myfile,$found,SEEK_SET);
	  //$line=fgets($myfile);
	  //$val_arr = explode("|",$line);
	  //$pre = $val_arr[1];
	  //$price = $val_arr[2];
	  fseek($myfile,$found,SEEK_SET);
	  fwrite($myfile,"$");
	  //fseek($myfile,0,SEEK_END);
	  //$newp= ftell($myfile);
	  //$pres = (int)$pre - (int)$num;
	  //if($pres>=0){
	  //fwrite($myfile,$r."|".$pres."|".$price."|\n");
	  for($j=($i+1);$j<$indsize;$j++){
	  $index[($j-1)][1] = $index[($j)][1];
	  $index[($j-1)][0] = $index[($j)][0];}
	  $indsize--;
	  fclose($indexf);
	  $indexf=fopen("indexp.txt","w+") or die("Unable to open file!");
	  for($j=0;$j<$indsize;$j++){
		  fwrite($indexf,$index[$j][0]."|".$index[$j][1]."|\n");
		  header("Location: admin_room_removed1.php");
	  }
	  break;}
	  //if($pres<0){
		//  fclose($indexf);
	  //$indexf=fopen("indexr.txt","w+") or die("Unable to open file!");
	  //for($j=0;$j<$indsize;$j++){
		  //if($index[$j][0]!= $v){
		//  fwrite($indexf,$index[$j][0]."|".$index[$j][1]."|\n");}
	 // }}
	  
	  //header("Location: admin_room_removed1.php");
	  
	 else{ 
	 $i ++;}
	  
	 // break;
	  
	}
	
	//else{
			


	
	if($flag ==0){
		header("Location: invalid_pid.php");
	}
	

?>
</html>