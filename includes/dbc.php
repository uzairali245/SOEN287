<?php
    // Will have to change this information when connecting to webhost 
    $dbServername = "localhost:8889"; // You may have to change this
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "grocery-soen287"; 

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
?>