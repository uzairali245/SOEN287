<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <title>Product Page</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="resources/css/style.css" type="text/css"> 
        
        <!-- Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        
        <!--Orbitron-->
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
        
        <!--Lato-->
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
        
        <!--Exo-->
        <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&display=swap" rel="stylesheet">
        
    
    </head>
    
    <body>
        
        <?php include "includes/header.html"; ?>
        
        <section class="section-products">
            <div class="row">
                
                <div class="col one-third">
                    <div class="product-info">
                    &nbsp;
                    </div>
                </div>
                <div class="col one-third">
                    <div class="product-info">
                        <img src="resources/img/mars_bar.jpg" alt="product image">
                    </div>
                </div>
                
                <div class="col one-third">
                    <div class="product-info">
                        <div>
                            <h3 id="manufacturer">Earth co.</h3>
                            <h3 id="product-name">Levitating Banana</h3>
                            <h3 id="price-per-unit">3.99$/lb</h3>
                            <h3 id="price">$3.99</h3>
                        </div>    
                        <div>
                            <div class="col one-half qty">
                                <a href="#" class="bttn-circle col one-third">-</a>
                                <h5 class="col one-third">1</h5> <!-- convert to form-->
                                <a href="#" class=" col one-third bttn-circle">+</a>
                            </div>
                            <div class="col one-half">
                                <a href="#" class="bttn bttn-full">Add to cart</a>
                            </div>


                        </div>
                    </div>    
                  
                </div>

            </div>

        </section>
    
        
        
        <!--<div class="clearfix"></div>-->
        <footer><?php include "includes/footer.html"; ?></footer>
        
    
    </body>





</html>