<?php
include('connection.php');
$user=$_POST['hideId'];
$userName=$_POST['userName'];
$userEmail=$_POST['userEmail'];
$userAddress=$_POST['userAddress'];
$userPhone=$_POST['userPhone'];

$profile="update userregister SET userName='$userName',userEmail='$userEmail',userAddress='$userAddress',userPhone='$userPhone' where userId='$user'"; 
  
 
$res=mysqli_query($con,$profile);

if($res)
{
header('location:userViewProfile.php');
}
else
{

header('location:updateUserProfile.php');
}
?>
