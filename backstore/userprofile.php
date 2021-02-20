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
        h3{
          color:#845555;
          margin-left: 50px;
          margin-bottom: 20px;
        }
        .prof{
          height: 160px;
          width: 160px;
          margin-left: 50px;
          margin-bottom: 25px;

        }

        img{
          display: inline-block;
        }
        .intro{
          display: inline-block;
          color: black;
          position:relative;
          top: -55px;
          margin-left: 20px;
        }
        .yo{
          display: inline-block;
          position: relative;
          right: 240px;
          top: 25px;
        }



        .dropbtn {

  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: red;
}




    </style>

    <body>
      <?php include "../includes/header.html"; ?>
  <div class="custom-page-container">
<h3>Edit Profile</h3>
<img  class="prof"src="https://static.toiimg.com/photo/msid-73951313/73951313.jpg" alt="Cr7">
<div class="intro">
  <h4>Cristiano Ronaldo</h5>

</div>
<button class="yo"type="submit" name="button">Change Photo </button>




    <form >
      <label for="">Name:</label>
      <div class="row mb-3" >
        <div class="col">

          <input type="name" class="form-control" placeholder="First name" value="Cristiano" >
        </div>
        <div class="col">
          <input type="name" class="form-control" placeholder="Last name" value="Ronaldo">
        </div>
      </div>
      <label for="">Email:</label>
      <div class="row mb-3">
        <div class="col">
          <input type="email" class="form-control" placeholder="Current Email" value="cr7@gmail.com">
        </div>
        <div class="col">
          <input type="email" class="form-control" placeholder="New Email" >
        </div>
      </div>
      <label for="">Password:</label>
      <div class="row mb-3">
        <div class="col">
          <input type="password" class="form-control" placeholder="Old Password" value="1234567" >
        </div>
        <div class="col">
          <input type="name" class="form-control" placeholder="New Password" >
        </div>
      </div>
      <label for="">Postal Code:</label>
      <div class="row mb-3">
        <div class="col">
          <input type="address" class="form-control" placeholder="Current Postal code" value="R2M 4B9" >
        </div>
        <div class="col">
          <input type="address" class="form-control" placeholder="New Postal code" >
        </div>
      </div>

      <div class="dropdown">
  <button class="dropbtn">Occupation</button>
  <div class="dropdown-content">
  <a href="#">Employee</a>
  <a href="#">Customer</a>

  </div>
</div>


    </form>




  </div>

  <?php include "../includes/footer.html"; ?>
    </body>
  </html>


