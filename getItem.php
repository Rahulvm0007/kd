<select name="itemName" class="form-control">
<!--<option>Choose One</option>   -->
    
<?php 
include('connection.php');
$item=$_GET['item'];
$sql="select itemId,itemName from item where catId='$item'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
      {
    ?>
    
    <option value="<?php echo $row['itemName']; ?>"><?php echo $row['itemName']; ?></option>
    
    <?php
          
        
      }



?>
</select>