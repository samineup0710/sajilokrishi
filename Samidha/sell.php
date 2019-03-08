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

$cropname = $_POST['cropname'];
$userid = $_POST['userid'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];



$sql = "INSERT INTO items (cropname, userid, price, quantity)
VALUES ('$cropname' , '$userid', '$price', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Crop Registered";
} else {
    die ("error");
}
?>