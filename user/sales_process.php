<?php
    session_start();
    include "connection.php";
?>
<?php
    $id=$_POST['pid'];
    
    $sales=$_POST['totalsales'];
    $qty_left=mysqli_query($con,"SELECT qty_left FROM inventory WHERE inv_id=$id");
    $qtyleft=mysqli_fetch_array($qty_left);
    $qty=intval($qtyleft[0]);
    
    if($sales<=$qty){
    $sql1="INSERT INTO sales(product,sales,sales_date,sales_price,inv_id)VALUES('','$sales',now(),0,'$id')";
    mysqli_query($con,$sql1);
    $sql2="UPDATE sales, inventory SET sales.sales_price=sales.sales*inventory.price;";
    mysqli_query($con,$sql2);
    // $sql3="UPDATE inventory SET sales=sales+$sales WHERE id=$id";
    // mysqli_query($con,$sql3);
    $sql4="UPDATE inventory SET inventory.qty_left=inventory.qty_left-$sales WHERE inventory.inv_id='$id' AND inventory.qty_left>=$sales";
    $res=mysqli_query($con,$sql4);
    if($res){
        $_SESSION['status']="Item sold";
        header('location:"table.php"');
    }

    $sql5="UPDATE sales, inventory SET product=inventory.item WHERE sales.inv_id='$id' ";
    mysqli_query($con,$sql5);
    }
    else{
        $_SESSION['status']="Insufficient item in stock (ORDER MORE!!!)";
        header('location:"table.php"');
    }
    mysqli_close($con);
    header("Location:table.php");
?>