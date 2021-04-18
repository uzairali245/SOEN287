<?php
    session_start(); //resumes session
    include "includes/dbc.php";


    //logs into data base

    //this is selecting data base

    $email=$_POST['email'];
    $pass=$_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $postal =$_POST['postal-code'];
    $province=$_POST['province'];
    $address=$_POST['address'];
    


    $s ="SELECT * from users where email='$email'";
    $result= mysqli_query($conn, $s);
    $num=mysqli_num_rows($result);
    //above finds doublicate user

    if($num==1){
        header("Location: signup.php?signup=error");
        exit();
    }else{
 
        //finds number of rows amd adds unqiue id
        $a = "SELECT * from users";
        $rows = mysqli_query($conn, $a);
        $num = mysqli_num_rows($rows)+1;

        //creates new user 
        $input=" INSERT INTO users( user_id, role, email, password, first_name, last_name, postal_code, province, address) 
        values('$num', 'client', '$email', '$pass', '$fname', '$lname', '$postal', '$province', '$address')";
        mysqli_query($conn, $input);

        //creates session variable
        $_SESSION["user"]=array(
        'id' => mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE email='$email'"))["id"],
        'role'=> 'client'
        );
        header('Location:homepage.php');
        exit();
    }