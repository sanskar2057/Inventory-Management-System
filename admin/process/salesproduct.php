<?php
    include "header.php";
?>
        <?php
        include "footer.php";
        ?>

       <div class="content" id="addproitem">
            <form action="sales_process.php" method="post">
                <div style="font-size: 25px;">
                Select Id:
                <select name="pid" id="pid" style="margin-left:58px;"required>
                <option value="">Select Product</option>
                <?php
                        $category=$_POST['category'];
                        $sql= "SELECT * from inventory where category='$category'";
                        $qury=mysqli_query($con,$sql);
                        $options="";
                        while($row=mysqli_fetch_array($qury)){
                            $options=$options."<option value='".$row[0]."'>".$row[1]."</option>";
                            
                        }
                        echo "$options";
                    ?> 

                </select><br>
                </div>
                <br />
                <span style="font-size:25px;">Total Sales:<span>
                
                <input name="totalsales" type="number" style="margin-left:58px;"required/><br />

                <input name="view" type="submit" value="Apply" style="margin-left:250px;"/></div><hr>
            </form>
            <form action="salesReport.php" method="post">
                <input type="date" name="fromdate" style="margin-left:250px;" required>
                <input type="date" name="todate" required>
                <div style="margin-left:250px; margin-top: 14px;">
                <input name="view" type="submit" value="Generate Sales Report"/></div>
            </form>


       </body>
</html>