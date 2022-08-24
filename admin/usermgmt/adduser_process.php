<?php
    include "../process/connection.php";
?>

<?php    
    $fname=$_POST['fullname'];
    $uname=$_POST['username'];
    $pass=md5($_POST['password']);
    

    $sql="INSERT IGNORE INTO user(fullname,username,password,date)values('$fname','$uname','$pass',now())";
    mysqli_query($con,$sql);
    
    header("Location:userReport.php");
    mysqli_close($con);
?>