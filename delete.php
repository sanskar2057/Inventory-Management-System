<?php
    include "connection.php";
?>
<?php
    $product=$_POST['product'];
    $sql="DELETE FROM inventory WHERE item='$product'";
    mysqli_query($con,$sql);
?>
<?php
    header("Location:table.php");
?>