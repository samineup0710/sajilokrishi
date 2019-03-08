<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'mydatabase');

// Check connection
if (!$conn) {
    die("error");
}

$sql = "SELECT * FROM items";
$result = $conn->query($sql);

if ($result == false) die ("bad query");

if ($result->num_rows>0){
	    while($row = $result->fetch_assoc()) {
	    	$sql = "SELECT * FROM users WHERE id = '" . $row['userid'] . "' ";
			$user = $conn->query($sql);
			if ($user == false){
				die ("wrongquery");
			}
			else{
				$user1 = $user->fetch_assoc();
			}

        	echo "{id: " . $row["userid"]. ", Name: " . $row["cropname"]. ", price:" . $row["price"] .", '" . $user1['username'] . "'}";
    }
}
else echo "notloggedin";
?>