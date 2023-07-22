<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<style>
	

	body {
	  margin: 0;
	  background: white;
	  background-attachment: relative;
	  	background-size: cover;

	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: rgba(255,202,40,1);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
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
        top: 200px; /* Adjust the top value as needed */
        left: 25%; /* Adjust the left value as needed */
        width: 1000px;
        padding: 20px;
        padding-top: 10px;
        position: absolute; /* Use absolute positioning to move the box */
        margin-bottom: 20px; /* Add margin-bottom for spacing */
    }
    .ban_box {
        border: 1px solid #ccc;
        border-radius: 15px;
        background-color: #0093E9;
        top: 500px; /* Adjust the top value as needed */
        left: 25%; /* Adjust the left value as needed */
        width: 1000px;
        padding: 20px;
        padding-top: 10px;
        position: absolute; /* Use absolute positioning to move the box */
        margin-bottom: 20px; 
        margin-top: 80px;/* Add margin-bottom for spacing */
        border-collapse: collapse;
    }
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 1px;
	  	width: 20%;
	  	font-size: 24px;
	  	background-color: rgba(255,202,40,1);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 200%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: black;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color: rgba(255,202,40,1) ;
	  	color: black;
	}
	

	li a:hover:not(.active) {
	  	background-color: skyblue;
	  	color: black;
	  	text-decoration: underline;
	}

	div1.slide-left {
  width:100%;
  overflow:hidden;
}


</style>
<body>
<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1">THE <p style="color: #7FFFD4; display: inline;">JET CONNECT </p> </td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" class="active">Flights Information</a></li>
		<li><a href="add_room_admin.php">Add Flights</a></li>
		<li><a href="remove_room_admin.php">Remove Flights</a></li>
		
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="searching.php">Search</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
<?php
// Function to check if a flight ID exists
function isFlightIdExists($flightId, $indexFile) {
    $indexHandle = fopen($indexFile, 'r');
    if ($indexHandle) {
        while (($line = fgets($indexHandle)) !== false) {
            $indexValues = explode("|", $line);
            if ($indexValues[0] == $flightId) {
                fclose($indexHandle);
                return true;
            }
        }
        fclose($indexHandle);
    }
    return false;
}

// Function to get flight details
function getFlightDetails($flightId, $flightFile) {
    $flightHandle = fopen($flightFile, 'r');
    if ($flightHandle) {
        while (($line = fgets($flightHandle)) !== false) {
            $flightValues = explode("|", $line);
            if ($flightValues[0] == $flightId) {
                fclose($flightHandle);
                return $flightValues;
            }
        }
        fclose($flightHandle);
    }
    return false;
}

function getBookedUsers($flightId, $bookFile) {
    $bookHandle = fopen($bookFile, 'r');
    $bookedUsers = array();

    if ($bookHandle) {
        while (($bookLine = fgets($bookHandle)) !== false) {
            $bookValues = explode("|", $bookLine);
            if ($bookValues[2] == $flightId) { // Compare with the flight ID value
                $bookedUsers[] = $bookValues;
            }
        }
        fclose($bookHandle);
    }
    return $bookedUsers;
}

// Prompt for flight ID
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $flightId = $_POST["flight_id"];

    // Check if flight ID exists
    if (isFlightIdExists($flightId, "indexp.txt")) {
        $flightDetails = getFlightDetails($flightId, "picture.txt");
        $bookedUsers = getBookedUsers($flightId,  "book.txt");

        // Display flight details and booked users
        echo "<div class='bin_box'>";
        echo "<h2>Flight Details:</h2>";
        echo "<h2>The requested Flight ID was found at leaf level.</h2>";
        echo "<p style='font-size: 20px;'>Flight ID: " . $flightDetails[0] . "</p>";
        echo "<p style='font-size: 20px;'>Airline: " . $flightDetails[1] . "</p>";
        echo "<p style='font-size: 20px;'>Source: " . $flightDetails[2] . "</p>";
        echo "<p style='font-size: 20px;'>Destination: " . $flightDetails[3] . "</p>";
        echo "<p style='font-size: 20px;'>Price: " . $flightDetails[4] . "</p>";
        
        echo "</div>";
        echo "<div class='ban_box'>";
        if (!empty($bookedUsers)) {
            
            echo "<h2>Booked Users:</h2>";
            echo "<table border='1' style='padding: 10px;'>";
            echo "<tr><th>Booking ID</th><th>User Phone</th><th>Flight ID</th><th>Seat ID</th><th>Date</th><th>Source</th><th>Destination</th><th>Amount</th></tr>";

            foreach ($bookedUsers as $user) {
                
                echo "<tr>";
                echo "<td>" . $user[0] . "</td>";
                echo "<td>" . $user[1] . "</td>";
                echo "<td>" . $user[2] . "</td>";
                echo "<td>" . $user[3] . "</td>";
                echo "<td>" . $user[4] . "</td>";
                echo "<td>" . $user[5] . "</td>";
                echo "<td>" . $user[6] . "</td>";
                echo "<td>" . $user[7] . "</td>";
                echo "</tr>";
            }

            echo "</table>";

        } else {
            echo "<div class='bin_box'>";
            echo "<p>No users have booked this flight.</p>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
}

        
     
    else {
        echo "<div class='bin_box'>";
        echo "<p>Flight ID not found.</p>";
        echo "</div>";
    }
}
    
?>

<!-- HTML form for input -->
<div class="basic_box">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label for="flight_id" style="font-size: 20px;">Enter Flight ID:</label>
    <input type="text" name="flight_id" id="flight_id" required>
    <br><br>
    <input type="submit" value="Search">
</form>
</div>
