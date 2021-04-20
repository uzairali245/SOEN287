<?php
    session_start(); //resumes session

    if ((isset($_SESSION['user'])) && ($_SESSION['user']['role'] == "admin")){ 
        header("location: backstore/dashboard.php");
    } else {
        header("location: homepage.php");
    }
?>        