<?php
    include "connection.php";
?>
<?php
    $category=$_POST['category'];
    $sql= "SELECT DISTINCT category from inventory";
    $qury=mysqli_query($con,$sql);
    // $options="";
    while($row=mysqli_fetch_array($qury)){
        $options=$options."<option>$row[category]</option>";
        
    }
    echo "$options";
    
?> 