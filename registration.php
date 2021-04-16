<?php
    session_start();//resumes session

    //logs into data base
    $con=mysqli_connect('localhost', 'root', 'root');

    //this is selecting data base
    mysqli_select_db($con, 'grocery-soen287');

    $email=$_POST['email'];
    $pass=$_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $postal =$_POST['postal-code'];
    $province=$_POST['province'];
    $address=$_POST['address'];


    $s ="SELECT * from users where email='$email'";
    
    $result= mysqli_query($con, $s);
    $num=mysqli_num_rows($result);

    if($num==1){
        echo "user name taken";
    }else{
        $input=" INSERT INTO users( user_id, role, email, password, first_name, last_name, postal_code, province, address) 
        values('11', 'admin', '$email', '$pass', '$fname', '$lname', '$postal', '$province', '$address')";
        mysqli_query($con, $input);
        echo "registration worked";
    }