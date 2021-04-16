<html>
<body>

<?php
    include "../includes/dbc.php"; 
?>


<?php

    if ($_POST['order-id'] != "NULL") {
        $temp2 = $_POST['order-id'];
        $customerName = $_POST["customer-name"];
        $orderNumber = $_POST["order-number"];
        $orderDate = $_POST["order-date"];
        $deliveryDate = $_POST["delivery-date"];
        $deliveryAddress = $_POST["delivery-address"];
        $shippingSpeed = $_POST["shipping-speed"];
 
        $sql = "UPDATE orders SET customer = '$customerName', order_id = '$orderNumber', order_date = '$orderDate', delivery_date = '$deliveryDate', delivery_address = '$deliveryAddress', shipping_speed = '$shippingSpeed' WHERE id = $temp2";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
  
        mysqli_close($conn);
    } else {
        $customerName = $_POST["customer-name"];
        $orderNumber = $_POST["order-number"];
        $orderDate = $_POST["order-date"];
        $deliveryDate = $_POST["delivery-date"];
        $deliveryAddress = $_POST["delivery-address"];
        $shippingSpeed = $_POST["shipping-speed"];
 
        $sql = "INSERT INTO orders (customer, order_id, order_date, delivery_date, delivery_address, shipping_speed)
        VALUES ('$customerName', '$orderNumber', '$orderDate', '$deliveryDate', '$deliveryAddress', '$shippingSpeed')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
  
       mysqli_close($conn);
    }
    ?>
</body>
</html>