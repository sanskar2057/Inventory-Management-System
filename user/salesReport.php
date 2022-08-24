<?php
    include "header.php";
?>
        <div class="content" id="inventory">          
            <table width="100%">
            <tr class="head">
            <th>Id</th>
            <th>Date</th>   
            <th>Category</th>
            <th>Product</th>
            <th>Sales</th>
            <th>Price</th>
            </tr>
            <?php
                if(isset($_POST['fromdate'])&& isset($_POST['todate']))
                {
                    $from=$_POST['fromdate'];
                    $until=$_POST['todate'];

                    $query="SELECT * FROM sales LEFT JOIN inventory ON sales.inv_id=inventory.inv_id WHERE sales.sales_date >= '$from' AND sales.sales_date <='$until'";
                    $sql=mysqli_query($con,$query);
                    
                    if(mysqli_num_rows($sql)>0){
                        foreach($sql as $row)
                        {    
                            ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['sales_date'];?></td>
                            <td><?php echo $row['category'];?></td>
                            <td><?php echo $row['item'];?></td>
                            <td><?php echo $row['sales'];?></td>
                            <td><?php echo $row['sales_price'];?></td>
                            
                        </tr>
                            <?php
                        }?>
                      
                    <?php 
                    }
                    else{
                        echo "No Records Found";
                    }
                }
            
            ?>
            </table>
            <span style="float:right; margin-right:30px; font-size:20px;">Total Sales: <?php include "totalsales.php"; ?></span>
        </div>
        
        <script>
    function createPDF() {
        var sTable = document.getElementById('inventory').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

       
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<title>Sales Report</title>'); 
        win.document.write('css');      
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);    
        win.document.write('</body></html>');

        win.document.close(); 	

        win.print();  
    }
    </script>
    <input type="button" value="Create PDF" id="btPrint" onclick="createPDF()"/> 
            </body>
</html>