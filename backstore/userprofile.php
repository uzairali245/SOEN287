<?php 
  if ((!isset($_SESSION['user'])) || ($_SESSION['user']['role'] != "admin")){ 
    header("location: ../homepage.php");
}
?>
<!DOCTYPE html>
       <html lang="en" dir="ltr">

       <head>
         <meta charset="utf-8">
         <title>Edit User Profile</title>
         < <!-- Bootstrap CSS -->
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
           <!--link to stylesheet -->
           <link rel="stylesheet" href="../resources/css/style.css">
           <!-- Google font-->

           <link rel="preconnect" href="https://fonts.gstatic.com">
           <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">
       </head>
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

         form {

           width: 40%;
           margin-left: 50px;
         }

         h3 {
           color: #845555;
           margin-left: 50px;
           margin-bottom: 20px;
         }

         .prof {
           height: 160px;
           width: 160px;
           margin-left: 50px;
           margin-bottom: 25px;

         }

         img {
           display: inline-block;
         }

         .intro {
           display: inline-block;
           color: black;
           position: relative;
           top: -55px;
           margin-left: 20px;
         }



         .content-without-footer {
           padding-top: 0;
           padding-bottom: 130px;
           margin-left: 0px;
           margin-right: 0px;
           padding-left: 0px;
           padding-right: 0px;
         }
       </style>

       <body>
         <div class="content-without-footer">
           <?php include "../includes/header.php";
                 include "../includes/dbc.php";

                 if(array_key_exists("user_id", $_GET)) {
                   $temp = $_GET['user_id'];
                 } else {
                   $temp = "NULL";
                 }
      ?>
           <div class="custom-page-container">

             <h3>Edit Profile</h3>



             <?php  $sql = "SELECT first_name,last_name,email,password,postal_code,role FROM users WHERE user_id=$temp;";
              $result = mysqli_query($conn, $sql);
              if($temp!="NULL"){
              while ($row = mysqli_fetch_assoc($result))
                {

              ?>
             <form class="fo" action="data_editprofile.php" method="post">
               <input type="hidden" id="user-id" name="user-id" value="<?php echo $temp; ?>">
               <label for="">Name:</label>
               <div class="row mb-3">
                 <div class="col">

                   <input type="name" class="form-control" placeholder="First name" id="first-name" name="first-name"value="<?php echo $row ['first_name']; ?>">
                 </div>
                 <div class="col">
                   <input type="name" class="form-control" placeholder="Last name" id="last-name" name="last-name" value="<?php echo $row ['last_name']; ?>">
                 </div>
               </div>
               <label for="">Email:</label>
               <div class="row mb-3">
                 <div class="col">
                   <input type="email" class="form-control" placeholder="Current Email" value="<?php echo $row ['email']; ?>">
                 </div>
                 <div class="col">
                   <input type="email" class="form-control" placeholder="New Email" id="new-email" name="new-email">
                 </div>
               </div>
               <label for="">Password:</label>
               <div class="row mb-3">
                 <div class="col">
                   <input type="password" class="form-control" placeholder="Current Password"  value="<?php echo $row ['password']; ?>">
                 </div>
                 <div class="col">
                   <input type="name" class="form-control" placeholder="New Password" id="new-password" name="new-password">
                 </div>
               </div>
               <label for="">Postal Code:</label>
               <div class="row mb-3">
                 <div class="col">
                   <input type="address" class="form-control" placeholder="Current Postal code" value="<?php echo $row ['postal_code']; ?> ">
                 </div>
                 <div class="col">
                   <input type="address" class="form-control" placeholder="New Postal code" id="new-postal" name="new-postal">
                 </div>
               </div>
               <label>Are you staff or Customer?</label>
               <div class="input-group mb-3">

                 <select class="form-select" id="person-role" name="person-role">
                   <option selected><?php echo $row ['role']; ?></option>
                   <option id="person-role" name="person-role">Staff</option>
                   <option id="person-role" name="person-role">Customer</option>

                 </select>
               </div>
               <button type="submit" name="button" style="width:100px">Save</button>


             </form>
           <?php }} else {  //////This is else block
             ?>
             <form class="fo" action="data_editprofile.php" method="post">
               <input type="hidden" id="user-id" name="user-id" value="<?php echo $temp; ?>">
               <label for="">Name:</label>
               <div class="row mb-3">
                 <div class="col">

                   <input type="name" class="form-control" placeholder="First name" id="first-name" name="first-name"value="<?php  ?>">
                 </div>
                 <div class="col">
                   <input type="name" class="form-control" placeholder="Last name" id="last-name" name="last-name" value="<?php  ?>">
                 </div>
               </div>
               <label for="">Email:</label>
               <div class="row mb-3">

                 <div class="col">
                   <input type="email" class="form-control" placeholder="New Email" id="new-email" name="new-email">
                 </div>
               </div>
               <label for="">Password:</label>
               <div class="row mb-3">

                 <div class="col">
                   <input type="password" class="form-control" placeholder="New Password" id="new-password" name="new-password">
                 </div>
               </div>
               <label for="">Postal Code:</label>
               <div class="row mb-3">

                 <div class="col">
                   <input type="address" class="form-control" placeholder="New Postal code" id="new-postal" name="new-postal">
                 </div>
               </div>
               <label>Are you staff or Customer?</label>
               <div class="input-group mb-3">

                 <select class="form-select" id="person-role" name="person-role">
                   <option selected><?php  ?></option>
                   <option id="person-role" name="person-role">Staff</option>
                   <option id="person-role" name="person-role">Customer</option>

                 </select>
               </div>
               <button type="submit" name="button" style="width:100px">Save</button>


             </form>
           <?php } ?>


           </div>
         </div>

         <?php include "../includes/footer.html"; ?>
       </body>

       </html>
