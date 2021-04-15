<?php include "includes/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Beverages</title>
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

img{
    height: 250px;
    width: 300px;
}

.aisle-item{
    margin: 10px 0;
}

.h4{
    font-size:100%;
}
#Uzair{
 background-image: url("https://ihpl.llu.edu/sites/ihpl.llu.edu/files/field/image/beverage-aisle.jpg");
    width: 100%;
    height: auto;
    min-height: 500px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    : 250px;
    color: black;
}


  </style>
  <body>
    <?php include "includes/header.html"; ?>


    <!--CONTENTS OF PAGE STARTS HERE-->
    <div class="custom-page-container">
        <div style="margin-bottom: 20px">
            <h1 id="Uzair" style="font-size: 150%; text-align: center;padding-top: 50px"> Beverages</h1>

        </div>

        <div class="d-flex flex-wrap justify-content-evenly">

            <div class="aisle-item">
                <img src="https://media.npr.org/assets/img/2015/11/19/salt-iconic-branding-0037edit_custom-106133bb015b56c78e6bd554cfcbc9cc648156bb-s800-c85.jpg" alt="Coke">
                <h4 >
<a href="product_cocacola.php" style="color: white; text-decoration: none;">Coca Cola </a>
                  </h4>
                <p style="margin-bottom: 0 ">2.50$/bottle</p>

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
                <img src="https://voila.ca/images-v2/2d92d19c-0354-49c0-8a91-5260ed0bf531/4b2788bd-7207-4a8e-b5ef-0ad94345846b/76891112-b190-4c30-b131-7fb0193636aa/f0fbb9c8-4c56-433c-950a-1a1fcadd6ef0/500x500.jpg" alt="7up">
                 <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">7Up</h4>
                <p style="margin-bottom: 0 ">2.55$/bottle</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton " id="1" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="1" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="1" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="https://www.directwholesale.com.sg/pub/media/catalog/product/cache/27ed4154bc0e5c3c51a580076325aed3/9/5/9556404120222_0012_1528450157610.jpg" alt="Pepsi">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Pepsi Black</h4>
                <p style="margin-bottom: 0 ">3.00$/bottle</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton"  id="2" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>


            <div class="aisle-item">
                <img src="https://target.scene7.com/is/image/Target/GUEST_06676e3b-ed22-4689-ad96-c3615081181a?wid=488&hei=488&fmt=pjpeg" alt="Soda">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Canada Dry</h4>
                <p style="margin-bottom: 0 ">3.00$/unit</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton " id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="3"  style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="https://static-01.daraz.pk/p/e5fad6451ddc05ccfc32821c31f2a0e8.jpg" alt="Water">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Water</h4>
                <p style="margin-bottom: 0 ">1.75$/bottle</p>

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
                <img src="https://images-na.ssl-images-amazon.com/images/I/71yo4On1tXL._SL1500_.jpg" alt="Sparkling water(bubly)">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Sparkling Water</h4>
                <p style="margin-bottom: 0 ">3.25$/can </p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton " id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton"  id="5"  style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE2hw60mQXbeRU6aUkOUwSAAx01x8vXPHAXQ&usqp=CAU" alt="Orange juice">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Orange juice</h4>
                <p style="margin-bottom: 0 ">10.37$/bottle</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="6" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="6" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton"  id="6" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="https://images.chickadvisor.com/item/48874/375/i/fruitopia.jpg" alt="Juice">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Fruitopia</h4>
                <p style="margin-bottom: 0 ">5.00$/pack of 3</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton " id="7" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="7" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="7" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="https://post.healthline.com/wp-content/uploads/2019/09/Red_Bull_732x549-thumbnail.jpg" alt="Energy Drink">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Red Bull</h4>
                <p style="margin-bottom: 0 ">6.32$/can</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="8" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="8" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="8" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="https://i2.wp.com/nlliquor.com/wp-content/uploads/2020/02/10417_m_v3.jpg?fit=960%2C1280&ssl=1" alt="Beer">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Corona Beer</h4>
                <p style="margin-bottom: 0 ">5.00$/bottle</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton " id="9" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton " id="9" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="9" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="https://img.alicdn.com/i1/725677994/O1CN01A9wMbK28vIkXfkqIk_!!725677994.jpg_640x640q90.jpg" alt="Beer">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Heineken Beer</h4>
                <p style="margin-bottom: 0 ">7.40$/unit</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="10" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="10" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="10" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item">
                <img src="https://media.nicks.com.au/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/j/a/jack-daniels-bottled-in-bond-1000ml.jpg" alt="Whiskey">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Jack Daniels (whiskey)</h4>
                <p style="margin-bottom: 0 ">$99.99/1.0l</p>

                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton " id="11" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="11" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>

                    <div class="bd-highlight">

                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="11" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php include "includes/footer.html"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>



    <script>
        var counterArrayBeverages;

        window.addEventListener('load', (event) => {
            counterArrayBeverages = getCountArray();

        }); // var numOfProducts = document.getElementsByClassName("amount").length;
        // var counterArrayBeverages = new Array(numOfProducts);



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
            counterArrayBeverages[index] = parseInt(document.getElementsByClassName("amount")[index].value);
        }


        function storeCountArray() {
            console.log(sessionStorage.getItem("counterArrayBeverages"));
            // localStorage.setItem("names", JSON.stringify(names));
            sessionStorage.setItem("counterArrayBeverages", JSON.stringify(counterArrayBeverages));
            console.log(counterArrayBeverages + "hello");
            // alert("worked");
        };



        //retreives countarray on refresh
        function getCountArray() {
            counterArrayBeverages = JSON.parse(sessionStorage.getItem("counterArrayBeverages")); //get them back
            console.log(counterArrayBeverages);
            if (counterArrayBeverages != null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                for (var i = 0; i < numOfProducts; i++) {
                    document.getElementsByClassName("amount")[i].value = parseInt(counterArrayBeverages[i]);

                }
                return counterArrayBeverages;
            }
            //localStorage.getItem("counterArrayBeverages");

            if (counterArrayBeverages == null) {
                var numOfProducts = document.getElementsByClassName("amount").length;
                var counterArrayBeverages = new Array(numOfProducts);
                for (var i = 0; i < numOfProducts; i++) {
                    counterArrayBeverages[i] = 1;
                }
                console.log(counterArrayBeverages);
                return counterArrayBeverages;
            }
        }







        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length;

        for (var i = 0; i < plusButtonsLength; i++) {
            plusButtons[i].onclick = function() {
                increment(this, counterArrayBeverages);
                storeCountArray();
            }
        }

        function increment(button, counterArrayBeverages) {
            var index = button.id;
            console.log(counterArrayBeverages);
            counterArrayBeverages[index]++;
            document.getElementsByClassName("amount")[index].value = counterArrayBeverages[index];
        }

        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length;

        for (var i = 0; i < minusButtonsLength; i++) {
            minusButtons[i].onclick = function() {
                decrement(this, counterArrayBeverages);
                storeCountArray();
            }
        }

        function decrement(button, counterArrayBeverages) {
            var index = button.id;
            if (counterArrayBeverages[index] == 1)
                return;
            else
                counterArrayBeverages[index]--;

            document.getElementsByClassName("amount")[index].value = counterArrayBeverages[index];
        }
    </script>
  </body>
</html>

