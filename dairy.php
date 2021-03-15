<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dairy Aisle</title>
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
    <?php include "includes/header.html"; ?>


    <!--CONTENTS OF PAGE STARTS HERE-->
    <div class="custom-page-container">
        <div style="margin-bottom: 20px">
            <h1 style="font-size: 150%; text-align: center"> Dairy</h1>
        </div>

        <div class="d-flex flex-wrap justify-content-evenly">

            <div class="aisle-item">
                <img src="resources/img/dairy/brie.jpg" alt="brie">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Brie</h4>
                <p style="margin-bottom: 0 ">10$</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" onclick="storeCountArray()" id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" onclick="storeCountArray()" id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="0" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources/img/dairy/butter.jpg" alt="butter">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Butter</h4>
                <p style="margin-bottom: 0 ">4$</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" onclick="storeCountArray()" id="1" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" onclick="storeCountArray()" id="1" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="1" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources/img/dairy/gouda.jpg" alt="Challah">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Gouda</h4>
                <p style="margin-bottom: 0 ">20$</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" onclick="storeCountArray()" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" onclick="storeCountArray()" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="2" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="resources/img/dairy/milk.jpg" alt="milk">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;"><a href="product_milk.php">Milk</a></h4>
                <p style="margin-bottom: 0 ">5$/bag</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" onclick="storeCountArray()" id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" onclick="storeCountArray()" id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="3" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="resources/img/dairy/yogurt.jfif" alt="yogurt">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Yogurt</h4>
                <p style="margin-bottom: 0 ">7$</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" onclick="storeCountArray()" id="4" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" onclick="storeCountArray()" id="4" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="4" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="resources/img/dairy/shredded-cheese.jfif" alt="shredded-cheese">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Shredded Cheese</h4>
                <p style="margin-bottom: 0 ">10$</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" onclick="storeCountArray()" id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" onclick="storeCountArray()" id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="5" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>




        </div>
    </div>


    <?php include "includes/footer.html"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <!-- <body onload="getCountArray()"> -->



    <script>
        var counterArray;

        window.addEventListener('load', (event) => {
            counterArray = getCountArray();

        }); // var numOfProducts = document.getElementsByClassName("amount").length;
        // var counterArray = new Array(numOfProducts);



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
            counterArray[index] = parseInt(document.getElementsByClassName("amount")[index].value);
        }


        function storeCountArray() {
            console.log(localStorage.getItem("counterArray"));
            // localStorage.setItem("names", JSON.stringify(names));
            localStorage.setItem("counterArray", JSON.stringify(counterArray));
            console.log(counterArray + "hello");
            alert("it entered store");
            // alert("worked");
        };



        //retreives countarray on refresh
        function getCountArray() {
            counterArray = JSON.parse(localStorage.getItem("counterArray")); //get them back
            console.log(counterArray);
            if (counterArray != null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                for (var i = 0; i < numOfProducts; i++) {
                    document.getElementsByClassName("amount")[i].value = parseInt(counterArray[i]);

                }
                return counterArray;
            }
            //localStorage.getItem("counterArray");
            alert("it entered");

            if (counterArray == null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                var counterArray = new Array(numOfProducts);
                for (var i = 0; i < numOfProducts; i++) {
                    counterArray[i] = 1;
                }
                alert("counterarray being initialized");
                console.log(counterArray);
                return counterArray;
            }
        }







        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length;

        for (var i = 0; i < plusButtonsLength; i++) {
            plusButtons[i].onclick = function() {
                increment(this, counterArray);
                storeCountArray();
            }
        }

        function increment(button, counterArray) {
            var index = button.id;
            console.log(counterArray);
            counterArray[index]++;
            document.getElementsByClassName("amount")[index].value = counterArray[index];
        }

        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length;

        for (var i = 0; i < minusButtonsLength; i++) {
            minusButtons[i].onclick = function() {
                decrement(this, counterArray);
                storeCountArray();
            }
        }

        function decrement(button, counterArray) {
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