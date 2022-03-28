<?php
    $sql= "SELECT * from inventory WHERE qty_left<=5";
    $qury=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($qury)){
        echo "$row[1]";
    }
?> 