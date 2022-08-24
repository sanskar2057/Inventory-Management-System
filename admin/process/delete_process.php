<?php
    session_start();
    include "connection.php";
?>
<?php
    $id=$_POST['product'];
    $qry1="SET FOREIGN_KEY_CHECKS=0";
    mysqli_query($con,$qry1);
    $sql="DELETE FROM inventory WHERE item='$id'";
    mysqli_query($con,$sql);
    $qry2="SET FOREIGN_KEY_CHECKS=1";
    $res=mysqli_query($con,$qry2);
    if($res){
        $_SESSION['status']="Record succesfully deleted";
        header('location:"table.php"');
    }
    header("Location:table.php");
?>