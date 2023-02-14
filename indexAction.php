<?php 
include('connection.php');
$userPhone=$_POST['userPhone'];
$userPassword=$_POST['userPassword'];
$query="SELECT * FROM userregister WHERE  userPhone='$userPhone' AND userPassword='$userPassword'";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);

if($count==1)
{ 
session_start();
$data=mysqli_fetch_array($res);
$_SESSION['userName']=$data['userName'];
$_SESSION['userId']=$data['userId'];
header('location:userHome.php');}

else
{ header('location:index.php');}

?>

