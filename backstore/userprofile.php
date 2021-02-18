<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User Profile</title>
    <link rel="stylesheet" href="formstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--link to stylesheet -->
    <link rel="stylesheet" href="../resources/css/style.css">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">

  </head>
  <style>
  .form-row{
    width: 50%;
  }
  </style>

  <body>
    <?php include "includes/header.html"; ?>

    <form>
      <div class="extra">


    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" placeholder="First name">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Last name">
      </div>
    </div>

    <div class="form-row">
      <div class="col">
        <input type="email" class="form-control" placeholder=" Previous Email">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="New Email">
      </div>
    </div>



    <div class="form-row">
      <div class="col">
        <input type="password" class="form-control" placeholder="Old Password">
      </div>
      <div class="col">
        <input type="password" class="form-control" placeholder="New Password">
      </div>
    </div>

</div>




  </form>


  </body>
</html>
