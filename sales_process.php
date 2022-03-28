<?php
    include "connection.php";
?>
<?php
    $product=$_POST['product'];
    $sales=$_POST['totalsales'];
    $sql="INSERT INTO sales (product,sales) VALUES ('$product','$sales')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("Location:table.php");
?>