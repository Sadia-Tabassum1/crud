<?php
$dbName = "php_crud";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn) {
    
    die("Connection Successfull");
    {
        die(mysqli_error($conn));
    }
    
}
?>