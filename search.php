<!DOCTYPE html>
<html>
<head>
    <title>User Signed In</title>
    <style>
        .container {
            position: relative;
        }

        .container .content {
		height: 50%;
		width: 100%;
		background-color: #0093E9;
		background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
		color: #f1f1f1;
		
		}
        body {
	  margin: 0;
	  background-color: white;
	  background-size: cover;
	  background-position: fit;
	  background-repeat: no-repeat;
	}
	table {
		font-size: 23px;
		border-collapse: collapse;
		
	}
	td {
		padding: 10px;
	}
	#td1
	{
		
		background-color: #0093E9;
		background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);

		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
		
	}
	ul {
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background: linear-gradient(to top, #0066FF 0%, #000066 100%);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:visited {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;	
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #87CEEB;
	  	color: white;
	  	text-decoration: underline;
	}
    .basic_box {
        border: 1px solid #ccc;
		border-radius: 15px;
        background-color: #0093E9;
        top: 100px; /* Adjust the top value as needed */
        left: 25%; /* Adjust the left value as needed */
        width: 1000px;
        padding: 20px;
        padding-top: 10px;
        position: absolute; /* Use absolute positioning to move the box */
        margin-bottom: 20px; /* Add margin-bottom for spacing */
    }

    .basic_box + .basic_box {
        margin-top: 30px; /* Add margin-top for spacing between multiple boxes */
    }

    .bin_box {
        border: 1px solid #ccc;
        border-radius: 15px;
        background-color: #0093E9;
        top: 250px; /* Adjust the top value as needed */
        left: 25%; /* Adjust the left value as needed */
        width: 1000px;
        padding: 20px;
        padding-top: 10px;
        position: absolute; /* Use absolute positioning to move the box */
        margin-bottom: 20px; /* Add margin-bottom for spacing */
    }
    </style>
</head>

<body>
<?php
$myfile = fopen("book.txt", "r") or die("Unable to open file!");
$indexf = fopen("indexb.txt", "r") or die("Unable to open file!");

// Check if the user is logged in
if (isset($_COOKIE["phone"])) {
    $loggedInUserPhone = $_COOKIE["phone"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $booking_id = $_POST["booking_id"];

        $found = false;

        // Search for the booking ID in the index array
        while (($line = fgets($indexf)) !== false) {
            $values = explode("|", $line);
            if ($values[0] == $booking_id) {
                // Check if the phone number matches the logged-in user's phone number
                if ($values[1] == $loggedInUserPhone) {
                    fseek($myfile, (int)$values[2], SEEK_SET);
                    $booking_data = fgets($myfile);
                    $booking_values = explode("|", $booking_data);

                    $found = true;
                    break;
                } else {
                    echo "<div class='bin_box'>";
                    echo "<h2>Access Denied</h2>";
                    echo "<p>You do not have permission to access this booking ID.</p>";
                    echo "</div>";
                    goto binlabel;  // Stop further execution of the code
                }
            }
        }

        if ($found) {
            echo "<div class='bin_box'>";
            echo "<h2 style='font-weight: bold; font-size: 24px;'>Booking Details</h2>";

            echo "<table>";
            echo "<tr><td>Booking ID:</td><td>" . $booking_values[0] . "</td></tr>";
            echo "<tr><td>Phone Number:</td><td>" . $booking_values[1] . "</td></tr>";
            echo "<tr><td>Flight ID:</td><td>" . $booking_values[2] . "</td></tr>";
            echo "<tr><td>Airline ID:</td><td>" . $booking_values[3] . "</td></tr>";
            echo "<tr><td>Date:</td><td>" . $booking_values[4] . "</td></tr>";
            echo "<tr><td>Source:</td><td>" . $booking_values[5] . "</td></tr>";
            echo "<tr><td>Destination:</td><td>" . $booking_values[6] . "</td></tr>";
            echo "<tr><td>Price:</td><td>" . $booking_values[7] . "</td></tr>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "<div class='bin_box'>";
            echo "<h2>Booking ID Not Found</h2>";
            echo "</div>";
        }
    }
}
binlabel:
fclose($myfile);
fclose($indexf);
?>
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
		$phone = $_COOKIE['phone'];
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
	  
	  $cookie_name = "username1";
    $cookie_value =  $val_arr[1];;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	  
 

	
	  
	  
	  break;
	  
	}
	
	else{
		$low ++;	}
}
		

		 ?>
<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 5px; font-size: 40px; position: sticky; z-index: 1;color: black;">THE <p style="color: black; display: inline;">JET CONNECT </p> </td>
			<td id="td1" style="font-size: 25px; text-align: right; color: black;">Hello, <?php echo $val_arr[1]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Information</a></li>
		<li><a href="bookroom.php">Book a Flight</a></li>
		
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="search.php">Search</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>

<div class="basic_box">
    <h2>Search Booking</h2>
    <form method="post" action="search.php">
        <label for="booking_id">Enter Booking ID:</label>
        <input type="text" name="booking_id" id="booking_id" required>
        <input type="submit" value="Search">
    </form>
</div>

</body>
</html>
