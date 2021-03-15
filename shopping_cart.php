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
        .amount {
            float: left;
            width: 20px;
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

                    <div class="cart-item" id="cart0">

                        <a href="product_original.php"><img class="cart-element" src="resources/img/veg-fruit/blueberry.jpg" alt="product image"></a>

                        <div class="mobile-wrapper">
                            <div class="cart-element item-descrpt">
                                <a href="product_original.php">
                                    <h3 id="manufacturer">Earth co.</h3>
                                    <h3 id="product-name">Wild Blueberries</h3>
                                    <a>
                                        <h3 id="price-per-unit0">$18.99/100g</h3>
                                        <form action="/action_page.php">
                                            <select name="format" class="productFormat" id="productFormat0" onChange="updateFormatPrice(0)" data-initial="100">
                                                <option value="100">100g</option>
                                                <option value="250">250g</option>
                                                <option value="500">500g</option>
                                            </select>
                                        </form>
                            </div>

                            <div class="cart-element qty">
                                <button class="button-circle minusButton" type="button" id="0" name="button">-</button>
                                <span class="amount" id="amount0">1</span>
                                <button class="button-circle plusButton" type="button" id="0" name="button">+</button>
                                <!--<a href="#" class="bttn-circle col one-third">-</a>
                                <h5 class="col one-third">1</h5> 
                                <a href="#" class=" col one-third bttn-circle">+</a>-->
                            </div>
                        </div>

                        <div class="cart-element total-price-item">
                            <h3 class="total-price-item" id="total-price-item0">$18.99</h3>
                        </div>

                        <button href="#" class="delete-item-bttn" type="button" onClick="removeItem('#cart0')">x</button>



                    </div>

                    <div class="cart-item" id="cart1">

                        <a href="#"><img class="cart-element" src="resources/img/snacks/dark_chocolate_square.jpg" alt="Dark Chocolate"></a>
                        <div class="mobile-wrapper">
                            <div class="cart-element item-descrpt">
                                <a href="">
                                    <h3 id="manufacturer">Cacao Pow</h3>
                                    <h3 id="product-name">Dark Chocolate</h3>
                                </a>
                                <h3 id="price-per-unit1">$3.10/100g</h3>
                                <form action="/action_page.php">
                                    <select name="format" class="productFormat" id="productFormat1" onChange="updateFormatPrice(1)" data-initial="100">
                                        <option value="100">100g</option>
                                        <option value="250">250g</option>
                                    </select>
                                </form>
                            </div>


                            <div class="cart-element qty">
                                <button class="button-circle minusButton" type="button" id="1" name="button">-</button>
                                <span class="amount" id="amount1">1</span>
                                <button class="button-circle plusButton" type="button" id="1" name="button">+</button>
                                <!--<a href="#" class="bttn-circle col one-third">-</a>
                                <h5 class="col one-third">1</h5> 
                                <a href="#" class=" col one-third bttn-circle">+</a>-->
                            </div>
                        </div>

                        <div class="cart-element total-price-item">
                            <h3 class="total-price-item" id="total-price-item1">$3.10</h3>
                        </div>

                        <button href="#" class="delete-item-bttn" type="button" onClick="removeItem('#cart1')">x</button>



                    </div>

                    <div class="cart-item" id="cart2">

                        <a href="#"><img class="cart-element" src="resources/img/bakery/bakery-ciabatta2-square.jpg" alt="product image"><a>

                                <div class="mobile-wrapper">
                                    <div class="cart-element item-descrpt">
                                        <a href="#">
                                            <h3 id="manufacturer">Olympus Hearth</h3>
                                            <h3 id="product-name">Ciabatta</h3>
                                        </a>
                                        <h3 id="price-per-unit2">$7.00/unit</h3>
                                    </div>

                                    <div class="cart-element qty">
                                        <button class="button-circle minusButton" type="button" id="2" name="button">-</button>
                                        <span class="amount" id="amount2">1</span>
                                        <button class="button-circle plusButton" type="button" id="2" name="button">+</button>
                                        <!--<a href="#" class="bttn-circle col one-third">-</a>
                                <h5 class="col one-third">1</h5> 
                                <a href="#" class=" col one-third bttn-circle">+</a>-->
                                    </div>
                                </div>

                                <div class="cart-element total-price-item">
                                    <h3 class="total-price-item" id="total-price-item2">$14.00</h3>
                                </div>

                                <button href="#" class="delete-item-bttn" type="button" onClick="removeItem('#cart2')">x</button>



                    </div>
                </div>

                <div class="colmn one-third order-summary" id="order-summary">
                    <div class="custom-row cart-header">Order Summary</div>
                    <div>
                        <div class="colmn one-half">
                            <div class="price-descriptors">
                                <p id="cartcount1">3 items</p>
                                <p>Shipping</p>
                                <p>GST</p>
                                <p>QST</p>

                                <p class="cart-total">TOTAL</p>
                            </div>
                        </div>
                        <div class="colmn one-half">
                            <div class="price-list">
                                <p id="cart-subtotal"></p>
                                <p id="shipping-cost">$5.00</p>
                                <p id="cart-gst"></p>
                                <p id="cart-qst">$3.60</p>

                                <p class="cart-total" id="cart-total">$46.49</p>
                            </div>

                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="center"><button type="submit" class="long-bttn" onclick="window.location.href='/SOEN287/checkout.php'"> Order Now </button></div>



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
        // Custom JS
        var cart_count = 3;
        var init_cart_count = 3;
        var deletedItems = [];
        var storedDeletedItems = JSON.parse(localStorage.getItem('deletedItems'));
        var formatValues = {};
        var storedFormatValues = JSON.parse(localStorage.getItem('formatValues'));


        calculateCartSubtotal();

        if (storedDeletedItems) {
            console.log(JSON.parse(localStorage.getItem('deletedItems')));
            for (let k = 0; k < storedDeletedItems.length; k++){
                    removeItem(storedDeletedItems[k]);
            }
        }

        if (storedFormatValues) {
            console.log(JSON.parse(localStorage.getItem('formatValues')));
            for (let r = 0; r < Object.keys(storedFormatValues).length; r++){
                    var key = Object.keys(storedFormatValues)[r]; 
                    let index = key.substr(13);
                    let value = parseInt(storedFormatValues[key])
                    formatValues[key]= value;
                    let myElem = document.getElementById(key)
                    if (myElem === null) {
                        continue;
                    }
                    document.getElementById(key).value = value ;
                    updateFormatPrice(index);
            }
        }

        //REMOVE CART ITEM
        function removeItem(item) {
            
            var elem = document.querySelector(item);
            elem.remove();
            cart_count = cart_count - 1;
            updateCartCount();
            calculateCartSubtotal();
            deletedItems[deletedItems.length] = item.toString();
            localStorage.setItem('deletedItems', JSON.stringify(deletedItems));


            //DISPLAY WHEN CART EMPTY
            if (cart_count == 0) {
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
        }


        function updateCartCount() {
            var elem0 = document.querySelector('#cartcount0');
            var elem1 = document.querySelector('#cartcount1');

            elem0.textContent = cart_count + " items";
            elem1.textContent = cart_count + " items";
        }


        function updateFormatPrice(index) {
            var price = document.getElementById("price-per-unit" + index).innerHTML.substring(1).split('/')[0];
            var identifier = "productFormat"+index
            var format = document.getElementById(identifier).value;
            var defaultFormat = document.getElementById(identifier).getAttribute("data-initial");
            var amount = document.getElementById("amount" + index).innerHTML;
            formatValues[identifier]=parseInt(format);
            localStorage.setItem('formatValues', JSON.stringify(formatValues));

            price = price * (format / defaultFormat) * amount;

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
        var counterArray = [1,1,1]; //try not to have it hard coded later (to fix!) 1.find span amount 2. initialize array to that amount 3.insert 1 to entire array
        var amountArray = document.getElementsByClassName("amount");
        console.log(amountArray);


        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton");
        var plusButtonsLength = plusButtons.length; //3 for now
        console.log(plusButtonsLength);

        for (var i = 0; i < plusButtonsLength; i++) {
            plusButtons[i].onclick = function() {
                increment(this);
            }
        }

        function increment(button) {
            var index = button.id;
            counterArray[index]++;
            amountArray[index].textContent = counterArray[index];
            updateFormatPrice(index);
        }

        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length; //3 for now

        for (var i = 0; i < minusButtonsLength; i++) { //THIS WORKS
            minusButtons[i].onclick = function() {
                decrement(this);
            }
        }

        function decrement(button) {
            console.log(counterArray); //it exists here
            var index = button.id;
            console.log(counterArray[index]);
            if (counterArray[index] == 1)
                return;
            else
                counterArray[index]--;

            amountArray[index].textContent = counterArray[index];
            updateFormatPrice(index);
        }

        var rememberSize = document.querySelectorAll(".amount").length;
        for (i = 0; i < rememberSize; i++) {

        }
    </script>
</body>


</html>