<html>
<body>

<?php
    include "../includes/dbc.php";
?>


<?php

    if ($_POST['product-id'] != "NULL") {
        $temp2 = $_POST['user-id'];
        $firstName = $_POST["first-name"];
        $lastName = $_POST["last-name"];
        $userEmail = $_POST["new-email"];
        $userPass = $_POST["new-password"];
        $userPostal = $_POST["new-postal"];
        $userRole = $_POST["person-role"];

        $sql = "UPDATE users SET first_name = '$firstName',  last_name = '$lastName', email = '$userEmail', password = '$userPass' , postal_code = '$userPostal', role = '$userRole' WHERE user_id = $temp2";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
      $firstName = $_POST["first-name"];
      $lastName = $_POST["last-name"];
      $userEmail = $_POST["new-email"];
      $userPass = $_POST["new-password"];
      $userPostal = $_POST["new-postal"];
      $userRole = $_POST["person-role"];

        $sql = "INSERT INTO users (first_name, last_name, email, password,postal_code,role)
        VALUES ('$firstName', '$lastName', '$userEmail', '$userPass', '$userPostal' , '$userRole')";

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
