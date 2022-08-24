<?php
    include "header.php";
?>
      <?php
        include "footer.php";
        ?>

       <div class="content" id="addproitem">
            <form action="salesproduct.php" method="post">
                <div style="font-size: 25px;">
                Select Category:
                <select name="category" id="category" style="margin-left:58px;"required>
                    <option value="">Choose Category</option>
                   <?php include "editPrice_process.php" ?>

                </select><br>
                </div>
</br>
                <input name="view" type="submit" value="Go" style="margin-left:250px;"/></div><hr>
            </form>
            <form action="salesReport.php" method="post">
                <input type="date" name="fromdate" style="margin-left:250px;" required>
                <input type="date" name="todate" required>
                <div style="margin-left:250px; margin-top: 14px;">
                <input name="view" type="submit" value="Generate Sales Report"/></div>
            </form>
        </div>
  
       </body>
</html>