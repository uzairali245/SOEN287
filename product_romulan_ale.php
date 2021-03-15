<!DOCTYPE html>
<html lang="en">

<head>
    <title>Romulan Ale</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!--Orbitron-->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <!--Lato-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">

    <!--Roboto-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <!--Exo-->
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;700&display=swap" rel="stylesheet">

    <!--Main Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto:Roboto:ital,wght@0,500;1,500,1;600;1,700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="content-container">
        <section class="section-products content-without-footer">
            <?php include "includes/header.html"; ?>
            <div class="custom-row">

                <div class="colmn one-third">
                    <div>
                        &nbsp;
                    </div>
                </div>
                <div class="colmn one-third">
                    <div>
                        <img src="resources/img/interstellar-foods/romulan-ale.jpg" alt="product image">
                    </div>
                </div>

                <div class="colmn one-third">
                    <div class="product-info">

                        <div class="product-info-element">
                            <h3 id="manufacturer">Romulan Empire</h3>
                            <h3 id="product-name">Romulan Ale</h3>
                        </div>

                        <div class="product-info-element">
                            <h3 id="price-per-unit">73.69$ (6)</h3>
                        </div>

                        <div class="product-info-element">
                            <h3 id="price">73.69$</h3>
                        </div>



                        <div class="product-info-element">

                            <div class="colmn one-half qty">
                                <button class="button-circle minusButton" type="button" id="0" name="button">-</button>
                                <input type="text" name="qty" value="1" class="amount">
                                <button class="button-circle plusButton" type="button" id="0" name="button">+</button>
                            </div>

                            <div class="colmn one-half">
                                <button type="submit" id="0" class="bttn bttn-full cartButton"> Add to cart </button>
                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <div class="product-info-element">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">

                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            See more
                                        </button>
                                    </h5>

                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Classic beverage of the Romulan Empire, shipped straight from Romulus!
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="clearfix"></div>
        </section>



        <?php include "includes/footer.html"; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        var numOfProducts = document.getElementsByClassName("amount").length;
        var counterArray = new Array(numOfProducts);

        for (var i = 0; i < numOfProducts; i++)
            counterArray[i] = 1;

        // CART BUTTON 
        var cartButtons = document.querySelectorAll(".cartButton"); //array of all the cart buttons
        var cartButtonsLength = cartButtons.length;
        for (var i = 0; i < cartButtonsLength; i++) {
            cartButtons[i].onclick = function() {
                addToCart(this);
            }
        }

        function addToCart(button) { //what happens when add to cart is clicked
            var index = button.id;
            counterArray[index] = parseInt(document.getElementsByClassName("amount")[index].value);
        }

        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length;

        for (var i = 0; i < plusButtonsLength; i++) {
            plusButtons[i].onclick = function() {
                increment(this);
            }
        }

        function increment(button) {
            var index = button.id;
            counterArray[index]++;
            document.getElementsByClassName("amount")[index].value = counterArray[index];
        }

        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length;

        for (var i = 0; i < minusButtonsLength; i++) {
            minusButtons[i].onclick = function() {
                decrement(this);
            }
        }

        function decrement(button) {
            var index = button.id;
            if (counterArray[index] == 1)
                return;
            else
                counterArray[index]--;

            document.getElementsByClassName("amount")[index].value = counterArray[index];
        }
    </script>
</body>





</html>