<?php
    include "connection.php";
?>
<?php
        $sql= "SELECT * from sales";
        $qury=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($qury))
            echo "$row[1]<br>";
?>