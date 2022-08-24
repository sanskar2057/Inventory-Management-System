<?php
    include "header.php";
?>
<?php
    include "footer.php";
?>
        <h2 style="color: black;
        font-family: arial, sans-serif;
        font-size: 30px;
        font-weight: bold;
        margin-top: 0px;
        margin-bottom: 1px;">ADD PRODUCT:</h2>
       <div class="content" id="addpro">
            <form action="addProduct_process.php" method="POST">
                <div style="font-size: 25px;">
                Category name:<input name="category" type="text" style="margin-left:5px;"required/>
                </div>
                <br />
                <div style="font-size: 25px;">
                Product name:<input name="name" type="text" style="margin-left:20px;" required/>
                </div>
                <br />
                <div style="font-size: 25px;">
                Price:<input name="price" type="text" placeholder="Rupees" style="margin-left:118px;" pattern="[0-9]+" required/>
                </div>
                <br />
                <div style="font-size: 25px;">
                Quantity:<input name="qty" type="number" style="margin-left:82px;"required />
                </div>
                <br />
                <!-- <div style="margin-left: 100px;">
                Sold:<input name="sold" type="number" />
                </div> -->
                <div style="margin-left: 182px; margin-top: 14px;"><input type="submit" value="Add" name="add_product" /></div>
            </form>
        </div>
    </body>
</html>