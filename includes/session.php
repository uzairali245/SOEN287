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
            'product_id' => 8,
            'format' => 6,
            'qty' => 7
            ),
        array(
            'product_id' => 6,
            'format' => null,
            'qty' => 4
        ), //Pumpkin, null format - over inventory
        array(
            'product_id' => 5,
            'format' => null,
            'qty' => 3
        ),
        );
    }

    //$key = 0;
    //$val =  array(
        //'product_id'=> 2,
        //'format' => 500,
       // 'qty' => 3
       // )

    

   // $_SESSION["customercart"][1]['qty']

    //UPDATE FORMAT CART
    $qtyRepeat = 0;

    if (isset($_POST['format']) && !isset($_POST['qty'])){
        //Check if another with same product ID and format to which you want to change. 
        foreach($_SESSION["customercart"] as $key => &$val){
        if($val["product_id"]==$_POST['product_id'] && ($val["format"]==$_POST['format'] || is_null($val["format"]) )){
                $qtyRepeat +=$_SESSION["customercart"][$key]['qty'];
                unset($_SESSION["customercart"][$key]);
                break;
            }
        }

        foreach($_SESSION["customercart"] as $key => &$val){
            if($val["product_id"]==$_POST['product_id']){
                $_SESSION["customercart"][$key]['format'] = $_POST['format'];
                $_SESSION["customercart"][$key]['qty'] += $qtyRepeat;
            }
        }
    }


    //UPDATE QUANTITY CART
    if (isset($_POST['qty'])){
        foreach($_SESSION["customercart"] as $key => &$val){
        if($val["product_id"]==$_POST['product_id'] && isset($_POST['format']) && $val["format"]==$_POST['format']){ //use to check if item already in cart 
                $_SESSION["customercart"][$key]['qty'] = $_POST['qty'];
        }
        }
    }

    
    //ADD TO CART
    if(isset($_POST['qty']) && isset($_POST['chosenFormat']) && isset($_POST['product_id'])){
        $duplicate = false;
        
        foreach($_SESSION["customercart"] as $key => &$val){
             //ADD TO CART SAME ITEM- ONLY UPDATE QUANTITY
            if($val["product_id"]==$_POST['product_id'] && ($val["format"]==$_POST['chosenFormat'] || is_null($val["format"]) )){
                    $_SESSION["customercart"][$key]['qty'] += $_POST['qty'];
                    $duplicate = true; 
                    break;
                }            
        }

        if(!($duplicate)){
            $newProduct = array(
                'product_id' => $_POST['product_id'],
                'format' => $_POST['chosenFormat'],
                'qty' => $_POST['qty']
            );

            array_push($_SESSION['customercart'], $newProduct);
        }
  
    }


    //REMOVE ITEM CART
    //Check if variable set
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
    //3. Bad qty input  X


    // 1. Check if received post request --> isset
    // 2. Key-value pair


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