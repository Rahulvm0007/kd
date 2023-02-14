<?php

$con=mysqli_connect("localhost","root","");

if(!mysqli_select_db($con,"kudumbasree"))

{
echo "DB Not Found";    
}

?>