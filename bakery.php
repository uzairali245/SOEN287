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
            <h1 style="font-size: 150%; text-align: center"> Bakery</h1>
        </div>

        <div class="d-flex flex-wrap justify-content-evenly"> 
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-bagel2.jpg" alt="Bagel">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Bagel</h4>
                <p style="margin-bottom: 0 ">10$/dozen</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="counter">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-baguette2.jpg" alt="Baguette">
                 <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Baguette</h4>
                <p style="margin-bottom: 0 ">7$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 minusButton" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span class="counter">1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 plusButton" style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-challah2.jpg" alt="Challah">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Challah</h4>
                <p style="margin-bottom: 0 ">5$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span>1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-chocolatine2.jpg" alt="Chocolatine"> 
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Chocolatine</h4>
                <p style="margin-bottom: 0 ">3$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span>1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="aisle-item">
                <img src="resources/img/bakery/bakery-ciabatta2.jpg" alt="Ciabatta">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Ciabatta</h4>
                <p style="margin-bottom: 0 ">7$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span>1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
        
            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-donut2.jpg" alt="Donut">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Donut</h4>
                <p style="margin-bottom: 0 ">10$/dozen</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span>1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>

            
            <div class="aisle-item"> 
                <img src="resources/img/bakery/bakery-white-bread2.jpg" alt="White Bread"> 
                <br>
                <!--
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">White Bread</h4> -->
                <h4>
                    <a href="product_whiteBread.php" style="color: white; text-decoration: none;">Bread </a>  
                </h4>
                <p style="margin-bottom: 0 ">7$/bag</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> - </button>
                        <span>1</span>
                        <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #EE4F3E; border-color:  #EE4F3E;"> + </button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
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

        var btn = document.querySelectorAll(".plusButton")[0];
        btn.onclick = function(){
            alert("you clicked me!");
        }

        var txt = document.querySelectorAll(".counter")[0];
        txt.onclick = function(){
            alert("Im a bagel!");
        }

        var count = document.querySelectorAll(".counter"); //DAVID LOOK HERE FOR THE NUMBER count[0] = 1 <--1st product's amount
        
        
        //adding eventlistener to minus buttons
        for(var i=0; i<document.querySelectorAll(".minusButton").length; i++){
            document.querySelectorAll(".minusButton")[i].addEventListener("click", function (){
                count[i].textContent = parseInt(count[i].innerHTML) + 1; }
            );
        }

        //adding eventlistener to plus buttons
        for(var i=0; i<document.querySelectorAll(".plusButton").length; i++){
            document.querySelectorAll(".plusButton")[i].addEventListener("click", decrement(i));
        }

        function increment(index){
            count[index].textContent = parseInt(count[index].innerHTML) + 1;
        }

        function decrement(index){
            if(parseInt(count[index].innerHTMML) == 1)
                return;
            else
                count[index].textContent = parseInt(count[index].innerHTML) - 1;
        }
    
    </script>
  </body>
</html>