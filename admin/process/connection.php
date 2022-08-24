<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="inv_mgmt2";

    $con=mysqli_connect($server,$username,$password,$db);
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
?>