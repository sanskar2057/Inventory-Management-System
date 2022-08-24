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
        margin-bottom: 1px;">ADD USER:</h2>
       <div class="content" id="adduser">
            <form action="adduser_process.php" method="POST">
            <div style="font-size: 25px;">
                Fullname:<input name="fullname" type="text" style="margin-left:15px;"required/>
                </div>
                <br />
            <div style="font-size: 25px;">
                Username:<input name="username" type="text" style="margin-left:5px;"required/>
                </div>
                <br />
                <div style="font-size: 25px;">
                Password:<input name="password" type="password" style="margin-left:12px;"required />
                </div>
                <br />
                <!-- <div style="margin-left: 100px;">
                Sold:<input name="sold" type="number" />
                </div> -->
                <div style="margin-left: 182px; margin-top: 14px;"><input type="submit" value="Add" name="add_user" /></div>           
             </form>
        </div>
    </body>
</html>