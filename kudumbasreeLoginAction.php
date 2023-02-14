<?php 
include('connection.php');
$regNo=strtoupper($_POST['regNo']);
$password=$_POST['password'];
$query="SELECT * FROM kudumbasreeregister WHERE  regNo='$regNo' AND password='$password'";
$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);

if($count==1)
{ 
session_start();
$data=mysqli_fetch_array($res);
$_SESSION['kName']=$data['kName'];
$_SESSION['regNo']=$data['regNo'];
$_SESSION['kId']=$data['kId'];
header('location:kudumbasreeHome.php');}

else
{ header('location:kudumbasreeLogin.php');}

?>

