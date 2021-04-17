<?php include "includes/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Snacks Aisle</title>
    <!-- favicon <link rel="icon" href="includes/favicon.png?"/> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">

    <!--link to stylesheet -->
    <link rel="stylesheet" href="resources\css\style.css">


</head>
<style>
    /* Custom CSS */

    img {
        max-height: 250px;
        max-width: 320px;
        width: 250px;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
    }

    .aisle-item {
        margin: 10px 20px;
    }

    .h4 {
        font-size: 100%;
    }
</style>

<body>
    <?php include "includes/header.html";
          include "includes/dbc.php";
    ?>


    <!--CONTENTS OF PAGE STARTS HERE-->
    <div class="custom-page-container">
        <div style="margin-bottom: 20px">
            <h1 style="font-size: 150%; text-align: center">Snacks</h1>
        </div>

        <div class="d-flex flex-wrap justify-content-evenly">
            <?php
                 $sql = "SELECT * FROM products WHERE aisle = 'Snacks'";
                 $result = mysqli_query($conn, $sql);
                 $index = 0;
                 while ($row = mysqli_fetch_assoc($result))
                 {
                     echo"                     
                     <div class='aisle-item'>
                        <a href='product_display.php?varname={$row['product_id']}'>
                        <img src='{$row['image']}' alt='{$row['name']}'>
                        <h4 style='font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;'>{$row['name']}</h4>
                        <p style='margin-bottom: 0 '>{$row['price']}$/{$row['unit']}</p>
                        </a>
     
                         <div class='d-flex bd-highlight'>
                             <div class='flex-grow-1 bd-highlight'>
                                 <form action=\"\" method=\"post\">
                                 <button type='button' class='btn btn-primary rounded-circle btn-sm py-0 minusButton' id='{$index}' style='background-color:  #EE4F3E; border-color:  #EE4F3E;'> - </button>
                                 <input type='text' name='qty' value='1' id ='{$index}' class='amount'>
                                 <input hidden type='text' name='chosenFormat' value='{$row['format']}'>
                                 <input hidden type=\"text\"  name='product_id' value={$row['product_id']}>
                                 <button type='button' class='btn btn-primary rounded-circle btn-sm py-0 plusButton'   id='{$index}' style='background-color:  #EE4F3E; border-color:  #EE4F3E;'> + </button>                                
                             </div>
     
                            <div class='bd-highlight'>
                                 <button class='btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton' id='{$index}' style='background-color:  #EE4F3E; border-color: #EE4F3E;' onClick='this.form.submit()'> Add to Cart</button>
                                 </form>
                            </div>
                        </div>
                    </div> ";
                    $index++;
                 }           
            
            ?>

            <!--
            <div class="aisle-item">
                <a href="product_dark_chocolate.php"><img src="resources\img\snacks\dark_chocolate_image.jpg" alt="Dark Chocolate"></a>
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;"><a href="product_dark_chocolate.php">Dark Chocolate</a></h4>
                <p style="margin-bottom: 0 ">3.10$/100g</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle minusButton" id="0">-</button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button type="button" name="button" class="button-circle plusButton" id="0">+</button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="0" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources\img\snacks\cookies_image.jpg" alt="Cookies">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Cookies</h4>
                <p style="margin-bottom: 0 ">6.99$/250g</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle minusButton" id="1">-</button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button type="button" name="button" class="button-circle plusButton" id="1">+</button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="1" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources\img\snacks\popcorn_image.jpg" alt="Popcorn">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Popcorn</h4>
                <p style="margin-bottom: 0 ">4.25$/100g</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle minusButton" id="2">-</button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button type="button" name="button" class="button-circle plusButton" id="2">+</button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="2" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources\img\snacks\chips_image.jpg" alt="Tortilla Chips">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Tortilla Chips</h4>
                <p style="margin-bottom: 0 ">4.80$/100g</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle minusButton" id="3">-</button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button type="button" name="button" class="button-circle plusButton" id="3">+</button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="3" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="resources\img\snacks\protein_bars_image.jpg" alt="Protein bar">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Protein Bar</h4>
                <p style="margin-bottom: 0 ">3.99$/unit</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle minusButton" id="4">-</button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button type="button" name="button" class="button-circle plusButton" id="4">+</button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="4" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="resources\img\snacks\apple_compote_image.jpg" alt="Apple compote">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Apple Compote</h4>
                <p style="margin-bottom: 0 ">4.27$/unit</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle minusButton" id="5">-</button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button type="button" name="button" class="button-circle plusButton" id="5">+</button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="5" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="resources\img\snacks\marshmallows_image.jpg" alt="Marshmallows">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Marshmallows</h4>
                <p style="margin-bottom: 0 ">5.89$/(100g)</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle minusButton" id="6">-</button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button type="button" name="button" class="button-circle plusButton" id="6">+</button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="6" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="resources\img\snacks\candy_image.jpg" alt="Candy">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Candy</h4>
                <p style="margin-bottom: 0 ">8.49$/pack of 5</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle minusButton" id="7">-</button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button type="button" name="button" class="button-circle plusButton" id="7">+</button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="7" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            -->


        </div>
    </div>


    <?php include "includes/footer.html"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>



    <script>
        var counterArraySnacks;

        window.addEventListener('load', (event) => {
            counterArraySnacks = getCountArray();

        }); // var numOfProducts = document.getElementsByClassName("amount").length;
        // var counterArraySnacks = new Array(numOfProducts);



        // CART BUTTON 
        var cartButtons = document.querySelectorAll(".cartButton"); //array of all the cart buttons
        var cartButtonsLength = cartButtons.length;
        for (var i = 0; i < cartButtonsLength; i++) {
            cartButtons[i].onclick = function() {
                addToCart(this);
                storeCountArray();
            }
        }


        function addToCart(button) { //what happens when add to cart is clicked
            var index = button.id;
            counterArraySnacks[index] = parseInt(document.getElementsByClassName("amount")[index].value);
        }


        function storeCountArray() {
            console.log(sessionStorage.getItem("counterArraySnacks"));
            // localStorage.setItem("names", JSON.stringify(names));
            sessionStorage.setItem("counterArraySnacks", JSON.stringify(counterArraySnacks));
            console.log(counterArraySnacks + "hello");
            // alert("worked");
        };



        //retreives countarray on refresh
        function getCountArray() {
            counterArraySnacks = JSON.parse(sessionStorage.getItem("counterArraySnacks")); //get them back
            console.log(counterArraySnacks);
            if (counterArraySnacks != null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                for (var i = 0; i < numOfProducts; i++) {
                    document.getElementsByClassName("amount")[i].value = parseInt(counterArraySnacks[i]);

                }
                return counterArraySnacks;
            }
            //localStorage.getItem("counterArraySnacks");

            if (counterArraySnacks == null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                var counterArraySnacks = new Array(numOfProducts);
                for (var i = 0; i < numOfProducts; i++) {
                    counterArraySnacks[i] = 1;
                }
                console.log(counterArraySnacks);
                return counterArraySnacks;
            }
        }







        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length;

        for (var i = 0; i < plusButtonsLength; i++) {
            plusButtons[i].onclick = function() {
                increment(this, counterArraySnacks);
                storeCountArray();
            }
        }

        function increment(button, counterArraySnacks) {
            var index = button.id;
            console.log(counterArraySnacks);
            counterArraySnacks[index]++;
            document.getElementsByClassName("amount")[index].value = counterArraySnacks[index];
        }

        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length;

        for (var i = 0; i < minusButtonsLength; i++) {
            minusButtons[i].onclick = function() {
                decrement(this, counterArraySnacks);
                storeCountArray();
            }
        }

        function decrement(button, counterArraySnacks) {
            var index = button.id;
            if (counterArraySnacks[index] == 1)
                return;
            else
                counterArraySnacks[index]--;

            document.getElementsByClassName("amount")[index].value = counterArraySnacks[index];
        }
    </script>
</body>

</html>