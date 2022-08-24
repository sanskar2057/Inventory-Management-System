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
                    margin-bottom: 1px;">DELETE PRODUCT:</h2>
          <!-- DELETE -->
          <div class="delete_item">
              <div class="content" id="delete">
                  <form action="deletePro.php" method="POST">

                <div style="margin-left: none; font-size:25px">
                    Select Categories:
                      <select name="category" id="category" style="margin-left:30px;" required>
                          <option value="" selected>Select Category</option>
                      <?php include "editPrice_process.php" ?>
                      </select><br>
                      </div>
                      <br />
                      <div>
                      <input name="delete" type="submit" value="GO" style="margin-left:130px;"/></div>
                  </form>
              </div>
          </div>
        </body>
  </html>