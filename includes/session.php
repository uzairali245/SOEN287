<?php
    session_start();

    //--- When tests are done uncomment below ---//


    //- INITIALIZE CART IF DOESN'T EXIST -//

    //if (!isset($_SESSION["customercart"])) {
    //    $_SESSION["customercart"] = array();
    // }

    if (!isset($_SESSION["customercart"])){
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
            'qty' => 4
        ), //Pumpkin, null format - over inventory
        );
    }

    //UPDATE FORMAT CART
    if (isset($_POST['format'])){
        foreach($_SESSION["customercart"] as $key => &$val){
        if($val["product_id"]==$_POST['product_id']){
                $_SESSION["customercart"][$key]['format'] = $_POST['format'];
                console.log("updated format yay");
        }
        }
    }

    //UPDATE QUANTITY CART
    if (isset($_POST['qty'])){
        foreach($_SESSION["customercart"] as $key => &$val){
        if($val["product_id"]==$_POST['product_id'] && $val["format"]==$_POST['format']){
                $_SESSION["customercart"][$key]['qty'] = $_POST['qty'];
        }
        }
    }

    //REMOVE ITEM CART
    if (isset($_POST['remove'])){
        foreach($_SESSION["customercart"] as $key => &$val){
        if($val["product_id"]==$_POST['product_id'] && $val["qty"]==$_POST['qty']){
               unset($_SESSION["customercart"][$key]); 
        }
        }
    }

    //CLEAR CART
   // if (isset($_GET['empty'])) {
       // $_SESSION['customercart']= array();
   // }

    //ADD TO CART POSSIBILITIES
    //1. New item
    //2. Item with same format already in cart - update qty
    //3. Bad qty input 


    //QTY SENT VALIDATION INPUT (greater than 0 and a integer)
    /*
    if ($qty > 0 && filter_var($qty, FILTER_VALIDATE_INT)){
        if(isset($_SESSION['customercart]['product_id'])){
            //update qty
        } else {
            //add new item to cart
        }

    } else {

    }
    */

        //--- For add to cart potentially ---//
        //array_push($_SESSION['customercart'], $_GET[])

    //if (isset($_GET['customercart'])) {$_SESSION['customercart'][1] = $_GET['customercart'];}


   

  //$_SESSION['customercart'][1] = $_POST['format'];

?>