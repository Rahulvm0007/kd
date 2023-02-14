<?php
session_start();
include('connection.php');
$category=$_POST['categoryName'];
$item=$_POST['itemName'];
$label=ucfirst($_POST['label']);
$pic=$_FILES['image'].rand(100,1000).['name'];
$piccontent=$_FILES['image']['tmp_name'];
$picsize=$_FILES['image']['size'];
$dir="product/";
$path=$dir.$pic;
move_uploaded_file($piccontent,$path);
$sell=$_POST['sellPrice'];
$description=ucfirst($_POST['description']);

$kudumbasreeId=$_SESSION['kId'];
$suggestion="INSERT INTO suggession(catId,itemName,label,images,price,description,kId) VALUES ('$category','$item','$label','$pic','$sell','$description','$kudumbasreeId')";

$res=mysqli_query($con,$suggestion);

if($res)
{
header('location:kudumbasreeViewSuggestions.php');
}
else
{

header('location:addSuggestion.php');
}
?>
