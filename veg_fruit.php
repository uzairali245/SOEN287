<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Earth Produce</title>
  <!-- favicon <link rel="icon" href="includes/favicon.png?"/> -->
    <meta name="author" content="Monica Chen (template) - Anne Bastien">
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
            <h1 style="font-size: 150%; text-align: center">Earth Produce</h1>
        </div>

        <div class="d-flex flex-wrap justify-content-evenly"> 
            
            <div class="aisle-item"> 
                <a href="product_original.php"><img src="resources/img/veg-fruit/blueberry.jpg" alt="Blueberries"></a>
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;"><a href="product_original.php">Wild Blueberries</a></h4>
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
                <img src="resources/img/veg-fruit/strawberries.jpg" alt="Strawberries">
                 <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Strawberries</h4>
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
                <img src="resources/img/veg-fruit/raspberries.jpg" alt="Raspberries">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Raspberries</h4>
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
                <img src="resources/img/veg-fruit/orange.jpg" alt="Orange"> 
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Navel Oranges</h4>
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
                <img src="resources/img/veg-fruit/apple.jpg" alt="apple">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Cortland Apple</h4>
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
                <img src="resources/img/veg-fruit/pumpkin.jpg" alt="Pumpkin">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Mini Pumpkins</h4>
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
                <img src="resources/img/veg-fruit/artichoke.jpg" alt="Artichoke">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Artichoke</h4>
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
                <img src="resources/img/veg-fruit/tomato.jpg" alt="tomato">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Roma Tomatoes</h4>
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
             
            <div class="aisle-item">
                <img src="resources/img/veg-fruit/carrots.jpg" alt="Carrots">
                <h4 style=" font-family: 'Exo', sans-serif; font-weight: bold; margin-top: 10px;">Carrots</h4>
                <p style="margin-bottom: 0 ">12.34$/lb</p>
                
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