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
		background-color: white;
		border-radius: 5px;
		text-align: center;
	}

	.message {
		
		margin-bottom: 10px;
		font-weight: bold;
		font-size: 40px;
	}
	
</style>
</head>

<body>
<div class="container"> 
<?php
   

  /* $myfile = fopen("user.txt", "r") or die("Unable to open file!");
   $indexf = fopen("indexu.txt", "r") or die("Unable to open file!");
   
   $index = array();
   $indsize = sizeof($index);
   
   if ($indexf) {
	   while (($line = fgets($indexf)) != false) {
		   $str_arr = explode("|", $line);
		   $index[$indsize] = array("$str_arr[0]", "$str_arr[1]");
		   $p = $index[$indsize][0];
		   $indsize++;
	   }
   }
   
   $phone = $_POST["phone"];
   $low = 0;
   
   $flag = 0;
   $found;
   
   while ($low < $indsize) {
	   $mid = intval(($low + $indsize) / 2);
	   $v = $index[$mid][0];
   
	   if ((strcmp($phone, $v)) == 0) {
		   $found = intval($index[$mid][1]);
		   fseek($myfile, $found, SEEK_SET);
		   $line = fgets($myfile);
		   $val_arr = explode("|", $line);
		   $pwd = $_POST["password"];
   
		   if ((strcmp($pwd, $val_arr[2])) == 0) {
			   $flag = 1;
			   $cookie_name = "phone";
			   $cookie_value = $phone;
			   setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			   header("Location: user_view.php");
			   exit();
		   }
		   break;
	   } elseif (strcmp($phone, $v) > 0) {
		   $low = $mid + 1;
	   } else {
		   $indsize = $mid - 1;
	   }
   }
   
   if ($flag == 0) {
	   echo '<div class="message">INVALID Credentials!</div>';
   }
   
   fclose($myfile);
   fclose($indexf);*/
   $myfile = fopen("user.txt", "r") or die("Unable to open file!");
$indexf = fopen("indexu.txt", "r") or die("Unable to open file!");

$index = array();

if ($indexf) {
    while (($line = fgets($indexf)) !== false) {
        $str_arr = explode("|", $line);
        $index[$str_arr[0]] = intval($str_arr[1]);
    }
}

$phone = $_POST["phone"];
$password = $_POST["password"];

if (isset($index[$phone])) {
    $found = $index[$phone];
    fseek($myfile, $found, SEEK_SET);
    $line = fgets($myfile);
    $val_arr = explode("|", $line);
    $pwd = $val_arr[2];

    if (strcmp($password, $pwd) == 0) {
        fclose($myfile);
        fclose($indexf);

        $cookie_name = "phone";
        $cookie_value = $phone;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header("Location: user_view.php");
        exit();
    }
}

fclose($myfile);
fclose($indexf);

echo '<div class="message">INVALID Credentials!</div>';

   

	?>
		

	</div>
</body>
</html> 