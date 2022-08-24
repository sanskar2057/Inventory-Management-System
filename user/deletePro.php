<?php
    include "connection.php";
    include "header.php";
?>
<?php
    include "footer.php";
?>

          <!-- DELETE -->
          <div class="delete_item">
              <div class="content" id="delete">
                  <form action="delete_process.php" method="post">
                  <h2 style="color: black;
                    font-family: arial, sans-serif;
                    font-size: 30px;
                    font-weight: bold;
                    margin-top: 0px;
                    margin-bottom: 1px;">DELETE PRODUCT:</h2>
                <div style="margin-left: none; font-size:25px">
                    Select Product:
                      <select name="product" id="product" style="margin-left:30px;" required>
                          <option value="" selected>Select Product</option>
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
                      <input name="delete" type="submit" value="GO" style="margin-left:130px;"/></div>
                  </form>
              </div>
          </div>

        
              </body>
  </html>

