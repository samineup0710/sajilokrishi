<? php
include 'dbh.php';
$name=$_POST['Name'];
$address=$_POST['Address'];
$email=$_POST['Email'];
$password=$_POST['Password'];
$confrim password=$_POST['Confrim password'];
$contact no=$_POST['Contact No'];

$sql="insert into signup(Name,Address,Email,Password,Confrim password,constant No)
values ('$name','$address','$email','$password','$confrim password','$contact no') ";
$result=$conn->query($sql);

header("Location:index.php");
?>