<html>
<body>

<?php
    include "../includes/dbc.php"; 
?>


<?php 
    $customerName = $_POST["customer-name"];;
    $orderNumber = $_POST["order-number"];
    $orderDate = $_POST["order-date"];
    $deliveryDate = $_POST["delivery-date"];
    $deliveryAddress = $_POST["delivery-address"];
    $shippingSpeed = $_POST["shipping-speed"];
    echo $customerName;
    ?>
</body>
</html>