<html>
<body>

<?php
    include "../includes/dbc.php"; 
?>


<?php 
    $customerName = $_POST["customer-name"];
    $orderNumber = $_POST["order-number"];
    $orderDate = $_POST["order-date"];
    $deliveryDate = $_POST["delivery-date"];
    $deliveryAddress = $_POST["delivery-address"];
    $shippingSpeed = $_POST["shipping-speed"];

    $sql = "INSERT INTO orders (customer, order_id, order_date, delivery_date, delivery_address, shipping_speed)
    VALUES ('$customerName', $orderNumber, '$orderDate', '$deliveryDate', '$deliveryAddress', '$shippingSpeed')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
    mysqli_close($conn);
    ?>
</body>
</html>