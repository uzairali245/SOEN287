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
    body {
      background: #EBE2DE none repeat scroll 0 0;
      position: relative;
      margin: 0;
      padding: 0;
      height: auto;
      min-height: 100vh;
    }

    .content-without-footer {
      padding-top:120px;
      padding-bottom: 130px;
      margin-left: 0px;
      margin-right: 0px;
      padding-left: 0px;
      padding-right: 0px;
    }

    .navbar-custom {
      background-color: #B35859;
      border-bottom:10px solid #EFA060;
    }

    .custom-footer {
        position: absolute;
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
    include "../includes/dbc.php"; 
      if (isset($_POST['delete']) && isset($_POST['table'])){
        $table_to_delete = $_POST['table'];
        if ($table_to_delete == "prd") {
          $table_to_delete = "products";
        } else if ($table_to_delete == "usr") {
          $table_to_delete = "users";
        } else if ($table_to_delete == "ordr") {
          $table_to_delete = "orders";
        }
        $id_to_delete = $_POST['delete'];
        $sql = "DELETE FROM $table_to_delete WHERE id = $id_to_delete";
        mysqli_query($conn, $sql);
      }
      
      
      include "../includes/header.php"; 
      
    ?>
      <!-- Tab list -->
      <ul class="nav nav-tabs flex-column flex-md-row justify-content-center">
        <li class="nav-item">
          <button class="nav-link active tab-item" data-bs-toggle="tab" data-bs-target="#products">Products</button>
        </li>
        <li class="nav-item">
          <button class="nav-link tab-item" data-bs-toggle="tab" data-bs-target="#orders">Orders</button>
        </li>
        <li class="nav-item">
          <button class="nav-link tab-item" data-bs-toggle="tab" data-bs-target="#users">Users</button>
        </li>
      </ul>

      <!-- Tab content -->
      <div class="tab-content my-tab">
        <!-- Product tab -->
        <div class="tab-pane fade show active" id="products">
          <div class="row justify-content-center">
            <div class="col-lg-2">
              <a class="btn btn-success backstore-font add-btn" href="./editproduct.php">Add</a>
            </div>
            <div class="col-lg-10" style="overflow-x: auto;">
            <input style="color: black; width:100px; text-align:left;" id='searchProducts' onkeyup='searchTable("Products")' type='text' placeholder="Search...">
              <table id="Products" class="table table-striped table-bordered table-hover table-sm">
                <thead class="thead"><tr>
                    <th class="text-center backstore-font">ID</th>
                    <th class="text-center backstore-font">Name</th>
                    <th class="text-center backstore-font">Category</th>
                    <th class="text-center backstore-font">Price</th>
                    <th class="text-center backstore-font">Stock</th>
                </thead></tr>

                <?php // Data
                    $sql = "SELECT id,product_id,name,aisle,price,inventory FROM products;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo"<tr><td>{$row['product_id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['aisle']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['inventory']}</td>
                        <td class='text-center'><a class='btn btn-info backstore-font' href='./editproduct.php?product_id={$row['product_id']}'>Edit</a></td> 
                        <td class='text-center'><form action='' method='post'><input type='hidden' name='delete' value='{$row['id']}'><input type='hidden' name='table' value='prd'><button class='btn btn-danger backstore-font' onClick='return confirmSubmit()'>Delete</button></form></td>
                        </tr>";
                    }
                    echo"</table>";
                  ?>
            </div>
          </div>
        </div>

        <!-- Orders tab -->
        <div class="tab-pane fade" id="orders">
          <div class="row justify-content-center">
            <div class="col-lg-2">
              <a class="btn btn-success backstore-font add-btn" href="./backstore_edit_order_profile.php">Add</a>
            </div>
            <div class="col-lg-10" style="overflow-x: auto;">
            <input style="color: black; width:100px; text-align:left;" id='searchOrders' onkeyup='searchTable("Orders")' type='text' placeholder="Search...">
              <table id="Orders" class="table table-striped table-bordered table-hover table-sm">
                <thead class="thead"><tr>
                    <th class="text-center backstore-font">ID</th>
                    <th class="text-center backstore-font">Order Date</th>
                    <th class="text-center backstore-font">Customer ID</th>
                    <th class="text-center backstore-font">Name</th>
                    <th class="text-center backstore-font">Total</th>
                </thead></tr>

                <?php // Data
                    $sql = "SELECT * FROM orders;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                      // Get Customer's first name from ID
                      $sql_first_name = "SELECT first_name FROM users WHERE user_id = {$row['customer_id']};";
                      $result_first_name = mysqli_query($conn, $sql_first_name);
                      $customers_first_name = mysqli_fetch_assoc($result_first_name)['first_name'];

                      // Get order total from sales
                      $sql_sales = "SELECT product_id, format, quantity FROM sales WHERE order_id = {$row['order_id']}";
                      $result_sales = mysqli_query($conn, $sql_sales);
                      $order_total = 0;
                      while($row_sales = mysqli_fetch_assoc($result_sales)){
                        $sql_product = "SELECT price,format FROM products WHERE product_id = {$row_sales['product_id']}";
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

                      echo"<tr><td>{$row['order_id']}</td>
                      <td>{$row['order_date']}</td>
                      <td>{$row['customer_id']}</td>
                      <td>{$customers_first_name}</td>
                      <td>{$order_total}</td>
                      <td class='text-center'><a class='btn btn-info backstore-font' href='./backstore_edit_order_profile.php?order_id={$row['id']}'>Edit</a></td>
                      <td class='text-center'><form action='' method='post'><input type='hidden' name='delete' value='{$row['id']}'><input type='hidden' name='table' value='ordr'><button class='btn btn-danger backstore-font' onClick='return confirmSubmit()'>Delete</button></form></td>
                      </tr>";
                    }
                    echo"</table>";
                  ?>
            </div>
          </div>
        </div>

        <!-- Users tab -->
        <div class="tab-pane fade" id="users">
          <div class="row justify-content-center">
            <div class="col-lg-2">
                <a class="btn btn-success backstore-font add-btn" href="./userprofile.php">Add</a>
              </div>
              <div class="col-lg-10" style="overflow-x: auto; overflow-y: auto;">
              <input style="color: black; width:100px; text-align:left;" id='searchUsers' onkeyup='searchTable("Users")' type='text' placeholder="Search...">
                <table id="Users" class="table table-striped table-bordered table-hover table-sm">
                  <thead class="thead"><tr>
                      <th class="text-center backstore-font">ID</th>
                      <th class="text-center backstore-font">Name</th>
                      <th class="text-center backstore-font">Role</th>
                  </thead></tr>
                  <?php // Data
                    $sql = "SELECT id,user_id,first_name,last_name,role FROM users;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo"<tr><td>{$row['user_id']}</td>
                        <td>{$row['first_name']} {$row['last_name']}</td>
                        <td>{$row['role']}</td>
                        <td class='text-center'><a class='btn btn-info backstore-font' href='./userprofile.php?user_id={$row['user_id']}'>Edit</a></td> 
                        <td class='text-center'><form action='' method='post'><input type='hidden' name='delete' value='{$row['id']}'><input type='hidden' name='table' value='usr'><button class='btn btn-danger backstore-font' onClick='return confirmSubmit()'>Delete</button></form></td>
                        </tr>";
                    }
                    echo"</table>";
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "../includes/footer.html"; ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
      /* Custom JS */
      function confirmSubmit(){
        var confirmed = confirm("Are you sure you wish to delete this item?");
        if(confirmed) 
          return true;
        else 
          return false;
      }

      function searchTable(tableparam) {
        var input, filter, found, table, tr, td, i, j;
        input = document.getElementById("search" + tableparam);
        filter = input.value.toUpperCase();
        table = document.getElementById(tableparam);
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (tableparam == "Orders"){
            td = tr[i].getElementsByTagName("td")[3];
          }
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>
    </div>
  </body>
</html>