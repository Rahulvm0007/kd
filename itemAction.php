<?php
include('connection.php');
$category=ucfirst($_POST['categoryName']);
$item=ucfirst($_POST['itemName']);


$item="INSERT INTO item(catId,itemName) VALUES ('$category','$item')";

$res=mysqli_query($con,$item);

if($res)
{
header('location:addItem.php');
}
else
{

header('location:addItem.php');
}
?>
