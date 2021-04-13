<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--link to stylesheet -->
    <link rel="stylesheet" href="../resources/css/style.css"> 

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet"> 
    <title>Backstore</title>
  </head>
  <style>
    /* Custom CSS */
    html, body {
      background: #EBE2DE none repeat scroll 0 0;
      position: relative;
      margin: 0;
      padding: 0;
      height: auto;
      min-height: 100vh;
    }

    .custom-page-container {
      margin-top: 0px;
      margin-left: 20px;
      margin-right: 0px;
      margin-bottom: 100px;
      padding-top: 120px;
      padding-left: 0px;
      padding-right: 0px;
    }
    
    .order-upper-text {
        font-family: Audiowide;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 31px;
        display: flex;
        align-items: center;
        text-align: center;
        color: #734234;
      } 
      
      .order-lower-text {
        font-family: Audiowide;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 31px;
        align-items: center;
        text-align: center;
        color: #734234;
      }
      
      .input-box {
          background: #F5F5F6;
          border-radius: 7px;
      }
      
      .order-title {
          font-family: Audiowide;
          font-style: normal;
          font-weight: normal;
          font-size: 36px;
          line-height: 46px;
          display: flex;
          align-items: center;
          text-align: center;
          color: #734234;
      }
      
      .check-box-size {
          width: 35px;
          height: 35px;
      }

      img{
         max-height: 100px;
         max-width: 100px;
         width: 100px;
         height: 100px;
         object-fit: cover;
         border-radius: 8px;
       }

       td{
           padding: 15px;
            }

       input[type="text"] {
            -webkit-appearance: none;
            border: none;
            text-align: left;
            width: 310px;
            font-weight: 300;
            color: #000000;
            background-color: #F5F5F6;
            border-radius: 7px;
         }     


          .content-without-footer {
              padding-top:120px;
              padding-bottom: 130px;
              margin-left: 20px;
              margin-right: 0px;
              padding-left: 0px;
              padding-right: 0px;
          }

    .navbar-custom {
      background-color: #B35859;
      border-bottom:10px solid #EFA060;
    }

    .custom-footer {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        background-color: #B35859;
        border-top:10px solid #EFA060;
    }

    .nav-link {
      color: #734234;
      font-family: Audiowide;
      font-style: normal;
      font-weight: normal;
      font-size: 24px;
      line-height: 31px;
      border-radius: 0px 0px 0px 0px;
    }

    .tab-content {
      padding: 25px;
    }

  </style>
  <body>
    <div class="content-container">
    <div class="content-without-footer">
    <?php 
          include "../includes/header.html";
          include "../includes/dbc.php"; 
    ?>

      <form action="data_process.php" method="post"> 
        <br><label class="order-upper-text" for="customer-name">Customer Name:</label>
        <input type="text" id="customer-name" name="customer-name">
        <br><br>   
        
        <label class="order-upper-text" for="order-number">Order Number:</label>
        <input type="text" id="order-number" name="order-number">
        <br><br>
        
        <label class="order-upper-text" for="order-date">Order Date:</label>
        <input class="input-box" type="date" id="order-date" name="order-date">
        <br><br>
        
        <label class="order-upper-text" for="delivery-date">Delivery Date:</label>
        <input class="input-box" type="date" id="delivery-date" name="delivery-date">
        <br><br>
        
        <label class="order-upper-text" for="delivery-address">Delivery Address:</label>
        <input type="text" id="delivery-address" name="delivery-address">
        <br><br>
        
        <label class="order-upper-text" for="shipping-speed">Shipping Speed:</label>
        <select class="input-box" name="shipping-speed" id="shipping-speed">
          <option value="free-delivery">Free Delivery</option>
          <option value="express-delivery">Express Delivery</option>
          <option value="same-day-delivery">Same-day Delivery</option>
        </select>

        <button type="submit" class="btn btn-info backstore-font">Save</button>
      </form>
        <br><br><br><br>
        


        <p class = order-title>Products Ordered</p><br>
        
        <table style="width:100%">
          <tr>
            <td><INPUT TYPE="Checkbox" Name="Product" ID="P1" Value="Candy" class="check-box-size"></td>
            <td><img src="..\resources\img\snacks\candy_image.jpg" alt="Candy"></td>
            <td class="order-lower-text">Candy</td>
            <td class="order-lower-text">133589</td>
            <td class="order-lower-text">3.99$</td>
            <td><select class="input-box" name="candy-quantity" id="candy-quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>
          </tr>
          <tr>
            <td><INPUT TYPE="Checkbox" Name="Product" ID="P2" Value="Donut" class="check-box-size"></td>
            <td><img src="..\resources\img\snacks\cookies_image.jpg" alt="Donut"></td>
            <td class="order-lower-text">Donut</td>
            <td class="order-lower-text">133590</td>
            <td class="order-lower-text">4.99$</td>
            <td><select class="input-box" name="donut-quantity" id="donut-quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>  
          </tr>
          <tr>
            <td><INPUT TYPE="Checkbox" Name="Product" ID="P3" Value="Mars" class="check-box-size"></td>
            <td><img class="img-responsive" src="..\resources\img\snacks\marshmallows_image.jpg" alt="Mars Bar"></td>
            <td class="order-lower-text">Mars</td>
            <td class="order-lower-text">133593</td>
            <td class="order-lower-text">5.99$</td>
            <td><select class="input-box" name="mars-quantity" id="mars-quantity">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select></td>  
          </tr>
        </table><br><br>
        <label class="order-lower-text" for="total-order-amount">Total order amount: </label>&nbsp;
        <input type="text" id="total-order-amount" name="total-order-amount">&nbsp;&nbsp;&nbsp;
        <!--<button type="submit" class="btn btn-info backstore-font">Save</button>-->
    </div>
    <br>
    <?php include "../includes/footer.html"; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
      /* Custom JS */
    </script>
    </div>
  </body>
</html>