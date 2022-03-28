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
       <div class="content" id="addproitem">
            <form action="sales_process.php" method="post">
                <div style="margin-left: 95px;">
                Product
                <select name="product" id="product">
                    <option name="chosen_pro">
                   <?php include "editPrice_process.php" ?>
                    </option>
                </select><br>
                </div>
                <br />
                Total Sales:<input name="totalsales" type="number" /><br />
                <div style="margin-left: 127px; margin-top: 14px;">
                <input name="view" type="submit" value="Apply"/></div>
                <div style="margin-left: 127px; margin-top: 14px;">
                <input name="view" type="button" value="Generate Sales Report"/></div>
            </form>
        </div>
       </body>
</html>