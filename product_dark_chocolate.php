<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dark Chocolate</title>

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

<body>

    <div class="content-container">
        <section class="section-products content-without-footer">
            <?php include "includes/header.html"; ?>
            <div class="custom-row">

                <div class="colmn one-third">
                    <div>
                        &nbsp;
                    </div>
                </div>
                <div class="colmn one-third">
                    <div>
                        <img src="resources\img\snacks\dark_chocolate_image.jpg" alt="Dark chocolate">
                    </div>
                </div>

                <div class="colmn one-third">
                    <div class="product-info">

                        <div class="product-info-element">
                            <h3 id="manufacturer">La Chocolaterie co. </h3>
                            <h3 id="product-name">Dark Chocolate (85% CACAO)</h3>
                        </div>

                        <div class="product-info-element">
                            <h3 id="price-per-unit">3.10$/100g</h3>
                        </div>

                        <div class="product-info-element">
                            <h3 id="price">3.10$</h3>
                        </div>



                        <div class="product-info-element">

                            <div class="colmn one-half qty">
                                <button class="button-circle minusButton" type="button" id="0" name="button">-</button>
                                <span class="amount">1</span>
                                <button class="button-circle plusButton" type="button" id="0" name="button">+</button>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            See more
                                        </button>
                                    </h5>

                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Ingredients: </strong>Cocoa Mass, Cocoa Butter, Sugar, Cocoa Powder, Milk Ingredients.<br>

                                            <strong>May Contain Peanuts, Tree Nuts, Soy, And Sesame.</strong>
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
<script>
    var counterArray = [1]; //try not to have it hard coded later (to fix!) 1.find span amount 2. initialize array to that amount 3.insert 1 to entire array
    var amountArray = document.getElementsByClassName("amount");
    console.log(amountArray);


    // INCREMENT BUTTON
    var plusButtons = document.querySelectorAll(".plusButton");
    var plusButtonsLength = plusButtons.length; //3 for now
    console.log(plusButtonsLength);

    for (var i = 0; i < plusButtonsLength; i++) {
        plusButtons[i].onclick = function() {
            increment(this);
        }
    }

    function increment(button) {
        var index = button.id;
        counterArray[index]++;
        amountArray[index].textContent = counterArray[index];
    }

    //DECREMENT BUTTON
    var minusButtons = document.querySelectorAll(".minusButton");
    var minusButtonsLength = minusButtons.length; //3 for now

    for (var i = 0; i < minusButtonsLength; i++) { //THIS WORKS
        minusButtons[i].onclick = function() {
            decrement(this);
        }
    }


    console.log(counterArray);

    function decrement(button) {
        console.log(counterArray); //it exists here
        var index = button.id;
        console.log(counterArray[index]);
        if (counterArray[index] == 1)
            return;
        else
            counterArray[index]--;

        amountArray[index].textContent = counterArray[index];
    }

     var remeberSize = document.querySelectorAll(".amount").length;
     for (i = 0; i < rememberSize; i++) {

     }
</script>




</html>