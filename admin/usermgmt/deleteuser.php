<?php
    include "../process/header.php";
?>
<?php
    include "footeruser.php";
?>
        <h2 style="color: black;
        font-family: arial, sans-serif;
        font-size: 30px;
        font-weight: bold;
        margin-top: 0px;
        margin-bottom: 1px;">REMOVE USER:</h2>
       <div class="content" id="deleteuser">
            <form action="deleteuser_process.php" method="post">
                <div style="font-size: 25px;">
                Select User:
                <select name="username" id="username" required style="margin-left:30px;" >
                    <option value="">Select User</option>
                   <?php                         
                        
                        $sql= "SELECT DISTINCT username from user";
                        $qury=mysqli_query($con,$sql);
                        $options="";
                        while($row=mysqli_fetch_array($qury)){
                            $options=$options."<option>$row[username]</option>";
                            
                        }
                        echo "$options"; ?>

                </select><br>
                </div>
                <br />
                <!-- <div style="font-size: 25px;">
                Quantity:<input name="itemnumber" type="number" style="margin-left:30px;" /></div><br /> -->
                <div style="margin-left:130px; margin-top: 14px; ">
                <input name="add" type="submit" value="Delete"/></div>
            </form>
        </div>
       

       </body>
</html>