<?php
	include "header.php";
?>
        <div class="content" id="inventory">
          
            <table width="100%" id="inventory">
                <tr class="head">
                <th>Product Id</th>
                <th>Category</th>
                <th>Item</th>
                <th>Quantity Left</th>
                <th>Price (Rs)</th>
                </tr>
                <tr>
                <?php
                    $sql= "SELECT * from inventory WHERE qty_left<=5";
                    $qury=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($qury)){?>
                        <td class="edit_td">
                                <span class="text"> 
                                <?php echo "$row[0]<br>";?></span> 
                            </td>
                            <td>
                                <span class="text"> <?php echo "$row[5]<br>";?></span> 
                            </td>
                            <td style="background-color:red">
                                <span class="text"><?php echo "$row[1]<br>";?> </span> 
                            </td>
                            <td>
                                <span id="qty_left"><?php echo "$row[2]<br>";?></span>
                            </td>
                            <td>
                                <span class="text"><?php echo "$row[3]<br>";?> </span>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        </table>
                    </div>
        </body>
</html>