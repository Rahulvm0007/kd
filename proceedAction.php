<?php
include('connection.php');
session_start();
$category=$_POST['categoryName'];
$kid=$_SESSION['kId'];
$item=$_POST['itemName'];
$label=ucfirst($_POST['label']);
$pic=$_FILES['image'].rand(100,1000).['name'];
$piccontent=$_FILES['image']['tmp_name'];
$picsize=$_FILES['image']['size'];
$dir="product/";
$path=$dir.$pic;
move_uploaded_file($piccontent,$path);
$label=$_POST['label'];
$price=$_POST['productPrice'];
$qty=$_POST['quantity'];
$total=$_POST['total'];
$proceed="INSERT INTO proceed(catId,kId,itemName,label,images,sell,quantity,Total) VALUES ('$category','$kid','$item','$label','$pic','$price','$qty','$total')";

$res=mysqli_query($con,$proceed);

if($res)
{
header('location:kudumbasreeViewProceeds.php');
}
else
{

header('location:kudumbasreeHome.php');
}
?>
