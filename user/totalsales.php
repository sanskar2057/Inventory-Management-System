<?php
    include "connection.php";
?>
<?php
    $sql="SELECT SUM(sales_price) from sales WHERE sales_date BETWEEN '$from' AND '$until'";
    $qury=mysqli_query($con,$sql);
    if(mysqli_num_rows($qury)>0){
        foreach($qury as $row)
        {    
        echo $row['SUM(sales_price)'];
    }    
}
?>