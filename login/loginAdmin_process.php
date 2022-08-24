<?php
    include "../user/connection.php";
?>

<?php
    session_start();
    $uname=$_POST['username'];
    $pass=md5($_POST['password']);

    
    $sql="SELECT * FROM admin_table WHERE username='$uname' and password='$pass'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)==1){
       $_SESSION['username']=$uname; 
        header("Location:../admin/usermgmt/userReport.php");

    
    }
     else{
        echo "<script> window.open('loginAdmin.php?update=Incorrect Password','_self')</script>";
     }
?>