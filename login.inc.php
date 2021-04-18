<?php
    session_start(); //resumes session
    include "includes/dbc.php";

    $email = $_POST['email'];
    $pass = $_POST['password'];

    //queries for multiple occurences of the specific email
    $result=mysqli_query($conn,"SELECT email FROM users WHERE email='$email'AND password='$pass'");
    $num=mysqli_num_rows($result);

    if ($num==1){
        $_SESSION["user"]=array(
        'id' => mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE email='$email'"))["id"],
        'role' => mysqli_fetch_assoc(mysqli_query($conn, "SELECT role FROM users WHERE email='$email'"))["role"],
        );

        if(isset($_SESSION['customercart'])){
            header("location: shopping-cart.php");
        } else {
            header("location: homepage.php");
        }   
        
    }else{
        header("location: login.php?login=invalidlogin");
    }
