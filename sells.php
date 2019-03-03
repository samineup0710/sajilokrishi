<? php
session_start();
include 'dbh.php';
$cropsname=$_POST['Crops name'];
$quantity=$_POST['Quantity'];
$price=$_POST['Price'];
$contact no=_POST['Contact No'];

$sql="insert into sells(Crops name,Quantity,Price,Contact No) values('$cropsname','$quantity','$price','$contact no')";
$result=$conn->query($sql);


header("Location:Home.php");
?>