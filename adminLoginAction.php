<?php 
include('connection.php');
$adminName=$_POST['name'];
$adminPassword=$_POST['password'];
$query="SELECT * FROM adminlogin WHERE  adminName='$adminName' AND adminPassword='$adminPassword'";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);

if($count==1)
{ 
session_start();
$data=mysqli_fetch_array($res);
$_SESSION['adminName']=$data['adminName'];
$_SESSION['adminId']=$data['adminId'];
header('location:adminHome.php');}

else
{ header('location:index.php');}

?>

