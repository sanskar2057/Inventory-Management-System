<?php
    include "../user/connection.php";
?>

<?php
    session_start();
    $uname=$_POST['username'];
    $pass=md5($_POST['password']);

    
    $sql="SELECT * FROM user WHERE username='$uname' and password='$pass'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)==1){
       $_SESSION['username']=$uname; 
       header("Location:../user/table.php");
    }
    else{
        echo "<script> window.open('../index.php?update=Incorrect Password','_self')</script>";
    }
    

?>