<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <title>Product Page</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
                        <div>
                        <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        See more
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
  
</div>


                    </div>    
                  
                </div>

            </div>

        </section>
    
        
        
        <!--<div class="clearfix"></div>-->
        <?php include "includes/footer.html"; ?>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    </body>





</html>