<?php
    include "connection.php"
?>
<?php
    $date= date("h:i:sa"); 
    $pro=$_POST['name'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];

    $sql="INSERT INTO inventory(item,qty_left,price)values('$pro','$qty','$price')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("Location:table.php");
?>