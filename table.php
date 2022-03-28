<?php
    include "connection.php";

?>
<html>
    <head>
        <title>Inventory System</title>
        <link rel="stylesheet" type="text/css" href="css.css">
        <style>
            input[type=submit]{
                background-color: rgb(141, 196,210); /* Green */
                border: none;
                color: black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                font-weight: bold;
            }
            select {
                
                width: 100%;
                min-width: 15ch;
                max-width: 30ch;
                border: 1px solid var(--select-border);
                border-radius: 0.25em;
                padding: 0.25em 0.5em;
                font-size: 1.25rem;
                cursor: pointer;
                line-height: 1.1;
                background-color: #fff;
                background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
            }
        </style>
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
                <th><a href="login/logout.php">Log Out</a></th>
                </tr>
                </table>
        </div>
        <div class="content" id="inventory">
          
            <table width="100%">
            <tr class="head">
            <th>Date</th>
            <th>Item</th>
            <th>Quantity Left</th>
            <th>Price (Rs) per piece</th>
            </tr>
            <td class="edit_td">
                <span class="text"> <?php include "date.php"?></span> 
                </td>
                <td>
                <span class="text"><?php include "item.php"?> </span> 
                </td>
                <td>
                <span id="qty_left"><?php include "QuantityLeft.php"?>
                </span>
                </td>
                <td>
                <span class="text"><?php include "Price.php"?> </span>
                </td>
            
            </table>
        </div>
        <hr style="padding-top:50px;">
        <!-- DELETE -->
        <div class="delete_item">
            <div class="content" id="delete">
                <form action="delete.php" method="post">
                    <div style="margin-left: none; font-size:30px">
                    Product
                    <select name="product" id="product">
                        <option value="none" selected>Select Product</option>
                        <option name="chosen_pro" >
                    <?php include "editPrice_process.php" ?>
                        </option>
                    </select><br>
                    </div>
                    <br />
                    <input name="delete" type="submit" value="Delete" /></div>
                </form>
            </div>
        </div>
            </body>
</html>