<?
php
include 'dbh.php';
session_start();

$username=$_POST['Username'];
$password=$_POST['Password'];

$sql="SELECT FORM signup WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);

if (!row=$result->fetch_assoc()){
	header("Location:error.php");

}else

{
	$_SESSION['username']=$_POST['Username']
	header("Location:home.php");
}