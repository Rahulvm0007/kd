<?php
include('connection.php');
$req=$_GET['rId'];

$request="update request SET isActive='1' where reqId='$req'";

$res=mysqli_query($con,$request);

if($res)
{
header('location:adminViewRequest.php');
}
else
{

header('location:adminViewRequest.php');
}
?>
