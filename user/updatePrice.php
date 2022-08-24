<?php
    session_start();
    include "connection.php";
?>
<?php
      $id=$_POST['product'];
      $itemprice=$_POST['itemprice'];
      
      $sql3="UPDATE inventory SET price=$itemprice WHERE item='$id'";
      $res=mysqli_query($con,$sql3);
      if($res){
        $_SESSION['status']="Price succesfully edited";
        header('location:"table.php"');
    }
?>
<?php
    header ("Location:table.php");
?>
 
    

