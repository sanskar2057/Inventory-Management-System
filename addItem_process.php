<?php
    include "connection.php";
?>
<?php
      $product=$_POST['product'];
      $qty_left=$_POST['itemnumber'];
  
      $sql3="UPDATE inventory SET qty_left=qty_left+$qty_left WHERE item='$product'";
      mysqli_query($con,$sql3);
 
?>
<?php
    header ("Location:table.php");
?>
 
    

