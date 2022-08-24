<?php
    include "header.php";

?>
       <div class="content" id="inventory">
          
          <table width="100%" id="inventory">
              <tr class="head">  
              <th>Product Id</th>
              <th>Date</th>
              <th>Categories</th>
              <th>Item</th>
              <th>Quantity Left</th>
              <th>Price (Rs) per piece</th>
              </tr>
              <tr>
              <?php
                  $sql= "SELECT * from inventory";
                  $qury=mysqli_query($con,$sql);
                  while($row=mysqli_fetch_array($qury)){?>
              <td class="edit_td">
                      <span class="text"> 
                      <?php echo "$row[0]<br>";?></span> 
                  </td>
                  <td>
                      <span class="text"> <?php echo "$row[4]<br>";?></span> 
                  </td>
                  <td>
                      <span class="text"><?php echo "$row[5]<br>";?> </span> 
                  </td>
                  <td>
                      <span id="qty_left"><?php echo "$row[1]<br>";?></span>
                  </td>
                  <td>
                      <span class="text"><?php echo "$row[2]<br>";?> </span>
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