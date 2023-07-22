<!DOCTYPE html>
<html>
<head>
	<title>User Found</title>
</head>
<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid #009999;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
	}
	body  {
	  	background-color: #d9d9d9;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
</style>
<body>
<div style="background-color: #f2f2f2;">
<?php
 $b = array();
  $b = [9,8,2,4,6,3,0,1];
  
  function bucket ($b) 
  {
	  $b_length = 5;
	  $mod = 2;
	  $count0=0;
	  $count1=0;
	 
	 #echo sizeof($list[1]);
	 for($i=0;$i<sizeof($b);$i++){
		 $v= fmod($b[$i],$mod);
		 //echo $v;
		 if($v == 1 and $count1<$b_length){
			 $count1++;
			 $list[1][$count1] = $b[$i];
		 }
		 else if($v == 0 and $count0<$b_length){
			 $count0++;
			 $list[0][$count0] = $b[$i];
		 }
		 else if ($count0>=$b_length or $count1>=$b_length){
		 echo ("Bucket overflow");
		 }
		 //for($j=0;$j<=$count0;$j++){
		 //echo ($list[0][$j]);}
		 //print_r($list[1]);
		 
		 }
		 //echo $list[0][5];
		 sort($list[0]);
		 echo "Bucket 1: ";
		 print_r($list[0]);
		 echo nl2br("\n");
		 sort($list[1]);
		 echo "Bucket 2: ";
		 print_r($list[1]);

	 
  }
  
  //bucket($b);
 
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
		//echo $str_arr[0];
		
		
		$indsize ++;
		
	}
	
}

for ($i=0;$i<$indsize;$i++){
	$a[$i] = $index[$i][0];
}
sort($a);
bucket($a);
//print_r($a);
$indexf = fopen("indexp.txt", "r") or die("Unable to open file!");





?>
</div>
</body>
</html>