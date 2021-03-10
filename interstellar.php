<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Interstellar foods</title>
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

    .h4{
        font-size:100%;
    }

  </style>
  <body>
    <?php include "includes/header.html"; ?>


    <!--CONTENTS OF PAGE STARTS HERE-->
    <div class="custom-page-container">
        <div style="margin-bottom: 20px">
            <h1 style="font-size: 150%; text-align: center">Interstellar foods</h1>
        </div>

        <div class="d-flex flex-wrap justify-content-evenly"> 

            <div class="aisle-item"> 
                <a href="./product_romulan_ale.php">
                    <img src="resources/img/interstellar-foods/romulan-ale.jpg" alt="Romulan Ale">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Romulan Ale</h4>
                    <p style="margin-bottom: 0 "><strong>73.69$ (6)</strong></p>
                </a>

                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton " id="0" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="aisle-item">
                    <img src="resources/img/interstellar-foods/bloodwine.jpg" alt="Blood Wine">
                    <h4 class="justify-text-center" style="font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Klingon Blood Wine</h4>
                    <p style="margin-bottom: 0 ">37$</p>
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
                    <img src="resources/img/interstellar-foods/tube-grub.jpg" alt="Tube Grub">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Ferengi Tube Grubs</h4>
                    <p style="margin-bottom: 0 ">41$/kg</p>

                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton " id="2" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton" id="2" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                    <img src="resources/img/interstellar-foods/gagh.jpg" alt="Gagh">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Klingon Gagh</h4>
                    <p style="margin-bottom: 0 ">15.41$/kg</p>

                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton " id="3" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton"  id="3" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="aisle-item"> 
                    <img src="resources/img/interstellar-foods/hasperat.jpg" alt="Hasperat">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Bajoran Hasperat</h4>
                    <p style="margin-bottom: 0 ">10$</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" id="4" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="4" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton"  id="4" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                    <img src="resources/img/interstellar-foods/jiballian-fudge.jpg" alt="Jiballian Fudge">
                    <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Jiballian Fudge Cake</h4>
                    <p style="margin-bottom: 0 ">176$</p>

                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton "id="5"style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <input type="text" name="qty" value="1" class="amount">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" id="5" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 cartButton"  id="5" style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
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

        
var numOfProducts = document.getElementsByClassName("amount").length;
        var counterArray = new Array(numOfProducts);
            
        for (var i = 0; i < numOfProducts; i++) 
            counterArray[i] = 1;
                                   
        // CART BUTTON 
        var cartButtons = document.querySelectorAll(".cartButton"); //array of all the cart buttons
        var cartButtonsLength = cartButtons.length;
        for(var i=0; i<cartButtonsLength; i++){
            cartButtons[i].onclick = function(){
                addToCart(this);
            }
        }

        function addToCart(button){ //what happens when add to cart is clicked
            var index = button.id;
            counterArray[index] = parseInt(document.getElementsByClassName("amount")[index].value);
        }        

        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length; 
   
        for(var i =0; i< plusButtonsLength; i++){
            plusButtons[i].onclick = function(){
                increment(this);
            }
        }

        function increment(button){
            var index = button.id;
            counterArray[index] ++;
            document.getElementsByClassName("amount")[index].value = counterArray[index];
        } 
        
        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length; 

        for(var i = 0; i<minusButtonsLength; i++){ 
            minusButtons[i].onclick = function(){
                decrement(this);
            }
        }           

        function decrement(button){
            var index = button.id;
            if(counterArray[index] == 1)
                return;
            else
                counterArray[index]--;

            document.getElementsByClassName("amount")[index].value = counterArray[index];
        }   

    </script>
  </body>
</html>