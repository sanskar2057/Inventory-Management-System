<?php
    include "connection.php";
?>
<?php
      $product=$_POST['product'];
      $itemprice=$_POST['itemprice'];
  
      $sql3="UPDATE inventory SET price=$itemprice WHERE item='$product'";
      mysqli_query($con,$sql3);
 
?>
<?php
    header ("Location:table.php");
?>
 
    

