<?php
include('connection.php');
$sug=$_GET['sId'];

$suggestion="update suggession SET 	isActive='1' where sId='$sug'";

$res=mysqli_query($con,$suggestion);

if($res)
{
header('location:adminViewSuggestions.php');
}
else
{

header('location:adminViewSuggestions.php');
}
?>
