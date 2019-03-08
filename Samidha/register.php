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

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];



$sql = "INSERT INTO users (username, password, email, number, address)
VALUES ('$username' , '$password', '$email', '$number', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "User Registered";
} else {
    die ("error");
}
?>