<?php
    session_start();
    include "connection.php"
?>
<?php
    $pro=$_POST['name'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $category=$_POST['category'];
    $sql="INSERT INTO inventory(item,qty_left,price,date,category)values('$pro','$qty','$price',now(),'$category')";
    $res=mysqli_query($con,$sql);
    if($res){
        $_SESSION['status']="Record succesfully inserted";
        header('location:"table.php"');
    }
    else if(mysqli_errno($con)==1062){
        // $_SESSION['status']="Record could not be inserted";
        // header('location:"inventory.php"');
        $_SESSION['status']="Duplicate 'Item' can't be inserted";
        header('location:"table.php"');
    }
    
    mysqli_close($con);
    header("Location:table.php");
?>