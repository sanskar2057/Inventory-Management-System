<?php
    include "../connection.php";
?>
<?php
session_start();
unset($_SESSION["username"]);

header("Location:../index.php");
?>