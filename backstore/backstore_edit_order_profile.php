<?php 
  if ((!isset($_SESSION['user'])) || ($_SESSION['user']['role'] != "admin")){ 
    header("location: ../homepage.php");
}
?>
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
          include "../includes/header.php";
          include "../includes/dbc.php";
          
          if(array_key_exists("order_id", $_GET)) {
            $temp = $_GET['order_id'];
          } else {
            $temp = "NULL";
          } 
    ?>

    <?php
        $sql_Initial = "SELECT * FROM orders WHERE id=$temp";
        $result_Initial = mysqli_query($conn, $sql_Initial);
        $row_Initial = mysqli_fetch_assoc($result_Initial);

        $sql_Name = "SELECT first_name FROM users WHERE id={$row_Initial['customer_id']}";
        $result_Name = mysqli_query($conn, $sql_Name);
        $row_Name = mysqli_fetch_assoc($result_Name);
    ?>    

    <?php 
        $date = explode('-', $row_Initial['order_date']);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];
        
        if ((int) $month < 10) {
          $month = "0" . $date[1];
        }
        if ((int) $day < 10) {
          $day = "0" . $date[2];
        }

        $dateToUse = $year . "-" . $month . "-" . $day;
    ?>

      <form id="my-form" action="data_process.php" method="post">
        <input type="hidden" id="order-id" name="order-id" value="<?php echo $temp; ?>">
        <input type="hidden" id="customer-id" name="customer-id" value="<?php echo $row_Initial['customer_id']; ?>">

        <br><label class="order-upper-text" for="customer-name">Customer Name:</label>
        <input type="text" id="customer-name" name="customer-name" value="<?php echo $row_Name['first_name']; ?>">
        <br><br>   
        
        <label class="order-upper-text" for="order-number">Order Number:</label>
        <input type="text" id="order-number" name="order-number" value="<?php echo $row_Initial['order_id']; ?>">
        <br><br>
        
        <label class="order-upper-text" for="order-date">Order Date:</label>
        <input class="input-box" type="date" id="order-date" name="order-date" value="<?php echo $dateToUse; ?>">
        <br><br>
        
        <label class="order-upper-text" for="delivery-date">Delivery Date:</label>
        <input class="input-box" type="date" id="delivery-date" name="delivery-date" value="<?php echo $row_Initial['delivery_date']; ?>">
        <br><br>
        
        <label class="order-upper-text" for="delivery-address">Delivery Address:</label>
        <input type="text" id="delivery-address" name="delivery-address" value="<?php echo $row_Initial['delivery_address']; ?>">
        <br><br>
        
        <label class="order-upper-text" for="shipping-speed">Shipping Speed:</label>
        <select class="input-box" name="shipping-speed" id="shipping-speed">
          <option id="Free Delivery" value="Free Delivery">Free Delivery</option>
          <option id="Express Delivery" value="Express Delivery">Express Delivery</option>
          <option id="Same Day Delivery" value="Same Day Delivery">Same Day Delivery</option>
        </select>
      </form>  
      
        <br><br><br><br>
        


        <p class = order-title>Products Ordered</p><br>
        <table style="width:100%">
        <tr>
            <td></td>
            <th class="order-lower-text">Name</th>
            <th class="order-lower-text">Format</th>
            <th class="order-lower-text">Quantity</th>
            <th class="order-lower-text">Price</th>
          </tr>
       
        <?php
        $sql = "SELECT order_id FROM orders WHERE id=$temp";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $sql1 = "SELECT product_id FROM sales WHERE order_id={$row['order_id']}";
        $result1 = mysqli_query($conn, $sql1);
        
        while($row1 = mysqli_fetch_assoc($result1)) {
          $sql2 = "SELECT name, image FROM products WHERE product_id={$row1['product_id']}";
          $result2 = mysqli_query($conn, $sql2);
          $row2 = mysqli_fetch_assoc($result2);
          echo "<tr>
          <td><img src='../{$row2['image']}' alt='{$row2['name']}'></td>
          <td class='order-lower-text'>{$row2['name']}</td>";

          $sql3 = "SELECT format, quantity FROM sales WHERE product_id={$row1['product_id']}";
          $result3 = mysqli_query($conn, $sql3);
          $row3 = mysqli_fetch_assoc($result3);
          echo "<td class='order-lower-text'>{$row3['format']}</td>
            <td class='order-lower-text'>{$row3['quantity']}</td>";
          
            $sql4 = "SELECT price FROM products WHERE product_id={$row1['product_id']}";
            $result4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_assoc($result4);
            echo "<td class='order-lower-text'>{$row4['price']}$</td>
            </tr>";
        }
        echo "</table>";
        ?>           
        
        <br><br>
        <label class="order-lower-text" for="total-order-amount">Total order amount: </label>&nbsp;
        <?php
            // Get order total from sales
            $sql_sales = "SELECT product_id, format, quantity FROM sales WHERE order_id = {$row['order_id']}";
            $result_sales = mysqli_query($conn, $sql_sales);
            $order_total = 0;
            while($row_sales = mysqli_fetch_assoc($result_sales)){
              $sql_product = "SELECT price, format FROM products WHERE product_id = {$row_sales['product_id']}";
              $result_products = mysqli_query($conn, $sql_product);
              $row_products = mysqli_fetch_assoc($result_products);
              $product_price = $row_products['price'];
              $product_format = $row_products['format'];

              if($product_format == null){
                $order_total += $row_sales['quantity'] * $product_price;
              } else {
                $product_base_format = explode('/', $product_format)[0];
                $order_total += $row_sales['quantity'] * $product_price * ($row_sales['format']/$product_base_format);
              }
            }
        ?>
        <input type="text" style="text-align:right; font-weight:bold" id="total-order-amount" name="total-order-amount" value="$ <?php echo $order_total; ?>" readonly>&nbsp;&nbsp;&nbsp;
        <button type="submit" form="my-form" class="btn btn-info backstore-font">Save</button>
    </div>
    <br>
    <?php mysqli_close($conn); ?>
    <?php include "../includes/footer.html"; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
      /* Custom JS */
      document.getElementById("<?php echo $row_Initial['shipping_speed']; ?>").selected = "true";
    </script>
    </div>
  </body>
</html>