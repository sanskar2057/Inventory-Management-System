<?php
    include "../process/header.php";
?>

        <div class="content" id="inventory">
          
            <table width="100%" id="inventory">
            <tr class="head">
            <th>User Id</th>
            <th>Added Date</th>
            <th>Full Name</th>
            <th>Username</th>
            </tr>
            <?php
                $sql= "SELECT * from user";
                $qury=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($qury)){
            ?>
            <tr>
            <td class="edit_td">
                    <span class="text"> <?php  echo "$row[0]<br>";?></span> 
                </td>
                <td class="edit_td">
                    <span class="text"> <?php  echo "$row[4]<br>";?></span> 
                </td>
                <td>
                    <span class="text"><?php  echo "$row[1]<br>";?> </span> 
                </td>
                <td>
                    <span id="qty_left"><?php echo "$row[2]<br>";?></span>
                </td>
            </tr>
            <?php
                }
            ?>    
            </table>
        </div>
    </body>
</html>