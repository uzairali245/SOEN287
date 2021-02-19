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
    
img{
    max-height: 250px;
    max-width: 320px;
    width: 250px;
    height: 250px;
    object-fit: cover;
    border-radius: 8px;
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
            <h1 style="font-size: 150%; text-align: center">Snacks</h1>
        </div>

        <div class="d-flex flex-wrap justify-content-evenly"> 
            
            <div class="aisle-item"> 
                <a href="product_original.php"><img src="resources\img\snacks\dark_chocolate_image.jpg" alt="Dark Chocolate"></a>
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;"><a href="product_original.php">Dark Chocolate</a></h4>
                <p style="margin-bottom: 0 ">18.99$/100g</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle">-</button>
                        <input type="text" name="qty" value="1">
                        <button type="button" name="button" class="button-circle">+</button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources\img\snacks\cookies_image.jpg" alt="Cookies">
                 <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Cookies</h4>
                <p style="margin-bottom: 0 ">23.25$/250g</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle">-</button>
                        <input type="text" name="qty" value="1">
                        <button type="button" name="button" class="button-circle">+</button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources\img\snacks\popcorn_image.jpg" alt="Popcorn">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Popcorn</h4>
                <p style="margin-bottom: 0 ">18.67/100g</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle">-</button>
                        <input type="text" name="qty" value="1">
                        <button type="button" name="button" class="button-circle">+</button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            
            <div class="aisle-item"> 
                <img src="resources\img\snacks\chips_image.jpg" alt="Tortilla Chips"> 
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Tortilla Chips</h4>
                <p style="margin-bottom: 0 ">10.89$/lb</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle">-</button>
                        <input type="text" name="qty" value="1">
                        <button type="button" name="button" class="button-circle">+</button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="aisle-item">
                <img src="resources\img\snacks\protein_bars_image.jpg" alt="Protein bar">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Protein Bar</h4>
                <p style="margin-bottom: 0 ">7$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle">-</button>
                        <input type="text" name="qty" value="1">
                        <button type="button" name="button" class="button-circle">+</button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="aisle-item"> 
                <img src="resources\img\snacks\apple_compote_image.jpg" alt="Apple compote">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Apple Compote</h4>
                <p style="margin-bottom: 0 ">34$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle">-</button>
                        <input type="text" name="qty" value="1">
                        <button type="button" name="button" class="button-circle">+</button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="aisle-item"> 
                <img src="resources\img\snacks\marshmallows_image.jpg" alt="Marshmallows">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Marshmallows</h4>
                <p style="margin-bottom: 0 ">22.35$/unit</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle">-</button>
                        <input type="text" name="qty" value="1">
                        <button type="button" name="button" class="button-circle">+</button>
                    </div>
                    
                    <div class="bd-highlight">
                        
                    <button class="btn btn-primary rounded-3 btn-sm btn-sm py-0 " style="background-color:  #EE4F3E; border-color: #EE4F3E;"> Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="aisle-item"> 
                <img src="resources\img\snacks\candy_image.jpg" alt="Candy">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Candy</h4>
                <p style="margin-bottom: 0 ">24$/pack of 6</p>
                
                <div class="d-flex bd-highlight">                    
                    <div class="flex-grow-1 bd-highlight">
                        <button type="button" name="button" class="button-circle">-</button>
                        <input type="text" name="qty" value="1">
                        <button type="button" name="button" class="button-circle">+</button>
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