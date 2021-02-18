<!DOCTYPE html>
<html lang="en">
  <head>
  <title>SOEN 287</title>
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
    /*max-height: 250px;
    max-width: 320px;*/
    height: 250px;
    width: 250px;
    border-radius: 8px;
    object-fit: cover;
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
            <h1 style="font-size: 150%; text-align: center"> Earth Produce</h1>
        </div>

        <div class="d-flex flex-wrap justify-content-evenly"> 
            
            <div class="aisle-item"> 
                <a href="product_original.php"><img src="resources/img/veg-fruit/blueberry.jpg" alt="Blueberries"></a>
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;"><a href="product_original.php">Blueberries<a></h4>
                <p style="margin-bottom: 0 ">8.99$/100g</p>
                
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
                <img src="resources/img/veg-fruit/tomato.jpg" alt="Tomato">
                 <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Tomato</h4>
                <p style="margin-bottom: 0 ">3.85$/unit</p>
                
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
                <img src="resources/img/veg-fruit/pumpkin.jpg" alt="Pumpkin">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Pumpkin</h4>
                <p style="margin-bottom: 0 ">15.29$/unit</p>
                
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
                <img src="resources/img/veg-fruit/orange.jpg" alt="Orange"> 
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Orange</h4>
                <p style="margin-bottom: 0 ">7.22$/unit</p>
                
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
                <img src="resources/img/veg-fruit/artichoke.jpg" alt="artichoke">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Artichoke</h4>
                <p style="margin-bottom: 0 ">18.35$/unit</p>
                
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
                <img src="resources/img/veg-fruit/apple.jpg" alt="apple">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Apple</h4>
                <p style="margin-bottom: 0 ">4.99$/100g</p>
                
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
                <img src="resources/img/veg-fruit/carrots.jpg" alt="Carrots">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Carrots</h4>
                <p style="margin-bottom: 0 ">7.99$/lb</p>
                
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
                <img src="resources/img/veg-fruit/raspberries.jpg" alt="raspberries">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Raspberries</h4>
                <p style="margin-bottom: 0 ">15.75$/250g</p>
                
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
                <img src="resources/img/veg-fruit/strawberries.jpg" alt="strawberries">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Strawberries</h4>
                <p style="margin-bottom: 0 ">14.59$/500g</p>
                
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
                <img src="resources/img/bakery/bakery-pretzel2.jpg" alt="Pretzel">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Pretzel</h4>
                <p style="margin-bottom: 0 ">4$/unit</p>
                
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
                <img src="resources/img/bakery/bakery-wheat-bread2.jpg" alt="Wheat Bread">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Wheat Bread</h4>
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
        // Custom JS
    </script>
  </body>
</html>