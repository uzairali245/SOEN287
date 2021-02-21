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

    h3{
      color:#845555;
      margin-left: 50px;
      margin-bottom: 20px;
    }
    h5{
      color:#845555;
      margin-left: 50px;
      margin-bottom: 20px;

    }
    .beer{
      height: 350px;
      width: 350px;
      margin-left: 50px;
      margin-bottom: 20px;


    }
    div.container {
      width: 100%;
      display: flex;
      flex-direction: row;
    }

    div.form-content, div.form-image {
      width: 50%;
    }
.form-image{
  margin-left: 200px;
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







    </style>
    <body>
        <div class="content-without-footer">
      <div class="content-container">


      <?php include "../includes/header.html"; ?>
      <h3>Edit Product</h3>
      <h5>Click on any field you would like to change and dont forget to Save!</h5>
<!--
      <div class="Product-img">
        <img class="beer"src="https://i2.wp.com/nlliquor.com/wp-content/uploads/2020/02/10417_m_v3.jpg?fit=960%2C1280&ssl=1" alt="">
        <button type="submit" name="button">Change Product Photo</button>

      </div>
    -->

      <div class="container">
        <div class='form-content'> <form class="fo" >

          <label for="">Product Name:</label>
          <div class="row mb-3" >


              <input type="name" class="form-control" placeholder="Product Name" value="Corona Beer" >
            </div>
            <label for="">Select Aisle:</label>
            <div class="row mb-3" >


              <select class="form-select" >
                <option selected>Select</option>
                <option value="1">Earth Produce</option>
                <option value="2">Dairy</option>
                <option value="3">Snacks</option>
                <option value="4">Drinks</option>
                <option value="5">Bakery</option>
                <option value="6">Interstellar foods</option>


              </select></div>
              <label for="">Change Price:</label>
              <div class="row mb-3" >


                  <input type="price" class="form-control" placeholder="Price per bottle" value="5.00$" >
                </div>

                <label for="">Inventory:</label>
                <div class="row mb-3" >


                  <div class="flex-grow-1 bd-highlight">
                      <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color: #bf0d00; border-color:  #bf0d00;"> - </button>
                      <span>1</span>
                      <button class="btn btn-primary rounded-circle btn-sm py-0 " style="background-color:  #bf0d00; border-color:  #bf0d00;"> + </button>
                  </div>
                  </div>

                  <button class="btn"type="submit" name="button" style="margin-top:30px">Save</button>






        </form> </div>
        <div class='form-image'>
          <img class="beer"src="https://i2.wp.com/nlliquor.com/wp-content/uploads/2020/02/10417_m_v3.jpg?fit=960%2C1280&ssl=1" alt="">
          <button class="btn"type="submit" name="button"style="margin-left: 55px;
          margin-top: 20px;">Change Product Photo</button>

        </div>
      </div>





      </div>
        </div>

        <?php include "../includes/footer.html"; ?>
          </body>
        </html>
