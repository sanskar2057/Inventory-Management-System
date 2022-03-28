<?php
    include "connection.php";
?>
<?php
    $sql= "SELECT * from inventory";
    $qury=mysqli_query($con,$sql);
    $options="";
    while($row=mysqli_fetch_array($qury)){
        $options=$options."<option>$row[1]</option>";
        
    }
    echo "$options";
?> 