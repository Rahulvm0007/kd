<?php
include('connection.php');
$category=$_POST['categoryName'];
$item=$_POST['itemName'];
$label=ucfirst($_POST['label']);
$pic=$_FILES['image'].rand(100,1000).['name'];
$piccontent=$_FILES['image']['tmp_name'];
$picsize=$_FILES['image']['size'];
$dir="Request/";
$path=$dir.$pic;
move_uploaded_file($piccontent,$path);
$qty=$_POST['quantity'];
$request="INSERT INTO request(catId,itemName,images,quantity) VALUES ('$category','$item','$pic','$qty')";

$res=mysqli_query($con,$request);

if($res)
{
header('location:adminViewRequest.php');
}
else
{

header('location:adminAddRequest.php');
}
?>
