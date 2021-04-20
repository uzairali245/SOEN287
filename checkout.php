<?php include "includes/session.php";?>
<?php if(!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();  
} 
?>

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
            <?php 
            
                include "includes/header.html"; 
                include "includes/dbc.php";

                if(isset($_POST['shipping'])){

                
                    //$_SESSION["user"] = 9; // TEMPORARY STATIC USER ID 

                    $todate = getdate()['year']."-".getdate()['mon']."-".getdate()['mday']; // Current date as YYYY-MM-DD

                    $user_id = $_SESSION['user']['id'];
                    //$user_id = 1;

                    $order_id = $user_id.getdate()['year'].getdate()['mon'].getdate()['mday'].getdate()['hours'].getdate()['minutes'].getdate()['seconds'];
                    echo "<script>";
                    echo "console.log($order_id);";
                    echo "</script>";
                    
                    

                    $result = mysqli_query($conn, "Select * from users where user_id = $user_id;");
                    echo "<script>";
                    echo "console.log('searching for user...');";
                    echo "</script>";

                    if (!$result) {
                        echo "<script>";
                        echo "console.log('Could not find user');";
                        echo "</script>";
                    } else {
                        echo "<script>";
                        echo "console.log('fetched user');";
                        echo "</script>";
                    }

                    $row = mysqli_fetch_assoc($result);

                    $delivery_address = $row['address']. " " . $row['postal_code']. " " . $row['province'];

                    $shipping_speed;

                    if($_POST['shipping'] == 0 ){
                        $shipping_speed = "Free Delivery";
                    } else if ($_POST['shipping'] == 5 ){
                        $shipping_speed = "Express Delivery";
                    } else {
                        $shipping_speed = "Same Day Delivery";
                    }

                    //Free 
                    //Express
                    //Same Day 

                    //decrement inventory

                    //Add each order
                    $new_order = "INSERT INTO orders (order_id, customer_id, order_date, delivery_date, delivery_address, shipping_speed) VALUES('$order_id', '$user_id', '$todate', NULL ,'$delivery_address', '$shipping_speed');";
                    $orderAdded = false;

                    if (mysqli_query($conn, $new_order)){
                        echo "<script>";
                        echo "console.log('Order added successfully');";
                        echo "</script>";
                        $orderAdded = true;
                    } else {
                        echo "<script>";
                        echo "console.log('Unable to add order'" . mysqli_error($conn). ");" ;
                        echo "</script>";
                    }

                
                    //Add each item to sale cart

                    if ($orderAdded) {

                        $NumOfItemsProcessed = 0;
                        $Counter = 0;

                        foreach ($_SESSION["customercart"] as $item){

                            $productId = $item['product_id'];
                            $format = $item['format'];
                            $qty = $item['qty'];

                            $productName = "one of your products";

                            $result = mysqli_query($conn, "Select inventory, name from products where product_id = $productId;");
                        
                            if (!$result) {
                                echo "<script>";
                                echo "console.log('Could not find product:' " . mysql_error() . ");";
                                echo "</script>";
                            } else {
                                echo "<script>";
                                echo "console.log('Fetched Product');";
                                echo "</script>";
                            }

                            
                            $row = mysqli_fetch_assoc($result);
                            if($row){
                                $productName = $row['name'];
                            }
                            
                            $InventoryDecremented = false;

                            //$result = mysqli_query($conn, "Select inventory from products where product_id = $productId;");
                                    //$row = mysqli_fetch_assoc($result);

                            $NumItemsInCart = sizeof($_SESSION["customercart"]);
                            

                            $inventory = $row['inventory'];
                            $expectedInventory = 0;
                            $enoughInventory = false;

                            if($inventory > 0 ){

                                $enoughInventory = true;

                                if (!is_null($format)){

                                    $expectedInventory = $inventory - $qty*$format;
                                    echo "<script>";
                                    echo "console.log('Inventory: " . strval($inventory) . "');";
                                    echo "</script>";

                                    if ($expectedInventory < 0) {
                                        echo "<script>";
                                        echo "console.log('Ordered more than capacity! Won/'t add item to order');";
                                        echo "</script>";
                                        echo "<h3> Our apologies, we don't have enough of " . $productName . " to your order. </h3>" ;
                                        echo "<h3> We will send you what we have left! </h3>" ;
                                        $inventory = 0 ; 
                                    } else {
                                        echo "<script>";
                                        echo "console.log('Inventory is good for order!');";
                                        echo "</script>";
                                        $inventory = $expectedInventory;
                                    }
                                    
                                } else {
                                    $expectedInventory = $inventory - $qty;

                                    echo "<script>";
                                    echo "console.log('Inventory: " . strval($inventory) . "');";
                                    echo "</script>";

                                    if ($expectedInventory < 0 ){
                                        echo "<script>";
                                        echo "console.log('Ordered more than capacity! Will not add item to order');";
                                        echo "</script>";
                                        echo "<h3> Our apologies, we don't have enough of " . $productName . " to your order. </h3>" ;
                                        echo "<h3> We will send you what we have left! </h3>" ;
                                        $inventory = 0 ;  
                                    } else {
                                        echo "<script>";
                                        echo "console.log('Inventory is good for order!');";
                                        echo "</script>";
                                        $inventory = $expectedInventory;
                                    }
                                    
                                }
                            } else {
                                    echo "<script>";
                                    echo "console.log('Ordered more than capacity! Will not add item to order');";
                                    echo "</script>";
                                    echo "<h3> Our apologies, we don't have " . $productName . " in stock. </h3>" ;
                            }

                            echo "<script>";
                            echo "console.log('Modifying inventory...');";
                            echo "</script>";

                            echo "<script>";
                            echo "console.log('Inventory: " . strval($inventory) . "');";
                            echo "</script>";

                            if ($enoughInventory){

                                echo "<script>";
                                echo "console.log('Processing inventory...');";
                                echo "</script>";

                                    $modify_inventory = "UPDATE products SET inventory = '$inventory' WHERE product_id = '$productId';";

                                if (mysqli_query($conn, $modify_inventory)){
                                    echo "<script>";
                                    echo "console.log('Inventory modified');";
                                    echo "</script>";
                                    $NumOfItemsProcessed++;
                                    $InventoryDecremented = true;
                                } else {
                                    echo "<script>";
                                    echo "console.log('Unable to modify inventory'" . mysqli_error($conn) . ");";
                                    echo "</script>";
                                }

                            }

                            if ($qty > 0 && $InventoryDecremented) {


                                $new_sale = "INSERT INTO sales (product_id, order_id," . "format" . ", quantity) VALUES('$productId', '$order_id', '$format', '$qty');";
                    

                                if (mysqli_query($conn, $new_sale)){
                                    $Counter ++;
                                    echo "<script>";
                                    echo "console.log('Sale " . $Counter . " added successfully');";
                                    echo "</script>";
                                    
                                } else {
                                    echo "<script>";
                                    echo "console.log('Unable to add sale'" .mysqli_error($conn). ");" ;
                                    echo "</script>";

                                    $remove_order = "DELETE FROM orders WHERE order_id =". $order_id . ";";

                                    if (mysqli_query($conn, $remove_order)){
                                        echo "<script>";
                                        echo "console.log('Order Removed Successfully');";
                                        echo "</script>";
                                    } else {
                                        echo "<script>";
                                        echo "console.log('Unable to remove order' " . mysqli_error($conn) . ");";
                                        echo "</script>";
                                    }
                                }
                            }
                        }
                    } 
                }
     
            ?>
            <div>
                <div class="checkout-message">
                    <?php 

                    if($NumOfItemsProcessed == $NumItemsInCart){
                        echo "<h2> Thank you for your order </h2>";
                        echo " <h3 style= 'padding: 0 30px; font-weight: 300; font-style: normal; font-family: 'Exo', sans-serif'> Your order number is $order_id </h3>";
                        $_SESSION["customercart"] = array();
                    } else if ($NumOfItemsProcessed == 0) {
                        echo "<h2> We're sorry, there was an error completing your order. Please try again later </h2>";
                        $remove_order= "DELETE FROM orders WHERE order_id =". $order_id . ";";
                        $remove_sales = "DELETE FROM sales WHERE order_id =". $order_id. ";";
                         

                                    if (mysqli_query($conn, $remove_order)){
                                        echo "<script>";
                                        echo "console.log('Orders (1) Removed Successfully');";
                                        echo "</script>";
                                    } else {
                                        echo "<script>";
                                        echo "console.log('Unable to remove order and sales" . mysqli_error($conn). "');" ;
                                        echo "</script>";
                                    }

                                    if (mysqli_query($conn, $remove_sales)){
                                        echo "<script>";
                                        echo "console.log('Sales (2) Removed Successfully');";
                                        echo "</script>";
                                    } else {
                                        echo "<script>";
                                        echo "console.log('Unable to remove order and sales" . mysqli_error($conn). "');" ;
                                        echo "</script>";
                                    }

                    } else {
                        echo "<h2> We weren't able to process all items </h2>";
                        echo "<h2> Thank you for your order </h2>";
                        echo " <h3 style= 'padding: 0 30px; font-weight: 300; font-style: normal; font-family: 'Exo', sans-serif'> Your order number is $order_id </h3>";
                    }

                    ?>
                    
                </div>
            </div>
            
            </section>
            <?php include "includes/footer.html"; ?>
        </div> 
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    </body>

</html>