<?php
    include "connection.php";
?>
<?php
    include "header.php";
?>      
     <?php
            include "footer.php"
        ?>
                <h2 style="color: black;
        font-family: arial, sans-serif;
        font-size: 30px;
        font-weight: bold;
        margin-top: 0px;
        margin-bottom: 1px;">EDIT PRICE:</h2>
       <div class="content" id="addproitem">
            <form action="updatePrice.php" method="post">
                <div style="font-size: 25px;">
                Product:
                <select name="product" id="product" style="margin-left:30px;"required>
                    <option value="">Choose Product</option>
                    <?php
                        $category=$_POST['category'];
                        $sql= "SELECT * from inventory where category='$category'";
                        $qury=mysqli_query($con,$sql);
                        $options="";
                        while($row=mysqli_fetch_array($qury)){
                            $options=$options."<option>$row[1]</option>";
                            
                        }
                        echo "$options";
                    ?> 

                </select><br>
                </div>
                <br />
                <div style="font-size: 25px;">
                Price:<input name="itemprice" type="text" placeholder="Rupees" style="margin-left:67px;"required /></div><br />
                <div style="margin-left:130px; margin-top: 14px; ">
                <input name="add" type="submit" value="Edit"  /></div>
            </form>
        </div>
   
       </body>
</html>
