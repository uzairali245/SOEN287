<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home page</title>
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
    max-height: 250px;
    max-width: 320px;
}

.aisle-item{
    margin: 10px 0;
}

.homepage-block{
    margin-top: 25px;
}

.section-titles{
    font-size: 150%;
    background-color: #db8d51;
}

@media only screen and (max-width: 480px) {
    .firstTitle{
        padding:0;
    }
}
  </style>
  <body>
    <?php include "includes/header.html"; ?>


    <!--CONTENTS OF PAGE STARTS HERE-->
    <div class="custom-page-container">
        <div class="best-container homepage-block">
            <h2 class="section-titles firstTitle" >Guaranteed to deliver the best</h2>
            <p>
                In 2072, six young developers opened the galaxy's first grocery store on Mars.  They had no idea how revolutionary this new store would be for galaxy travelers.
            </p>
            
            <p>
                Today, we're proud to be the galaxy's first largest grocery store franchise. In more than 2,200 stores across the milky way, we aspire to excel in service. We're in the business to deliver the freshest food but we also work every day to apply and share our know-how in ways that benefit people, the community, and our galaxy in order to build a better tomorrow. 
            </p>
        </div>
        
        <div class="schedule-container homepage-block">
            <h2 class="d-flex justify-content-center section-titles">Schedule</h2>
            <div class="d-flex justify-content-center">
                <img src="resources/img/hours-of-op.png" alt="hours of operation">
            </div>
            
        </div>
        
        
        
        <div class="sale-of-the-week-container homepage-block">
            <h2 class="d-flex justify-content-center section-titles">Sales of the week</h2>
            
            <div class="d-flex flex-wrap justify-content-evenly ">
                
                            
                <div class="aisle-item"> 
                    <img src="resources/img/bakery/bakery-donut2.jpg" alt="Donut">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Donut</h4>
                    <span style="margin-bottom: 0 ">10$/dozen</span>
                    <span style="text-decoration: line-through; font-size: 70%"> 12$/dozen</span>


                    <div class="d-flex bd-highlight">                    
                        <div class="flex-grow-1 bd-highlight">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                            <input type="text" name="qty" value="1" class="amount">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton " id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                        </div>

                        <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton " id="0" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="aisle-item"> 
                    <img src="resources/img/interstellar-foods/gagh.jpg" alt="gagh">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Klingon Gagh</h4>
                    <span style="margin-bottom: 0 ">15.41$/kg</span>
                    <span style="text-decoration: line-through; font-size: 70%"> 20$/kg</span>


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
                    <img src="resources/img/dairy/brie.jpg" alt="brie">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Brie</h4>
                    <span style="margin-bottom: 0 ">10$/unit</span>
                    <span style="text-decoration: line-through; font-size: 70%"> 15$/unit</span>


                    <div class="d-flex bd-highlight">                    
                        <div class="flex-grow-1 bd-highlight">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                            <input type="text" name="qty" value="1" class="amount">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="2"style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                        </div>

                        <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="2" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                        </div>
                    </div>
                </div>

                
                <div class="aisle-item"> 
                    <img src="resources/img/bakery/bakery-baguette2.jpg" alt="Baguette">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Baguette</h4>
                    <span style="margin-bottom: 0 ">7$/unit</span>
                    <span style="text-decoration: line-through; font-size: 70%"> 10$/unit</span>


                    <div class="d-flex bd-highlight">                    
                        <div class="flex-grow-1 bd-highlight">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                            <input type="text" name="qty" value="1" class="amount">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                        </div>

                        <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton " id="3" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                        </div>
                    </div>
                </div>            
            </div>
            
        </div>
        
        <div class="new-arrivals-container homepage-block">
            <h2 class="d-flex justify-content-center section-titles">New Arrivals</h2>
            
            <div class="d-flex flex-wrap justify-content-evenly ">
                <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-bagel2.jpg" alt="Bagel">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Bagel</h4>
                <p style="margin-bottom: 0 ">10$/dozen</p>
                
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
                    <img src="resources/img/bakery/bakery-chocolatine2.jpg" alt="chocolatine">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Chocolatine</h4>
                    <p style="margin-bottom: 0 ">3$/unit</p>

                    <div class="d-flex bd-highlight">                    
                        <div class="flex-grow-1 bd-highlight">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton " id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                            <input type="text" name="qty" value="1" class="amount">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton " id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                        </div>

                        <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="5" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="aisle-item"> 
                    <img src="resources/img/dairy/milk.jpg" alt="Milk">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Milk</h4>
                    <p style="margin-bottom: 0 ">5$/bag</p>

                    <div class="d-flex bd-highlight">                    
                        <div class="flex-grow-1 bd-highlight">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="6" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                            <input type="text" name="qty" value="1" class="amount">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="6"  style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                        </div>

                        <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton " id="6" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="aisle-item"> 
                    <img src="resources/img/interstellar-foods/tube-grub.jpg" alt="tube-grub">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Ferengi Tube Grubs</h4>
                    <p style="margin-bottom: 0 ">41$/kg</p>

                    <div class="d-flex bd-highlight">                    
                        <div class="flex-grow-1 bd-highlight">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="7" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                            <input type="text" name="qty" value="1" class="amount">
                            <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="7" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                        </div>

                        <div class="bd-highlight">

                        <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton " id="7" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                        </div>
                    </div>
                </div>   
            </div>            
        </div>
        
        <div class="work-with-us-container homepage-block">
            <h2 class="section-titles">Want to work with us?</h2>
            <p>
                We're growing like crazy so we are always in need of more talented people to join our galactical team. Are you an enthousiastic individual who loves galactical traveling and encountering different kinds of people and galactical species? 
                Would you also like to dip your toe into customer service at our pantry?
                If so, please email us at pantrycareer@marscolonistpantry.com for a chance to work with us!
            </p>
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