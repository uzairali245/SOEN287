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

    .custom-page-container {
      margin-top: 120px;
      margin-left: 0px;
      margin-right: 0px;
      margin-bottom: 100px;
      padding-left: 0px;
      padding-right: 0px;
      padding-bottom: 100px;
      position: relative;
      height:auto;
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
    <?php include "../includes/header.html"; ?>
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
              <button class="btn btn-success backstore-font add-btn">Add</button>
            </div>
            <div class="col-lg-10" style="overflow-x: auto;">
              <table class="table table-striped table-bordered table-hover table-sm">
                <thead class="thead"><tr>
                    <th class="text-center backstore-font">ID</th>
                    <th class="text-center backstore-font">Name</th>
                    <th class="text-center backstore-font">Category</th>
                    <th class="text-center backstore-font">Price</th>
                    <th class="text-center backstore-font">Stock</th>
                </thead></tr>

                  <!-- Data -->
                  <tr>
                    <td>4093</td>
                    <td>Avocado</td>
                    <td>Fruits & Vegetables</td>
                    <td>$3.73/lb</td>
                    <td>82</td>
                    <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                    <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                  </tr>

                  <tr>
                    <td>6341</td>
                    <td>Fruit Loops</td>
                    <td>Dry Foods</td>
                    <td>$4.99ea</td>
                    <td>17</td>
                    <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                    <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                  </tr>

                  <tr>
                    <td>9645</td>
                    <td>Curry Powder</td>
                    <td>Powders & Spices</td>
                    <td>$8.99ea</td>
                    <td>36</td>
                    <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                    <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                  </tr>

                  <tr>
                    <td>7777</td>
                    <td>Croissant (6)</td>
                    <td>Baked Goods</td>
                    <td>$3.99</td>
                    <td>41</td>
                    <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                    <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                  </tr>

                  <tr>
                    <td>1201</td>
                    <td>Rice</td>
                    <td>Rice</td>
                    <td>$0.001/grain</td>
                    <td>250172102</td>
                    <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                    <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                  </tr>
              </table>
            </div>
          </div>
        </div>

        <!-- Orders tab -->
        <div class="tab-pane fade" id="orders">
          <div class="row justify-content-center">
            <div class="col-lg-2">
              <button class="btn btn-success backstore-font add-btn">Add</button>
            </div>
            <div class="col-lg-10" style="overflow-x: auto;">
              <table class="table table-striped table-bordered table-hover table-sm">
                <thead class="thead"><tr>
                    <th class="text-center backstore-font">ID</th>
                    <th class="text-center backstore-font">Date</th>
                    <th class="text-center backstore-font">Customer</th>
                    <th class="text-center backstore-font">Total</th>
                </thead></tr>

                  <!-- Data -->
                  <tr>
                    <td>1000000</td>
                    <td>21/01/2021</td>
                    <td>Steve</td>
                    <td>$404.23</td>
                    <td class="text-center"><button class="btn btn-warning backstore-font">Items</button></td>
                    <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                    <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                  </tr>

                  <tr>
                    <td>1000001</td>
                    <td>25/02/2021</td>
                    <td>Ronald</td>
                    <td>$213.08</td>
                    <td class="text-center"><button class="btn btn-warning backstore-font">Items</button></td>
                    <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                    <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                  </tr>

                  <tr>
                    <td>1000002</td>
                    <td>20/04/2020</td>
                    <td>Natalie</td>
                    <td>$142.67</td>
                    <td class="text-center"><button class="btn btn-warning backstore-font">Items</button></td>
                    <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                    <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                  </tr>
              </table>
            </div>
          </div>
        </div>

        <!-- Users tab -->
        <div class="tab-pane fade" id="users">
          <div class="row justify-content-center">
            <div class="col-lg-2">
                <button class="btn btn-success backstore-font add-btn">Add</button>
              </div>
              <div class="col-lg-10" style="overflow-x: auto; overflow-y: auto;">
                <table class="table table-striped table-bordered table-hover table-sm">
                  <thead class="thead"><tr>
                      <th class="text-center backstore-font">ID</th>
                      <th class="text-center backstore-font">Name</th>
                      <th class="text-center backstore-font">Role</th>
                  </thead></tr>

                    <!-- Data -->
                    <tr>
                      <td>0000001</td>
                      <td>Yuhong</td>
                      <td>Owner</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000002</td>
                      <td>Anne</td>
                      <td>Web Developer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000003</td>
                      <td>David</td>
                      <td>Web Developer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000004</td>
                      <td>Jay</td>
                      <td>Web Developer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000005</td>
                      <td>Mohamad</td>
                      <td>Web Developer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000006</td>
                      <td>Monica</td>
                      <td>Web Developer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000007</td>
                      <td>Uzair</td>
                      <td>Web Developer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000008</td>
                      <td>Ronald</td>
                      <td>Customer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000009</td>
                      <td>Steve</td>
                      <td>Customer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>

                    <tr>
                      <td>0000010</td>
                      <td>Natalie</td>
                      <td>Customer</td>
                      <td class="text-center"><button class="btn btn-warning backstore-font">Details</button></td>
                      <td class="text-center"><button class="btn btn-info backstore-font">Edit</button></td>
                      <td class="text-center"><button class="btn btn-danger backstore-font">Delete</button></td>
                    </tr>
                </table>
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
    </script>
    </div>
  </body>
</html>