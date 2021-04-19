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
  <title>Edit product</title>
</head>
<style>
  /* Custom CSS */
  .header.navbar {
    box-shadow: none;
  }

  body {
    background: #EBE2DE none repeat scroll 0 0;
    position: relative;
    margin: 0;
    padding: 0;
    height: auto;
    min-height: 100vh;
  }

  .content-without-footer {
    padding-top: 120px;
    padding-bottom: 130px;
    margin-left: 0px;
    margin-right: 0px;
    padding-left: 0px;
    padding-right: 0px;
  }

  .navbar-custom {
    background-color: #B35859;
    border-bottom: 10px solid #EFA060;
  }

  .custom-footer {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    background-color: #B35859;
    border-top: 10px solid #EFA060;
  }

  h3 {
    color: #845555;
    margin-left: 50px;
    margin-bottom: 20px;
  }

  h5 {
    color: #845555;
    margin-left: 50px;
    margin-bottom: 20px;

  }

  .beer {
    height: 350px;
    width: 350px;
    margin-left: 50px;
    margin-bottom: 20px;


  }



  .form-image {
    margin-left: 30%;
    height: auto;
  }

  .btn {
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    font-family: Arial;
    color: #ffffff;
    font-size: 20px;
    background: #bf0d00;
    padding: 10px 20px 10px 20px;
    text-decoration: none;
  }

  .btn:hover {
    background: #030a00;
    background-image: -webkit-linear-gradient(top, #030a00, #b51c0b);
    background-image: -moz-linear-gradient(top, #030a00, #b51c0b);
    background-image: -ms-linear-gradient(top, #030a00, #b51c0b);
    background-image: -o-linear-gradient(top, #030a00, #b51c0b);
    background-image: linear-gradient(to bottom, #030a00, #b51c0b);
    text-decoration: none;
  }

  table {
    margin-left: 50px;
    width: 100%;

  }
</style>

<body>
  <div class="content-without-footer">
    <div class="content-container ">


      <?php include "../includes/header.html";
            include "../includes/dbc.php";

            if(array_key_exists("product_id", $_GET)) {
              $temp = $_GET['product_id'];
            } else {
              $temp = "NULL";
            }
            //  echo"<p style='color: blue;'>$temp";
              //$conn =  mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

          /*  $sql = "SELECT name FROM products WHERE id=1;";
            $result= mysqli_query($conn, $sql);
              echo "<p style='color: blue;'>$result";*/
?>

      <h3>Edit Product</h3>
      <h5>Click on any field you would like to change and dont forget to Save!</h5>

      <div class="table-responsive">


        <table class="table">
          <tr>
            <td>
              <div class="form-content">
                <?php  $sql = "SELECT name,aisle,price,inventory FROM products WHERE product_id=$temp;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result))
                {

                ?>
                <form action="data_editproduct.php" method="post">
                  <input type="hidden" id="product-id" name="product-id" value="<?php echo $temp; ?>">


                  <label for="product-name">Product Name:</label>
                  <div class="row mb-3">


                    <input type="name" class="form-control" id="product-name" name="product-name" value="<?php echo $row ['name']; ?>">
                  </div>
                  <label for="select-aisle">Select Aisle:</label>
                  <div class="row mb-3">


                    <select class="form-select" name="select-aisle" id="select-aisle">
                      <option selected><?php echo $row ['aisle']; ?></option>
                      <option  name="select-aisle" id="select-aisle">Earth Produce</option>
                      <option  name="select-aisle" id="select-aisle">Dairy</option>
                      <option  name="select-aisle" id="select-aisle">Snacks</option>
                      <option  name="select-aisle" id="select-aisle">Drinks</option>
                      <option  name="select-aisle" id="select-aisle">Bakery</option>
                      <option  name="select-aisle" id="select-aisle">Interstellar foods</option>


                    </select>
                  </div>
                  <label for="change-price">Change Price:</label>
                  <div class="row mb-3">
                    <input type="price" class="form-control"name="change-price" id="change-price" placeholder="Price per bottle" value="<?php echo $row ['price']; ?>">
                  </div>
                  <label for="change-inventory">Inventory:</label>
                  <div class="row mb-3">
                    <div class="flex-grow-1 bd-highlight">
                      <button type="button" name="button" onclick="decrementFunction(this.form)" class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color: #bf0d00; border-color:  #bf0d00;" id="inc"> - </button>
                      <input type="text" name="qty" value="<?php echo $row ['inventory']; ?>" class="amount" id="qty" id="change-inventory">
                      <button type="button" name="button" onclick="incrementFunction(this.form)" class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #bf0d00; border-color:  #bf0d00;" id="dec"> + </button>
                    </div>
                  </div>

                  <button class="btn" type="submit" name="button" style="margin-top:30px">Save</button><br>
                </form>
              <?php } ?>
              </div>
            </td>
            <td>

            </td>
          </tr>
        </table>
      </div>
      <div class="container">
      </div>
    </div>
  </div>

  <?php include "../includes/footer.html"; ?>

  <script>
    function incrementFunction() {
      document.getElementById("qty").value = parseInt(document.getElementById("qty").value) + 1;
    }

    function decrementFunction() {
      if (document.getElementById("qty").value > 1) {
        document.getElementById("qty").value = parseInt(document.getElementById("qty").value) - 1;
      }

    }
  </script>
</body>

</html>

