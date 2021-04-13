<?php
    session_start();

    $_SESSION["customercart"] = array(
        array(
            'product_id'=> 2,
            'format' => 500,
            'qty' => 3
        ), //Strawberry
        array(
            'product_id' => 8,
            'format' => 12,
            'qty' => 4
        ), //Roma Tomatoes
        array(
            'product_id' => 6,
            'format' => null,
            'qty' => 4) //Pumpkin, null format - over inventory
        );

    //if (isset($_GET['customercart'])) {$_SESSION['customercart'][1] = $_GET['customercart'];}

    //Not functional yet
   // if ($_POST['format']){
        //foreach($_SESSION["customercart"] as $key => &$val){
            //if($val["product_id"]==$_POST['product_id']){
                //$_SESSION["customercart"][$key]['format'] = $_POST['format'];
           // }
       // }
    //}

  //$_SESSION['customercart'][1] = $_POST['format'];

?>