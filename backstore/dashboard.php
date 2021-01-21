<!DOCTYPE html>
<!-- TODO Find a way to keep the same head across the website -->
  <head>
  <title>Backstore</title>
  <!-- favicon <link rel="icon" href="includes/favicon.png?"/> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <style>
    /* Custom CSS */
    a {text-align: center;}

    .table
    {
        text-align: left;
    }
    .thead
    {
        background-color: #454545;
        /*background-color: #2E86C1;*/
        color: white;
    }
    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th 
    {
        background-color: #ccc;
    }
  </style>
  <body>
    <?php include "../includes/header.html"; ?>
    <h2 class="display-4 text-center py-3 my-4">Backstore</h2>
    
    <nav class="nav justify-content-center nav-pills flex-column flex-md-row">
      <a class="nav-link active" href="#products" data-toggle="tab">Products</a>
      <a class="nav-link" href="#orders" data-toggle="tab">Orders</a>
      <a class="nav-link" href="#users" data-toggle="tab">Users</a>
    </nav>

    <hr/>

    <div class="tab-content">
      <!-- Products tab -->
      <div class="tab-pane active" id="products">
        <div class="row justify-content-center">
          <div class="col-sm-1">
            <button class="btn btn-success">Add</button>
          </div>
          <div class="col-md-10">
            <table class="table table-striped table-bordered table-hover table-sm">
              <thead class="thead"><tr>
                  <th class="text-center">ID</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Category</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">Stock</th>
              </thead></tr>

                <!-- Data -->
                <tr>
                  <td>4093</td>
                  <td>Avocado</td>
                  <td>Fruits & Vegetables</td>
                  <td>$3.73/lb</td>
                  <td>82</td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>6341</td>
                  <td>Fruit Loops</td>
                  <td>Dry Foods</td>
                  <td>$4.99ea</td>
                  <td>17</td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>9645</td>
                  <td>Curry Powder</td>
                  <td>Powders & Spices</td>
                  <td>$8.99ea</td>
                  <td>36</td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>7777</td>
                  <td>Croissant (6)</td>
                  <td>Baked Goods</td>
                  <td>$3.99</td>
                  <td>41</td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>1201</td>
                  <td>Rice</td>
                  <td>Rice</td>
                  <td>$0.001/grain</td>
                  <td>250172102</td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>
            </table>
          </div>
        </div>
      </div>

      <!-- Orders tab -->
      <div class="tab-pane" id="orders">
        <div class="row justify-content-center">
        <div class="col-sm-1">
            <button class="btn btn-success">Add</button>
          </div>
          <div class="col-md-10">
            <table class="table table-striped table-bordered table-hover table-sm">
              <thead class="thead"><tr>
                  <th class="text-center">ID</th>
                  <th class="text-center">Date</th>
                  <th class="text-center">Customer</th>
                  <th class="text-center">Total</th>
              </thead></tr>

                <!-- Data -->
                <tr>
                  <td>1000000</td>
                  <td>21/01/2021</td>
                  <td>Steve</td>
                  <td>$404.23</td>
                  <td class="text-center"><button class="btn btn-warning">Items</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>1000001</td>
                  <td>25/02/2021</td>
                  <td>Ronald</td>
                  <td>$213.08</td>
                  <td class="text-center"><button class="btn btn-warning">Items</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>1000002</td>
                  <td>20/04/2020</td>
                  <td>Natalie</td>
                  <td>$142.67</td>
                  <td class="text-center"><button class="btn btn-warning">Items</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>
            </table>
          </div>
        </div>
      </div>

      <!-- Users tab -->
      <div class="tab-pane" id="users">
        <div class="row justify-content-center">
        <div class="col-sm-1">
            <button class="btn btn-success">Add</button>
          </div>
          <div class="col-md-10">
            <table class="table table-striped table-bordered table-hover table-sm">
              <thead class="thead"><tr>
                  <th class="text-center">ID</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Role</th>
              </thead></tr>

                <!-- Data -->
                <tr>
                  <td>0000001</td>
                  <td>Yuhong</td>
                  <td>Owner</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000002</td>
                  <td>Anne</td>
                  <td>Web Developer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000003</td>
                  <td>David</td>
                  <td>Web Developer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000004</td>
                  <td>Jay</td>
                  <td>Web Developer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000005</td>
                  <td>Mohamad</td>
                  <td>Web Developer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000006</td>
                  <td>Monica</td>
                  <td>Web Developer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000007</td>
                  <td>Uzair</td>
                  <td>Web Developer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000008</td>
                  <td>Ronald</td>
                  <td>Customer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000009</td>
                  <td>Steve</td>
                  <td>Customer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>

                <tr>
                  <td>0000010</td>
                  <td>Natalie</td>
                  <td>Customer</td>
                  <td class="text-center"><button class="btn btn-warning">Details</button></td>
                  <td class="text-center"><button class="btn btn-info">Edit</button></td>
                  <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                </tr>
            </table>
          </div>
        </div>
      </div>
    </div>  

    <hr/>

    <?php include "../includes/footer.html"; ?>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        // Custom JS
    </script>
  </body>
</html>