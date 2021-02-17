<!DOCTYPE html>
<html lang="en">

<Head>
    <title>User login</title>

    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo&family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">

    <!--link to stylesheet -->
    <link rel="stylesheet" href="resources\css\style.css">
    <style>
        .login-container {
            width: 370px;
            height: 400px;
            top: 50%;
            left: 50%;
            position: absolute;
            border-style: solid;
            border-width: 2px;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            color: #fff;
            padding: 40px 20px;
        }



        .login-container h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 25px;
        }

        .login-container label {
            display: block;
        }

        .login-container div {
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        input[type="password"] {
            width: 100%;
            border: 1px solid;
            background: transparent;
            color: white;
            height: 40px;
        }

        .login-container input[type="text"]::placeholder,
        input[type="password"]::placeholder {
            text-align: center;
            color: #d3d3d3;

        }

        .login-container input[type="submit"] {
            width: 100%;
            border: none;
            outline: none;
            height: 40px;
            background-color: #EE4F3E;
            color: #ffff;

        }

        .login-container input[type="submit"]:hover {
            cursor: pointer;
            box-shadow: 1px 1px 10px #696969;
        }

        a {
            display: block;
            text-align: left;
            text-decoration: none;
            color: white;
            font-size: 12px;
            margin-top: 10px;
        }

        a:hover {
            color: #d3d3d3;

        }
    </style>

</head>


</Head>

<body>
    <?php include "includes/header.html"; ?>

    <div class="login-container">
        <form action="">
            <h1>LOGIN</h1>
            <div>
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter your username here" value="">
                

            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password here" value="">
            </div>
            <input type="submit" name="login" value="LOGIN">
            <a href="#">Forgot Password?</a>
            <a href="signup.php">Not a Member?</a>
        </form>
    </div>

    <?php include "includes/footer.html"; ?>
</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


</html>