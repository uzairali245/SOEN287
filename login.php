<!DOCTYPE html>
<html lang="en">

<Head>
    <title>User login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">

    <!--link to stylesheet -->
    <link rel="stylesheet" href="resources\css\style.css">
</head>


</Head>

<body>
    <?php include "includes/header.html"; ?>

    <div class="login-page container-fluid">
        <!-- <div class="col-md-4 col-sm-4"></div> -->

        <div class="form d-flex justify-content-center">
            <h3 class=" form-login-header">Login</h3>
            <br><br>
            <form class="register-form">
                <!-- <label for="email">Email</label> -->
                <input class="input-login" placeholder="Email" id="email" type="text" />
                <!-- <label for="password">Password</label> -->
                <br></br>
                <input class="input-login" placeholder="Password" id="password" type="text" />
                <button class="login">Login</button><br><br>
                <label class="sub-login-label">Forgot Password? <a class="sub-login" href="#">Click Here</a></label><br><br>
                <label class="sub-login-label">Not a Member? <a class="sub-login" href="signup.php">Click Here</a></label>
            </form>

        </div>
        <!-- <div class="col-md-4 col-sm-4"></div> -->

    </div>

    <?php include "includes/footer.html"; ?>
</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


</html>