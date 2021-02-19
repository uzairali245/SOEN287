  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Edit User Profile</title>
      <
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <!--link to stylesheet -->
          <link rel="stylesheet" href="../resources/css/style.css">
          <!-- Google font-->

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet"></head>
    <style>


        /* Custom CSS */
        body {
          background: #EBE2DE none repeat scroll 0 0;
          position: relative;
          margin: 0;
          padding: 0;
          min-height: 100%;
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
        form{
          allign:center;
          width: 40%;
          margin-left: 50px;





        }




    </style>

    <body>
      <?php include "../includes/header.html"; ?>
  <div class="custom-page-container">




    
    <form >
      <div class="row mb-3" >
        <div class="col">
          <input type="name" class="form-control" placeholder="First name" >
        </div>
        <div class="col">
          <input type="name" class="form-control" placeholder="Last name" >
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <input type="email" class="form-control" placeholder="Previous Email" >
        </div>
        <div class="col">
          <input type="email" class="form-control" placeholder="New Email" >
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <input type="password" class="form-control" placeholder="Old Password" >
        </div>
        <div class="col">
          <input type="name" class="form-control" placeholder="New Password" >
        </div>
      </div>
    </form>


  </div>

  <?php include "../includes/footer.html"; ?>
    </body>
  </html>

