<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <title>Checkout</title>
        
        <meta name="author" content="Anne Bastien">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="resources/css/style.css" type="text/css"> 
        
        <!-- Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- Google Fonts-->
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
        
        <style>
            div.checkout-message {
                background-color: #EE4F3E;
                border-radius: 8px;
                padding: 10px;
            }

            div.checkout-message div {
                vertical-align: middle;
            }



        </style>
    
    </head>
    
    <body>
        <div class="content-container">
            <section class="section-checkout content-without-footer">
            <?php include "includes/header.html"; ?>
            <div>
                <div class="checkout-message">
                    <h2> Thank you for your order </h2>
                    <h3 style= "padding: 0 30px; font-weight: 300; font-style: normal; font-family: 'Exo', sans-serif"> Your order number is #1000578</h3>
                </div>
            </div>
            
            </section>
            <?php include "includes/footer.html"; ?>
        </div> 
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    </body>

</html>