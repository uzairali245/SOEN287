<!DOCTYPE html>
<html lang="en">

<head>

    <title>Coca Cola</title>

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
    <style >
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
                        <img src="https://media.npr.org/assets/img/2015/11/19/salt-iconic-branding-0037edit_custom-106133bb015b56c78e6bd554cfcbc9cc648156bb-s800-c85.jpg" alt="product image">
                    </div>
                </div>

                <div class="colmn one-third">
                    <div class="product-info">

                        <div class="product-info-element">
                            <h3 id="manufacturer">Coke Factory</h3>
                            <h3 id="product-name">Coca Cola</h3>
                        </div>

                        <div class="product-info-element">
                            <h3 id="price-per-unit">2.50$/bottle</h3>
                        </div>

                        <div class="product-info-element">
                            <h3 id="price">2.50$/bottle</h3>
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

                        <button class="collapsible">See More</button>
                              <div class="content">
                                <p class="description"></p>
                              </div>

                           </div>

            </div>
                <div class="clearfix"></div>
        </section>



        <?php include "includes/footer.html"; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        // This code is for Product Description
        var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
document.querySelector(".description").innerHTML="Enjoy the delicious & refreshing taste of Coca-Cola with meals, on the go, or to share. Serve ice cold for maximum refreshment. Made with no artificial flavors or preservatives so you get a full flavor in each sip.  ";
//document.querySelector(".collapsible:after .active:after ").style.color="white";
// Description sec ends here
        
        
        
        
        
        
        
        
        
        
        
        
        
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
</body>





</html>
