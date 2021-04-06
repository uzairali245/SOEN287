<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bakery</title>
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
    }

    .aisle-item {
        margin: 10px 0;
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
            <h1 style="font-size: 150%; text-align: center"> Bakery</h1>
        </div>

        <?php // Data
                    $bakery = "Bakery";
                    $sql = "SELECT name, price, unit, aisle, product_id FROM products WHERE aisle = 'Bakery'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                            echo"<tr>
                            <td>{$row['name']}</td>                        
                            <td>{$row['price']}</td>
                            <td>{$row['unit']}</td>
                            <td>{$row['product_id']}</td>
                            <td><a href ='product_display.php?varname={$row['product_id']}'>{$row['name']} </a> </td>
                            <br>
                            </tr>"; // TODO Don't forget to send post/get data for the edit and delete buttons eventually   
                    }
                    echo"</table>";
            ?>

        <div class="d-flex flex-wrap justify-content-evenly">
            
            <?php
                 $bakery = "Bakery";
                 $sql = "SELECT name, price, unit, aisle, image FROM products WHERE aisle = 'Bakery'";
                 $result = mysqli_query($conn, $sql);
                 $index = 0;
                 while ($row = mysqli_fetch_assoc($result))
                 {
                     echo"
                     <div class='aisle-item'>
                        <img src='{$row['image']}' alt='{$row['name']}'>
                        <h4 style='font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;'>{$row['name']}</h4>
                        <p style='margin-bottom: 0 '>{$row['price']}$/{$row['unit']}</p>
     
                         <div class='d-flex bd-highlight'>
                             <div class='flex-grow-1 bd-highlight'>
                                 <button class='btn btn-primary rounded-circle btn-sm py-0 minusButton' id='{$index}' style='background-color:  #EE4F3E; border-color:  #EE4F3E;'> - </button>
                                 <input type='text' name='qty' value='1' class='amount'>
                                 <button class='btn btn-primary rounded-circle btn-sm py-0 plusButton' id='{$index}' style='background-color:  #EE4F3E; border-color:  #EE4F3E;'> + </button>
                             </div>
     
                            <div class='bd-highlight'>
     
                                 <button class='btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton' id='{$index}' style='background-color:  #EE4F3E; border-color: #EE4F3E;'> Add to Cart</button>
                            </div>
                        </div>
                    </div> ";
                    $index++;
                 }           
            
            ?>

            
            <!--
            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-bagel2.jpg" alt="Bagel">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Bagel</h4>
                <p style="margin-bottom: 0 ">10$/dozen</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="0" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-baguette2.jpg" alt="Baguette">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Baguette</h4>
                <p style="margin-bottom: 0 ">7$/unit</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="1" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="1" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="1" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-challah2.jpg" alt="Challah">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Challah</h4>
                <p style="margin-bottom: 0 ">5$/unit</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="2" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-chocolatine2.jpg" alt="Chocolatine">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Chocolatine</h4>
                <p style="margin-bottom: 0 ">3$/unit</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="3" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-ciabatta2.jpg" alt="Ciabatta">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Ciabatta</h4>
                <p style="margin-bottom: 0 ">7$/unit</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="4" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="4" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="4" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-donut2.jpg" alt="Donut">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Donut</h4>
                <p style="margin-bottom: 0 ">10$/dozen</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="5" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            
            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-white-bread2.jpg" alt="White Bread">
                <br>
                -->
                <!--
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">White Bread</h4> -->
                <!--
                <h4>
                    <a href="product_whiteBread.php" style="color: white; text-decoration: none;">Bread </a>
                </h4>
                <p style="margin-bottom: 0 ">7$/bag</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="6" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="6" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="6" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
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
        var counterArrayBakery;

        window.addEventListener('load', (event) => {
            counterArrayBakery = getCountArray();

        });

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
            counterArrayBakery[index] = parseInt(document.getElementsByClassName("amount")[index].value);
        }


        function storeCountArray() {
            console.log(sessionStorage.getItem("counterArrayBakery"));
            // localStorage.setItem("names", JSON.stringify(names));
            sessionStorage.setItem("counterArrayBakery", JSON.stringify(counterArrayBakery));
            console.log(counterArrayBakery + "hello");
            // alert("worked");
        };


        //retreives countarray on refresh
        function getCountArray() {
            counterArrayBakery = JSON.parse(sessionStorage.getItem("counterArrayBakery")); //get them back
            console.log(counterArrayBakery);
            if (counterArrayBakery != null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                for (var i = 0; i < numOfProducts; i++) {
                    document.getElementsByClassName("amount")[i].value = parseInt(counterArrayBakery[i]);

                }
                return counterArrayBakery;
            }
            //localStorage.getItem("counterArrayBakery");

            if (counterArrayBakery == null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                var counterArrayBakery = new Array(numOfProducts);
                for (var i = 0; i < numOfProducts; i++) {
                    counterArrayBakery[i] = 1;
                }
                console.log(counterArrayBakery);
                return counterArrayBakery;
            }
        }

        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length;

        for (var i = 0; i < plusButtonsLength; i++) {
            plusButtons[i].onclick = function() {
                increment(this, counterArrayBakery);
                storeCountArray();
            }
        }

        function increment(button, counterArrayBakery) {
            var index = button.id;
            console.log(counterArrayBakery);
            counterArrayBakery[index]++;
            document.getElementsByClassName("amount")[index].value = counterArrayBakery[index];
        }

        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length;

        for (var i = 0; i < minusButtonsLength; i++) {
            minusButtons[i].onclick = function() {
                decrement(this, counterArrayBakery);
                storeCountArray();
            }
        }

        function decrement(button, counterArrayBakery) {
            var index = button.id;
            if (counterArrayBakery[index] == 1)
                return;
            else
                counterArrayBakery[index]--;

            document.getElementsByClassName("amount")[index].value = counterArrayBakery[index];
        }
    </script>
</body>

</html>