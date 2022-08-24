<?php
    session_start();
    include "connection.php";
?>
<html>
    <head>
        <title>IMS</title>
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        
        <nav class="navbar">
        <div class="logo"><a href="table.php" style="text-decoration:none;color:inherit;">IMS</a></div>
            
            
            <ul class="nav-links">
            
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            
            <div class="menu">
                <li><a href="table.php">Inventory</a></li>
                <li><a href="sales.php">Sales</a></li>
                <li><a href="tobeorder.php">To Order</a></li>
                
                <li class="services">
                    <a href="#">Edit</a>
            
                <ul class="dropdown">
                    <li><a href="editPrice.php">Edit Price</a></li>
                    <li><a href="delete.php">Delete</a></li>
                </ul>
                </li>
                <li><a href="addProduct.php">Add Product</a></li>
                <li><a href="addItem.php">Add Quantity</a></li>
                <li><a href="../login/logout.php">Log Out</a></li>
                </div>
            </ul>
        </nav>
        
        <div id="message">
                <?php
                    if(isset($_SESSION['status'])){
                        echo $_SESSION['status'];
                        unset($_SESSION['status']);
                    }
                ?>
        </div>