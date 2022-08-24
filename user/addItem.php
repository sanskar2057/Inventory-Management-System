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
        margin-bottom: 1px;">ADD ITEM:</h2>
       <div class="content" id="addproitem">
            <form action="category.php" method="post">
                <div style="font-size: 25px;">
                Choose Category:
                <select name="category" id="category" required style="margin-left:30px;" >
                    <option value="">Choose Category</option>
                   <?php include "editPrice_process.php" ?>

                </select><br>
                </div>
                <br />
                <!-- <div style="font-size: 25px;">
                Quantity:<input name="itemnumber" type="number" style="margin-left:30px;" /></div><br /> -->
                <div style="margin-left:130px; margin-top: 14px; ">
                <input name="add" type="submit" value="Go"/></div>
            </form>
        </div>
       

       </body>
</html>