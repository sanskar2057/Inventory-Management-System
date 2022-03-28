<?php
    include "connection.php";
?>

<html>
    <head>
        <title>Inventory System</title>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body bgcolor="#dedede">
        <div class="logo">
       <a href="table.php"><h1>Inventory System </h1></a>
       </div>
        <div class="content" id="inventory">          
            <table width="100%">
            <tr class="head">
            <th>Date</th>   
            <th>Product</th>
            <th>Sales</th>
            <th>Quantity Left</th>
            </tr>
            <td class="edit_td">
                <span class="text"> <?php include "sales_date.php"?></span> 
                </td>
                <td>
                <span class="text"><?php include "sold_product.php"?> </span> 
                </td>
                <td>
                <span id="qty_left"><?php include "noofsales.php"?>
                </span>
                </td>
                <td>
                <span class="text"><?php include "qty_left.php"?> </span>
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