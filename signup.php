<!DOCTYPE html>
<html lang="en">

<Head>
    <title>User login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet"> 

    <!--link to stylesheet -->
    <link rel="stylesheet" href="resources\css\style.css"> 
    
</Head>

<body>
    <?php include "includes/header.html"; ?>

    <div class="signup-page">
        <div class="form-signup">
            <h3 class="form-signup-header">Signup</h3>
            <br></br>
            <form class="register-form-signup">

                <input class="input-signup" placeholder="Email " id="email" type="text" />

                <input class="input-signup" placeholder="Confirm Email" id="confirm-email" type="text" />
                <br></br>
                <input class="input-signup" placeholder="First name" id="fist-name" type="text" />

                <input class="input-signup" placeholder="Last Name" id="last-name" type="text" />
                <br></br>
                <input class="input-signup" placeholder="Password" id="password" type="text" />

                <input class="input-signup" placeholder="Confirm Password" id="confirm-password" type="text" />
                <br></br>
                <input class="input-signup" placeholder="Language" id="language" type="text" />

                <input class="input-signup" placeholder="Province" id="province" type="text" />
                <br></br>
                <button class="signup">Signup</button><br><br>
                <label class="sub-signup-label">Already a Member? <a class="sub-signup" href="login.php">Click Here</a></label>

            </form>
        </div>


    </div>

    <?php include "includes/footer.html"; ?>
</body>
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>



</html>