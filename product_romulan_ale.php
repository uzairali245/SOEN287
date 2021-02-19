<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Romulan Ale</title>
        
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

        <!--Roboto-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
        <!--Exo-->
        <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;700&display=swap" rel="stylesheet">

        <!--Main Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto:Roboto:ital,wght@0,500;1,500,1;600;1,700&display=swap" rel="stylesheet"> 
    </head>
    <style>
    /* Custom CSS */
    body {
        background: #d48067;
    }

    .custom-page-container{
        margin-top:90px;
        padding-top: 30px;
        padding-bottom: 130px;
    }

    .custom-page-container {
        margin-left: 0px;
        margin-right: 0px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .card{
        color: #734234;
        background-color: #EBE2DE ;
        min-width: auto;
        padding:25px;
    }

    </style>
    <body>
        
       <div class="content-container">
        <section class="section-products content-without-footer">
        <?php include "includes/header.html"; ?>
            <div class="card">
            <div class="row justify-content-center" style="overflow-x: auto;">
                
                <div class="justify-content-center d-flex col-md-6">
                    <img src="resources/img/interstellar-foods/romulan-ale.jpg" alt="product image">
                </div>
                
                <div class="justify-content-center d-flex col-md-6" style="justify">
                    <div class="product-info">

                        <div class="product-info-element">
                            <h3 id="manufacturer">Romulan Empire</h3>
                            <h3 id="product-name">Romulan Ale</h3>
                        </div>

                        <div class="product-info-element">
                            <h3 id="price-per-unit">73.69$ (6)</h3>
                        </div>

                        <div class="product-info-element">
                            <h3 id="price">73.69$</h3>
                        </div>
                              

                        
                        <div class="product-info-element">

                            <div class="colmn one-half qty">
                                <button class="button-circle" type="button" name="button">-</button>
                                <input type="text" name="qty" value="1">
                                <button class="button-circle" type="button" name="button">+</button>
                            </div>

                            <div class="colmn one-half">
                                <button type="submit" class="bttn bttn-full"> Add to cart </button>
                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <div class="product-info-element">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">

                                    <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #734234; background-color: #f3887c;">
                                        See more
                                    </button>
                                    </h5>

                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>We only eat Mars Bars on Mars</strong> kidding... we got potatoes also.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>    
                  
                </div>
            </div>
            </div>
            <div class="clearfix"></div>
        </section>
    
        
        
            <?php include "includes/footer.html"; ?>
        </div> 
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    </body>





</html>