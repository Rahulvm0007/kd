<?php
include('connection.php');
$pro=$_GET['pId'];

$proceed="update proceed SET isActive='1' where proceedId='$pro'";

$res=mysqli_query($con,$proceed);

if($res)
{
header('location:adminViewProceeds.php');
}
else
{

header('location:adminViewProceeds.php');
}
?>
