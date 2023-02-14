<?php
include('connection.php');
$userName=ucfirst($_POST['userName']);
$userAddress=ucfirst($_POST['userAddress']);
$userEmail=strtolower($_POST['userEmail']);
$Password=$_POST['userPassword'];
$phoneNumber=$_POST['userPhone'];
$register="INSERT INTO userregister
(userName,userAddress,userEmail,userPassword,userPhone) VALUES ('$userName','$userAddress','$userEmail','$Password','$phoneNumber')";

$res=mysqli_query($con,$register);

if($res)
{
header('location:index.php');
}
else
{

header('location:userRegistration.php');
}
?>