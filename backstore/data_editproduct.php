<html>
<body>

<?php
    include "../includes/dbc.php";
?>


<?php

    if ($_POST['product-id'] != "NULL") {
        $temp2 = $_POST['product-id'];
        $productName = $_POST["product-name"];
        $productAisle = $_POST["select-aisle"];
        $productPrice = $_POST["change-price"];
        $productInventory = $_POST["change-inventory"];

        $sql = "UPDATE products SET name = '$productName',  aisle = '$productAisle', price = '$productPrice'/*, inventory = '$productInventory'*/ WHERE product_id = $temp2";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
      $productName = $_POST["product-name"];
      $productAisle = $_POST["select-aisle"];
      $productPrice = $_POST["change-price"];
      $productInventory = $_POST["change-inventory"];

        $sql = "INSERT INTO products (name, aisle, price, inventory)
        VALUES ('$productName', '$productAisle', '$orderDate', '$productPrice', '$productInventory')";

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
