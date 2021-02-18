<!DOCTYPE html>
<html>
<head>
        
        <title>Product Page</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">

        <!-- Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        
        <!--Orbitron-->
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
        
        <!--Lato-->
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
        
        <!--Exo-->
        <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600&display=swap" rel="stylesheet">
        
    
    </head>

    <body>
        <!--HEADER-->
        <div class="content-container">

        <section class="section-cart content-without-footer">
            <?php include "includes/header.html"; ?>
            <div class="custom-row">
                <h2>My Cart</h2>
            </div>
            
            <div class="custom-row">
                <div class="colmn two-third">
                    <div class="cart-header">3 items</div>
                    <div class="cart-item">
                       
                        <img class="cart-element" src="resources/img/mars_bar.jpg" alt="product image">
                       
                        <div class="cart-element">
                            <h3 id="manufacturer">Earth co.</h3>
                            <h3 id="product-name">Levitating Banana</h3>
                            <h3 id="price-per-unit">3.99$/lb</h3>
                            <h3 id="price">$3.99</h3>
                        </div> 
                        
                        <div class="cart-element qty">
                            <button type="button" name="button" class="button-circle">-</button>
                            <input type="text" name="qty" value="1">
                            <button type="button" name="button" class="button-circle">+</button>
                            <!--<a href="#" class="bttn-circle col one-third">-</a>
                            <h5 class="col one-third">1</h5> 
                            <a href="#" class=" col one-third bttn-circle">+</a>-->
                        </div>
                        
                        <div class="cart-element" id="total-price-item">
                            <h3>7.58$</h3>
                        </div>
                        
                        <button href="#" class="delete-item" type="button" >x</button>
                    
                    
                    
                    </div>
                    
                    <div class="cart-item">
                       
                        <img class="cart-element" src="resources/img/mars_bar.jpg" alt="product image">
                       
                        <div class="cart-element">
                            <h3 id="manufacturer">Earth co.</h3>
                            <h3 id="product-name">Levitating Banana</h3>
                            <h3 id="price-per-unit">3.99$/lb</h3>
                            <h3 id="price">$3.99</h3>
                        </div> 
                        
                        <div class="cart-element qty">
                            <button class="button-circle" type="button" name="button">-</button>
                            <input type="text" name="qty" value="1">
                            <button class="button-circle" type="button" name="button">+</button>
                            <!--<a href="#" class="bttn-circle col one-third">-</a>
                            <h5 class="col one-third">1</h5> 
                            <a href="#" class=" col one-third bttn-circle">+</a>-->
                        </div>
                        
                        <div class="cart-element" id="total-price-item">
                            <h3>7.58$</h3>
                        </div>
                        
                        <button href="#" class="delete-item" type="button" >x</button>
                    
                    
                    
                    </div>
                    
                    <div class="cart-item">
                       
                        <img class="cart-element" src="resources/img/mars_bar.jpg" alt="product image">
                       
                        <div class="cart-element">
                            <h3 id="manufacturer">Earth co.</h3>
                            <h3 id="product-name">Levitating Banana</h3>
                            <h3 id="price-per-unit">3.99$/lb</h3>
                            <h3 id="price">$3.99</h3>
                        </div> 
                        
                        <div class="cart-element qty">
                            <button class="button-circle" type="button" name="button">-</button>
                            <input type="text" name="qty" value="1">
                            <button class="button-circle" type="button" name="button">+</button>
                            <!--<a href="#" class="bttn-circle col one-third">-</a>
                            <h5 class="col one-third">1</h5> 
                            <a href="#" class=" col one-third bttn-circle">+</a>-->
                        </div>
                        
                        <div class="cart-element" id="total-price-item">
                            <h3>7.58$</h3>
                        </div>
                        
                        <button href="#" class="delete-item" type="button" >x</button>
                    
                    
                    
                    </div>
                </div>
                
                <div class="colmn one-third">
                    <div class="custom-row cart-header">Order Summary</div>
                    <div>
                        <div class="colmn one-half">
                            <div class="price-descriptors">
                                <p>3 items</p>
                                <p>Shipping</p>
                                <p>Tax</p>

                                <p id="cart-total">TOTAL</p>
                            </div>
                        </div>
                        <div class="colmn one-half">
                            <div class="price-list">
                                <p>7.74$</p>
                                <p>5.00$</p>
                                <p>---</p>

                                <p id="cart-total">12.74$</p>
                            </div>    

                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="center"><button type="submit" class="long-bttn"> Order Now </button></div>
                    
                
                
                </div>
            
            
            
            
            </div>
            <div class="clearfix"></div>
        </section>



        <!--FOOTER-->
        <?php include "includes/footer.html"; ?>
        </div>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>


</html>