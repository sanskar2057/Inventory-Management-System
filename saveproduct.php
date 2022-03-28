<?php
    $proname=$_POST['proname'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    
    $server='localhost';
    $user='root';
    $pass='';
    $db='liveedit';

    $connection = mysqli_connect($server,$user,$pass,$db);

    if(!$connection){
        echo "error";
    }
    else{
        echo "success";
    }
    $sql="insert into inventory(item,price,qtyleft)values('$proname','$price','$qty')";

    mysqli_query($connection,$sql);
    mysqli_close($connection);






?>