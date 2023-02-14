<?php
include('connection.php');
$kudumbasreeName=ucfirst($_POST['kudumbasreeName']);
$kudumbasreeAddress=ucfirst($_POST['kudumbasreeAddress']);          
$kudumbasreeRegno=strtoupper($_POST['kudumbasreeRegno']);
$secretary=ucfirst($_POST['secretary']);
$panchayath=ucfirst($_POST['panchayath']);
$ward=ucfirst($_POST['ward']);
$kudumbasreePassword=$_POST['kudumbasreePassword'];
$kudumbasreePhone=trim($_POST['kudumbasreePhone']);
$register="INSERT INTO kudumbasreeregister
(kName,kAddress,regNo,secretary,panchayath,ward,password,phone) VALUES ('$kudumbasreeName','$kudumbasreeAddress','$kudumbasreeRegno','$secretary','$panchayath','$ward','$kudumbasreePassword','$kudumbasreePhone')";

$res=mysqli_query($con,$register);

if($res)
{
header('location:kudumbasreeLogin.php');
}
else
{

header('location:kudumbasreeRegistration.php');
}
?>