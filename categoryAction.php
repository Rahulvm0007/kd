<?php
include('connection.php');
$category=ucfirst($_POST['category']);

$category="INSERT INTO category(catName) VALUES ('$category')";

$res=mysqli_query($con,$category);

if($res)
{
header('location:addCategory.php');
}
else
{

header('location:addCategory.php');
}
?>