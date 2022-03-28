<html>
    <head>
        <title>Inventory System</title>
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
       <div class="content" id="addpro">
            <form action="addProduct_process.php" method="POST">
                <div style="margin-left: 48px;">
                Product name:<input name="name" type="text" />
                </div>
                <br />
                <div style="margin-left: 97px;">
                Price:<input name="price" type="text" placeholder="Rupees"  />
                </div>
                <br />
                <div style="margin-left: 80px;">
                Quantity:<input name="qty" type="number" />
                </div>
                <br />
                <!-- <div style="margin-left: 100px;">
                Sold:<input name="sold" type="number" />
                </div> -->
                <div style="margin-left: 127px; margin-top: 14px;"><input type="submit" value="Add" name="add_product" /></div>
            </form>
        </div>
    </body>
</html>