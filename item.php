<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="inv_mgmt";

    $con=mysqli_connect($server,$username,$password,$db);
?>
<?php
    $sql= "SELECT * from inventory";
    $qury=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($qury))
        echo "$row[1]<br>";
?> 
