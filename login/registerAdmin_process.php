<?php
    include "../connection.php";
?>

<?php    
    $uname=$_POST['username'];
    $pass=md5($_POST['password']);
    $pass2=md5($_POST['confirm_password']);

    $sql="INSERT INTO admin_table(username,password,confirm)values('$uname','$pass','$pass2')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("Location:loginAdmin.php");
?>