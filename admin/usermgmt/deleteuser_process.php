<?php
    include "../process/connection.php";
?>
<?php
    $uname=$_POST['username'];
    $sql="DELETE FROM user WHERE username='$uname'";
    mysqli_query($con,$sql);
?>
<?php
    header("Location:userReport.php");
?>