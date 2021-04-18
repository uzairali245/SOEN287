<?php include "includes/session.php"; ?>

<!DOCTYPE html>
<html>

<head>

    <title>Shopping Cart</title>
    <meta name="author" content="Anne Bastien">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!--Orbitron-->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <!--Lato-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">

    <!--Exo-->
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        .quantity {
            float: left;
            width: 20px;
        }

        .contShop {
            font-size: 100%;
            background-color: rgba(0,0,0,0);
            border: 1px solid white;
            margin-top: 10px;
        }
    </style>

</head>

<body>
    <!--HEADER-->
    
    
    <div class="content-container">

        <section class="section-cart content-without-footer">
            <?php include "includes/header.html"; ?>
            <div class="custom-row" id="cart-title">
                <h2>My Cart</h2>
            </div>

            <div class="custom-row">
                <div class="empty-cart-container">
                    <div id="empty-cart"></div>
                    <h2 id="empty-cart-text"></h2>
                </div>
                <div class="colmn two-third cart-list" id="cart-list">
                    <div class="cart-header" id="cartcount0">3 items</div>

                <?php

                    include "includes/dbc.php"; 
                    $nbItemsInCart =  sizeof($_SESSION["customercart"]);

                    $cartnb = 0;

                    echo '  <script> 
                    

                    function updateFormatPrice(index){
                        
                        var price = document.getElementById("price-per-unit" + index).innerHTML.substring(1).split("/")[0];
            
                       
                        console.log(price);
                        var identifier = "productFormat"+index;
                        var format = document.getElementById(identifier);
                        var defaultFormat = null;
                        if (format) {
                            format = format.value;
                            defaultFormat = document.getElementById(identifier).getAttribute("data-initial");
                        }
                        
                        var quantity = document.getElementById("quantity" + index).value;
            
                        if (format != null){
                            price = price * (format / defaultFormat) * quantity;
                        } else {
                            price = price * quantity;
                        }
            
            
                        document.getElementById("total-price-item" + index).innerHTML = "$" + price.toFixed(2);
            
                        calculateCartSubtotal();
                    }
                    
                    //CALCULATE CART COST BREAKDOWN
                    function calculateCartSubtotal() {
                        let subtotal = 0.0;
                        let shippingCost = parseFloat(document.getElementById("shipping-cost").innerHTML.substring(1));
            
                        for (i = 0; i < init_cart_count; i++) {
                            let myElem = document.getElementById("total-price-item" + i)
                            if (myElem === null) {
                                continue;
                            }
                            subtotal += parseFloat(document.getElementById("total-price-item" + i).innerHTML.substring(1));
                        }
            
                        let gst = subtotal * 0.05;
                        let qst = subtotal * 0.09975;
            
                        let total = subtotal + gst + qst + shippingCost;
            
                        document.getElementById("cart-subtotal").innerHTML = "$" + subtotal.toFixed(2);
            
                        document.getElementById("cart-gst").innerHTML = "$" + gst.toFixed(2);
            
                        document.getElementById("cart-qst").innerHTML = "$" + qst.toFixed(2);
            
                        document.getElementById("cart-total").innerHTML = "$" + total.toFixed(2);
            
                    }

                    function updateDelivery() {

                        var shipChoice = document.getElementById(\'shipping-choice\').value;
                
                        if (shipChoice === \'0\') {
                            document.getElementById(\'shipping-choice\').value = 0;
                            document.getElementById("shipping-cost").innerHTML = "$" + parseFloat(0).toFixed(2);
                        } else if (shipChoice === \'5\') {
                            document.getElementById(\'shipping-choice\').value = 5;
                            document.getElementById("shipping-cost").innerHTML = "$" + parseFloat(5).toFixed(2);
                        } else if (shipChoice === \'10\') {
                            document.getElementById(\'shipping-choice\').value = 10;
                            document.getElementById("shipping-cost").innerHTML = "$" + parseFloat(10).toFixed(2);
                        }
                
                        calculateCartSubtotal();
                    }
                </script>';

                   

                    foreach ($_SESSION["customercart"] as $item){

                        $productId = $item['product_id'];
                        $format = $item['format'];
                        $qty = $item['qty'];
                        
                        $result = mysqli_query($conn, "Select * from products where product_id = $productId;");
                        
                        if (!$result) {
                            echo 'Could not find product: ' . mysql_error();
                            exit;
                        } else {
                            //echo "fetched!";
                        }
                        $row = mysqli_fetch_assoc($result);

                       
                            $formatArr = explode("/",$row['format']);

                        //TO ADD TO CODE:
                        //<input type='hidden' name='product_id' id='product_id{$row['product_id]}' value='{$row['product_id]}'>
                     
                        
                        echo "<div class='cart-item' id='cart{$cartnb}'>

                            <a href='product_original.php'><img class='cart-element' src='{$row['image']}' alt='product image'></a>

                            <div class='mobile-wrapper'>
                                <div class='cart-element item-descrpt'>
                                    <a href='product_original.php'>
                                        <h3 id='manufacturer{$cartnb}'>{$row['manufacturer']}</h3>
                                        <h3 id='product-name{$cartnb}'>{$row['name']}</h3>
                                        <h3 hidden id='product_id{$cartnb}'>{$row['product_id']}</h3>
                                        <a>
                                            <h3 id='price-per-unit{$cartnb}'>\${$row['price']}/{$formatArr[0]}{$row['unit']}</h3>";
                                            
                                            if(!is_null($row['format'])){
                                            echo " 
                                            <form action=\"\" method=\"post\">
                                                <input hidden type=\"text\"  name=\"product_id\" value={$row['product_id']}>
                                                <select name='format' class='productFormat' id='productFormat{$cartnb}' onload ='updateFormatPrice({$cartnb})' onchange = updateFormatPrice({$cartnb}) oninput='this.form.submit()' data-initial=$formatArr[0]>";  
                                            }
                                            if(!is_null($row['format'])){
                                                    foreach ($formatArr as $formats){
                                                        if ($formats == $format){
                                                            echo "<option selected value=$formats>{$formats}g</option>";
                                                        } else {
                                                            echo "<option value=$formats>{$formats}g</option>";  
                                                        }
                                                    }
                                            }
                                            if(!is_null($row['format'])){
                                               echo " </select>
                                            </form>";  
                                            }
                                echo "
                                </div>

                                <div class='cart-element qty'>
                                    <form action=\"\" method=\"post\">
                                    <button class='button-circle minusButton' type='submit' id='{$cartnb}' name='buttonDec' onClick='decrement({$cartnb})'>-</button>
                                    <input type=\"text\" name=\"qty\" class='quantity' id='quantity{$cartnb}' value=\"{$qty}\" onLoad ='checkQuantity({$cartnb})' onChange='checkQuantity({$cartnb});this.form.submit()' >
                                    <input hidden type=\"text\"  name=\"product_id\" value={$row['product_id']}>
                                    <input hidden type=\"text\"  name=\"format\" value={$format}>
                                    <button class='button-circle plusButton' type='submit' id='{$cartnb}' name='buttonInc' onClick='increment({$cartnb})'>+</button>
                                    </form>
                                    <p hidden id=\"inventory{$cartnb}\">{$row['inventory']}</p>
                                    <!--<a href='#' class='bttn-circle col one-third'>-</a>
                                    <h5 class='col one-third'>1</h5> 
                                    <a href='#' class='col one-third bttn-circle'>+</a>-->
                                </div>
                            </div>

                            <div class='cart-element total-price-item'>
                                <h3 class='total-price-item' id='total-price-item{$cartnb}'></h3>
                            </div>

                            <form action=\"\" method=\"post\">
                            <input hidden type=\"text\"  name=\"product_id\" value={$row['product_id']}>
                            <input hidden type=\"text\"  name=\"qty\" value={$qty}>
                            <button href='#' name='remove' value = 'true' class='delete-item-bttn'  onClick='this.form.submit()')\">x</button>
                            
                            </form>
                           



                        </div> ";
                        echo "<script> updateFormatPrice({$cartnb}); updateDelivery();</script>";

                        $cartnb++;
                }
                ?>
                </div>

                <div class="colmn one-third order-summary" id="order-summary">
                    <div class="custom-row cart-header">Order Summary</div>
                    <div>
                        <div class="colmn one-half">
                            <div class="price-descriptors">
                                <p id="cartcount1">3 items</p>
                                <p>
                                <form action="checkout.php" method="post">
                                <select class = 'productFormat' name='shipping' id = 'shipping-choice' onchange=updateDelivery()>
                                    <option selected value='0'>Free Delivery</option>
                                    <option value='5'>Express Delivery</option>
                                    <option value='10'>Same Day Delivery</option>
                                </select>
                                </p>
                                <p>GST</p>
                                <p>QST</p>

                                <p class="cart-total">TOTAL</p>
                            </div>
                        </div>
                        <div class="colmn one-half">
                            <div class="price-list">
                                <p id="cart-subtotal"></p>
                                <p id="shipping-cost">$0.00</p>
                                <p id="cart-gst"></p>
                                <p id="cart-qst">$3.60</p>

                                <p class="cart-total" id="cart-total">$46.49</p>
                            </div>

                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="center"><button type="submit" class="long-bttn" onclick="this.form.submit()"> Order Now </button></div>
                    <div class="center"><button class="long-bttn contShop" onclick="window.location.href='/SOEN287/homepage.php'"> Continue Shopping </button> </div>
                    <form>


                </div>

            </div>
            <div class="clearfix"></div>
        </section>



        <!--FOOTER-->
        <?php include "includes/footer.html"; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
    //var cart_count = <?php echo sizeof($_SESSION['customercart']);?>;
    var init_cart_count = <?php echo sizeof($_SESSION['customercart']);?>;

    calculateCartSubtotal();

    //DISPLAY WHEN CART EMPTY
        if (<?php echo sizeof($_SESSION['customercart']);?> == 0) {
        let orderSummary = document.getElementById("order-summary");
        let cartList = document.getElementById("cart-list");
        orderSummary.remove();
        cartList.remove();

        let cartTitle = document.getElementById("cart-title");
        cartTitle.remove();

        var img = document.createElement("img");

        img.src = "resources/img/lonely_in_space.jpg";
        img.alt = "lonely in space";
        var src = document.getElementById("empty-cart");

        src.appendChild(img);

        var theDiv = document.getElementById("empty-cart-text");
        var content = document.createTextNode("Fill the void inside... with a snack");
        theDiv.appendChild(content);

    }

    //Updates Cart Count when an item is added or deleted.
    function updateCartCount() {
            var elem0 = document.querySelector('#cartcount0');
            var elem1 = document.querySelector('#cartcount1');

            elem0.textContent = <?php echo sizeof($_SESSION['customercart']);?> + " items";
            elem1.textContent = <?php echo sizeof($_SESSION['customercart']);?> + " items";
        }

    //INCREMENT
    function increment(index) {
        quantity = parseInt(document.getElementById('quantity'+index).value);

        if(checkQuantity(index)){
            document.getElementById('quantity'+index).value = quantity + 1;
        } 
        //let inventory = document.getElementById("inventory"+index).innerHTML;
           // if (quantity == inventory) {
           //     confirm("Ouf... I hope that next shipment is coming in soon.");
           // } else {
            //    document.getElementById('quantity'+index).value = quantity + 1;
          //  }
        
        updateFormatPrice(index);
    }

    //DECREMENT
    function decrement(index) {

            quantity = parseInt(document.getElementById('quantity'+index).value);
            if (quantity != 1){
                document.getElementById('quantity'+index).value = quantity - 1;
            }
          
            updateFormatPrice(index);
        }

        var rememberSize = document.querySelectorAll(".amount").length;
        for (i = 0; i < rememberSize; i++) {

    }

    function checkQuantity(index) {
   
        let quantity = parseInt(document.getElementById('quantity'+index).value);
        let inventory = document.getElementById("inventory"+index).innerHTML;
        let formatItem = document.getElementById('productFormat'+index);
        let hasAFormat = false;
        
        if (formatItem != null) {
            formatItem = parseInt(formatItem.value);
            quantity *= formatItem;
            hasAFormat = true;
        }

        if (quantity > inventory) {
            confirm("Ouf... I hope that next shipment is coming in soon.");
            if (hasAFormat){
                let newQty = parseInt(inventory / format);
                    document.getElementById('quantity'+index).value = parseInt(inventory / formatItem);
            } else {
                document.getElementById('quantity'+index).value = inventory;
            }
            return false;
        } else if (quantity<=0){
            document.getElementById('quantity'+index).value = 1;
            return false;
        } else {
            return true;
        }

    }

    

    updateCartCount();

    </script>
  


</body>


</html>