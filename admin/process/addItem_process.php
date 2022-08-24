<?php
    session_start();
    include "connection.php";
?>
<?php

    $product=$_POST['product'];
    $qty_left=$_POST['itemnumber'];

    $sql3="UPDATE inventory SET qty_left=qty_left+$qty_left WHERE item='$product'";
    $res=mysqli_query($con,$sql3);
    if($res){
        $_SESSION['status']="Quantity succesfully added";
        header('location:"table.php"');
    }

 

?>
<?php
    header ("Location:table.php");
?>
 
    

