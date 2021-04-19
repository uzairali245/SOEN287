<html>
<body>

<?php
    include "../includes/dbc.php"; 
?>


<?php

    if ($_POST['order-id'] != "NULL") {
        $temp2 = $_POST['order-id'];
        $customerID = $_POST['customer-id'];
        $customerName = $_POST["customer-name"];
        $orderNumber = $_POST["order-number"];
        $orderDate = $_POST["order-date"];
        $deliveryDate = $_POST["delivery-date"];
        $deliveryAddress = $_POST["delivery-address"];
        $shippingSpeed = $_POST["shipping-speed"];
 
        $sql = "UPDATE orders SET order_id = '$orderNumber', order_date = '$orderDate', delivery_date = '$deliveryDate', delivery_address = '$deliveryAddress', shipping_speed = '$shippingSpeed' WHERE id = $temp2";
        $sql_Name = "UPDATE users SET first_name = '$customerName' WHERE id = $customerID";

        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql_Name) ) {
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

        $sql_Name = "SELECT id FROM users WHERE first_name='$customerName'";
        $result_Name = mysqli_query($conn, $sql_Name);
        $row_Name = mysqli_fetch_assoc($result_Name);
        $required = (int) $row_Name['id'];
 
        $sql = "INSERT INTO orders (order_id, customer_id, order_date, delivery_date, delivery_address, shipping_speed)
        VALUES ('$orderNumber', $required, '$orderDate', '$deliveryDate', '$deliveryAddress', '$shippingSpeed')";

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