<?php
include('connection.php');
session_start();
$suggestion=$_POST['suggestion'];
$proceed=$_POST['proceed'];

if($proceed)
{
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
$buy=$_POST['buyPrice'];
$kId=$_SESSION['kId'];
$description=ucfirst($_POST['description']);
$product="INSERT INTO product(catId,itemName,label,images,sell,buy,description,kId) VALUES ('$category','$item','$label','$pic','$sell','$buy','$description','$kId')";

$res=mysqli_query($con,$product);

if($res)
{
	
    $suggestion="update proceed SET isActive='2' where proceedId='$proceed'";
    $result=mysqli_query($con,$suggestion);
	if($result)
    {
    header('location:adminViewProduct.php');
    }
    else
    {
    header('location:acceptProceed.php');
    }
}
}

elseif($suggestion)
{
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
$buy=$_POST['buyPrice'];
$kId=$_SESSION['kId'];
$description=ucfirst($_POST['description']);
$product="INSERT INTO product(catId,itemName,label,images,sell,buy,description,kId) VALUES ('$category','$item','$label','$pic','$sell','$buy','$description','$kId')";

$res=mysqli_query($con,$product);

   if($res)
   {
	
    $suggestion="update suggession SET isActive='2' where sId='$suggestion'";
    $result=mysqli_query($con,$suggestion);
	if($result)
    {
    header('location:adminViewProduct.php');
    }
    else
    {
    header('location:acceptSuggestion.php');
    }
}
}
else
{
	echo "can not be updated";
}

	
	
	
?>
