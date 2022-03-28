<?php
    include "../connection.php";
?>

<?php
    session_start();
    $uname=$_POST['username'];
    $pass=md5($_POST['password']);


    $sql="SELECT * FROM admin_table WHERE username='$uname' and password='$pass'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)==1){
       $_SESSION['username']=$u; 
       header("Location:../table.php");
    }
    else{
        echo "error";
    }
?>