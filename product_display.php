<?php include "includes/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Product Page</title>
    <meta name="author" content="Anne Bastien">

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

    <style>
        .amount {
            width: 20px;
        }
        .collapsible {
  /*background-color: #777;
  color: white;*/
  margin-top: 10px;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
/*  background-color: #555;*/
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #ee4f3e;
  border-radius: 0 0 30px 30px;
}
.collapsible:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: white;
  float: right;
  margin-left: 5px;

}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

    </style>

</head>

<body>

    <div class="content-container">
        <section class="section-products content-without-footer">
            <?php 
                include "includes/header.php";
                include "includes/dbc.php";
             ?>
            <div class="custom-row">

                <div class="colmn one-third">
                    <div>
                        &nbsp;
                    </div>
                </div>
                <div class="colmn one-third">
                    <div>
                        <?php 
                            $product = $_GET['varname'];
                            $sql = "SELECT image,name FROM products WHERE product_id = $product";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);

                            echo"<img src='{$row['image']}' alt='{$row['name']}'>";
                        ?>
                        
                    </div>
                </div>

                <div class="colmn one-third">
                    <div class="product-info">

                        <?php 
                            $product = $_GET['varname'];
                            $sql = "SELECT * FROM products WHERE product_id = $product";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            
                                echo"
                                <div class='product-info-element'>
                                    <h3 id='manufacturer'>{$row['manufacturer']}</h3>
                                    <h3 id='product-name'>{$row['name']}</h3>
                                </div>";

                                        
                                echo"
                                    <div class='product-info-element'>
                                    <h3 id='price-per-unit'>{$row['price']}$/";

                                $formatArr;
                                if(!is_null($row['format'])) //display the initial format
                                {
                                    $formats = $row['format'];
                                    $formatArr = explode("/",$row['format']);
                                    $length = count($formatArr); 
                                    echo"$formatArr[0]";
                                }   
                                echo"{$row['unit']}</h3>
                                </div>";
                                
                                $formatArr;
                                if(!is_null($row['format']))//format buttons display
                                {
                                    $formats = $row['format'];
                                    $formatArr = explode("/",$row['format']);
                                    $length = count($formatArr); 
                                    echo"
                                    
                                    <div class='product-info-element btn-group productFormat' role='group' aria-label='Basic example' id='productFormat' data-initial='{$formatArr[0]}'> ";
                                   
                                    for($i=0; $i < $length; $i++){
                                        $a = $i +1;
                                        echo"                                       
                                        <button class='bttn-full bttn btn' type='button' value='{$formatArr[$i]}' id='format$a' onClick='updatePrice($a)'>$formatArr[$i]</button> 
                                        
                                        ";
                                        
                                    }
                                    echo"</div>";
                                }

                                echo"
                                <div class='product-info-element'>
                                    <h3 id='price'>{$row['price']}$</h3>
                                </div>

                                <p> 
                                    {$row['description']}
                                </p>
        
                                <div class='product-info-element'>
        
                                    <div class='colmn one-half qty'>
                                        <form action=\"\" method=\"post\">
                                        <button  type='button' class='button-circle minusButton' id='0' style='background-color:  #EE4F3E; border-color:  #EE4F3E;'> - </button>
                                        <input type='text' name='qty' value='1' class='amount'>                                        
                                        <input hidden type='text' name='chosenFormat' id='chosenFormat' value='{$row['format']}'>
                                        <input hidden type=\"text\"  name='product_id' value={$row['product_id']}>
                                        <button   type='button' class='button-circle plusButton' id='0' style='background-color:  #EE4F3E; border-color:  #EE4F3E;'> + </button>
                                    </div>
        
                                    <div class='colmn one-half'>
                                        <button type='submit' id='0' class='bttn bttn-full cartButton'> Add to cart </button>
                                        </form>    
                                    </div>
        
                                </div>
        
                                ";
                        ?>

                       
                    </div>

                </div>
                <div class="clearfix"></div>
        </section>



        <?php include "includes/footer.html"; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
          
        var numOfProducts = document.getElementsByClassName("amount").length;
        var counterArray = new Array(numOfProducts);
        var formatValues = {};
       // var storedFormatValues = JSON.parse(localStorage.getItem('formatProductValues'));

        //KEEP FORMAT UPDATED
        /*
        if (storedFormatValues) {
            console.log(JSON.parse(localStorage.getItem('formatProductValues')));
            for (let r = 0; r < Object.keys(storedFormatValues).length; r++){
                    var key = Object.keys(storedFormatValues)[r]; 
                    let index = key.substr(6);
                    let value = parseInt(storedFormatValues[key])
                    formatValues[key]= value;
                    let myElem = document.getElementById(key)
                    if (myElem === null) {
                        continue;
                    }
                    document.getElementById(key).value = value ;
                    updatePrice(index);
            }
        }
        */
        
        //UPDATE PRICE when format changed
        function updatePrice(index) {
            console.log("---------------------");
            var price = document.getElementById("price-per-unit").innerHTML.substring(0).split('$')[0];
            console.log("initial price: " + price);
            var format = document.getElementById("format"+index).innerHTML;
            console.log("format: " + format); 
            var defaultFormat = document.getElementById("productFormat").getAttribute("data-initial");
            console.log("default format: " + defaultFormat);
                                
            price = price * (format / defaultFormat);

            //STORAGE PURPOSE
            formatValues = {};
            formatValues["format"+index]=parseInt(format);
            localStorage.setItem('formatProductValues', JSON.stringify(formatValues));

            console.log(price);
            console.log(format);
            console.log(defaultFormat);

            document.getElementById("price").innerHTML = "$" + price.toFixed(2);

            console.log("The format is " + format);
            
            //to change the input in the form
            document.getElementById("chosenFormat").value = format;
        }

        var storedItemCount = JSON.parse(localStorage.getItem('counterArray'));
        var storedProductName = JSON.parse(localStorage.getItem('productName'));
        var productName = document.getElementById("product-name").innerHTML;
        localStorage.setItem('productName', JSON.stringify(productName));


        for (var i = 0; i < numOfProducts; i++){
            if(storedItemCount && storedProductName == productName){
                counterArray[i] = storedItemCount[i];
                document.getElementsByClassName("amount")[i].value = counterArray[i];
            } else {
                counterArray[i] = 1;
                localStorage.setItem('counterArray', JSON.stringify(counterArray));
}
        }

        // CART BUTTON 
        var cartButtons = document.querySelectorAll(".cartButton"); //array of all the cart buttons
        var cartButtonsLength = cartButtons.length;
        for (var i = 0; i < cartButtonsLength; i++) {
            cartButtons[i].onclick = function() {
                addToCart(this);
            }
        }

        function addToCart(button) { //what happens when add to cart is clicked

            var index = button.id;
            counterArray[index] = parseInt(document.getElementsByClassName("amount")[index].value);
        }

        // INCREMENT BUTTON
        var plusButtons = document.querySelectorAll(".plusButton"); //array of all the plus buttons
        var plusButtonsLength = plusButtons.length;

        for (var i = 0; i < plusButtonsLength; i++) {
            plusButtons[i].onclick = function() {
                increment(this);
            }
        }

        function increment(button) {
            var index = button.id;
            counterArray[index]++;
            document.getElementsByClassName("amount")[index].value = counterArray[index];
            localStorage.setItem('counterArray', JSON.stringify(counterArray));
}

        //DECREMENT BUTTON
        var minusButtons = document.querySelectorAll(".minusButton");
        var minusButtonsLength = minusButtons.length;

        for (var i = 0; i < minusButtonsLength; i++) {
            minusButtons[i].onclick = function() {
                decrement(this);
            }
        }

        function decrement(button) {
            var index = button.id;
            if (counterArray[index] == 1)
                return;
            else
                counterArray[index]--;

            document.getElementsByClassName("amount")[index].value = counterArray[index];
            localStorage.setItem('counterArray', JSON.stringify(counterArray));
}
    </script>
</body>





</html>
