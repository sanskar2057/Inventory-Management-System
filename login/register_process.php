<?php
    include "../connection.php";
?>

<?php    
    $fname=$_POST['full_name'];
    $uname=$_POST['username'];
    $pass=md5($_POST['password']);
    $pass2=md5($_POST['confirm_password']);

    $sql="INSERT INTO user(fullname,username,password,confirm)values('$fname','$uname','$pass','$pass2')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("Location:login.php");
?>