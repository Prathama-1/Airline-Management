



<?php
$indexf = fopen("indexp.txt", "r") or die("Unable to open file!");

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
	

    



 function traverse($tree)
 { global $count;
 
	 for($i=0;$i<$tree->n;$i++)
	 {
		 if($tree->leaf == false){

			 traverse($tree->child[$i]);
			   $tree->data[$i] ;
			   
		 }	 
		 $a= $tree->data[$i];
		 $indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
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
		$myfile = fopen("picture.txt", "r") or die("Unable to open file!");
		fseek($myfile,$position,SEEK_SET);
	  $line1=fgets($myfile);
	  $val_arr = explode("|",$line1);
	  echo $val_arr[2];
		}
		
		$indsize ++;
		
	}
	
	
}
		 
		 	
		 
	 }
	 
	 
	 if($tree->leaf == false)
	 {
		 traverse($tree->child[$i]);
	 }
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
  
 

?>