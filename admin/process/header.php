<?php
    session_start();
    include "connection.php";
?>
<html>
    <head>
        <title>IMS</title>
        
        <!-- <link rel="stylesheet" href="style.css"> -->
        <style>
            * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-color: #dedede;
}
input[type=submit]{
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 10px 27px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=button]{
   
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 10px 27px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
        
}
input{
    border: none;
    color: black;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
}
select {
    
    width: 100%;
    min-width: 15ch;
    max-width: 30ch;
    border: 1px solid var(--select-border);
    border-radius: 0.25em;
    padding: 0.1em 0.5em;
    font-size: 1.25rem;
    cursor: pointer;
    line-height: 1.1;
    background-color: #fff;
    background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
}
#inventory {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#inventory td, #inventory th {
border: 1px solid #ddd;
padding: 8px;
}

#inventory tr:nth-child(even){background-color: #f2f2f2;}

#inventory tr:hover {background-color: #ddd;}

#inventory th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
}
a {
    text-decoration: none;
}
li {
    list-style: none;
}
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-color: teal;
    color: #fff;
}
.nav-links a {
    color: #fff;
}

.logo {
    font-size: 42px;
}

.menu {
    display: flex;
    gap: 1em;
    font-size: 22px;
}
.menu li:hover {
    background-color: #4c9e9e;
    border-radius: 5px;
    transition: 0.3s ease;
}
.menu li {
    padding: 5px 14px;
}

.services {
    position: relative; 
}
.dropdown {
    background-color: rgb(1, 139, 139);
    padding: 1em 0;
    position: absolute; 
    display: none;
    border-radius: 8px;
    top: 35px;
}
.dropdown li + li {
    margin-top: 10px;
}
.dropdown li {
    padding: 0.5em 1em;
    width: 8em;
    text-align: center;
}
.dropdown li:hover {
    background-color: #4c9e9e;
}
.services:hover .dropdown {
    display: block;
}
input[type=checkbox]{
    display: none;
} 

.hamburger {
    display: none;
    font-size: 24px;
    user-select: none;
}

@media (max-width: 768px) {
    .menu { 
        display:none;
        position: absolute;
        background-color:teal;
        right: 0;
        left: 0;
        text-align: center;
        padding: 16px 0;
    }
    .menu li:hover {
        display: inline-block;
        background-color:#4c9e9e;
        transition: 0.3s ease;
    }
    .menu li + li {
        margin-top: 12px;
    }
    input[type=checkbox]:checked ~ .menu{
        display: block;
    }
    .hamburger {
        display: block;
    }
    .dropdown {
        left: 50%;
        top: 30px;
        transform: translateX(35%);
    }
    .dropdown li:hover {
        background-color: #4c9e9e;
    }
}

        </style>
    </head>
    <body>

        
        <nav class="navbar">
        <div class="logo"><a style="text-decoration:none;color:inherit;">IMS</a></div>
            
            
            <ul class="nav-links">
            
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            
            <div class="menu">
                <li class="services"><a href="../usermgmt/userReport.php">User Management</a>
                    <ul class="dropdown">
                        <li><a href="../usermgmt/adduser.php">Add User</a></li>
                        <li><a href="../usermgmt/deleteUser.php">Remove User</a></li>
                    </ul>
                </li>
                <li><a href="../process/table.php">Inventory</a></li>
                <li><a href="../process/sales.php">Sales</a></li>
                <li><a href="../process/tobeorder.php">To Order</a></li>
                <li class="services">
                    <a href="#">Edit</a>
                    <ul class="dropdown">
                        <li><a href="../process/editPrice.php">Edit Price</a></li>
                        <li><a href="../process/delete.php">Delete</a></li>
                    </ul>
                </li>
                <li><a href="../process/addProduct.php">Add Product</a></li>
                <li><a href="../process/addItem.php">Add Quantity</a></li>
                <li><a href="../../login/logout.php">Log Out</a></li>
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