<?php
	include "connection.php";
?>
<html>
    <head>
        <title>Inventory System</title>
        <script type="text/javascript" src="table.js"></script>
        <link rel="stylesheet" type="text/css" href="css.css">
            
    </head>
    <body bgcolor="#dedede">
        <div class="logo">
       <a href="table.php"><h1>Inventory System </h1></a>
       </div>
     
       <div class="content" id="dashboard">
         <table width="100%">
                <tr class="head">
                <th><a href="table.php">Inventory</a></th>
                <th><a href="sales.php">Sales</a></th>
                <th><a href="tobeorder.php">To be order</a></th>
                <th><a href="addItem.php">Add Item</a></th>
                <th><a href="addProduct.php">Add Product</a></th>
                <th><a href="editPrice.php">Edit Price</a></th>
                <th><a href="#">Log Out</a></th>
                </tr>
            </table>
        </div>
        <div class="content" id="inventory">
          
            <table width="100%">
                <tr class="head">
                <th>Item</th>
                <th>Quantity Left</th>
                <th>Price (Rs)</th>
                </tr>
                <td class="edit_td">
                    <span class="text">
                    <?php
                        $sql= "SELECT * from inventory WHERE qty_left<=5";
                        $qury=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($qury)){
                            echo "$row[1] <br>";
                        }
                    ?> 
                    </span> 
                </td>
                <td class="edit_td">
                    <span class="text">
                    <?php
                        $sql= "SELECT * from inventory WHERE qty_left<=5";
                        $qury=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($qury)){
                            echo "$row[2] <br>";
                        }
                    ?> 
                    </span> 
                </td>
                <td class="edit_td">
                    <span class="text">
                    <?php
                        $sql= "SELECT * from inventory WHERE qty_left<=5";
                        $qury=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($qury)){
                            echo "$row[3] <br>";
                        }
                    ?> 
                    </span> 
                </td>
            </table>
        </div>
        </body>
</html>