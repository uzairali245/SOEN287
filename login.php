<!DOCTYPE html>
<html lang="en">

<Head>
    <title>Login</title>
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
    <style>
        body {
            font-size: 16px;
        }

        /*            pxiel size should only bge in pixels in the body */


        .form {
            display: block;
            text-align: center;
            margin-left: 600px;
            max-width: 0px;
            margin-top: 120px;
            /*this is for the white border*/
            border: 2px solid white;
            box-sizing: border-box;
            padding: 150px 555px 150px 150px;



        }

        button.login {
            display: inline-block;
            margin-left: 0px;
            margin-top: 10px;
            padding: 3px 69px 3px 69px;
            background-color: #EE4F3E;
            border-radius: 0px;
            color: aliceblue;
            width: 400px
        }



        .register-form label {

            font-size: 11px;
            font-family: sans-serif;
        }

        .form-login-header {
            margin-left:120px;
            color: white;
            font-size: 60px;

        }

        .login:hover,
        .login:active {
            background-color: #f16b5d;
        }

        .input-login[type="text"] {
            width: 400px;
            height: 49px;
            border: solid;
            border-color: white;
            border-width: 1px;
        }

        .input-login::placeholder {
            color: gainsboro;
            text-align: left;

        }

        .sub-login:hover {
            color: black;
        }

        label.sub-login-label {
            margin-top: 1000px;
            white-space: nowrap;
            max-width: 0px;
            font-size: 110%;
        }

        .register-form {
            max-width: 0px;
        }

        .email,
        .password {
            font-size: 500%;
        }
    </style>

</Head>

<body>
    <?php include "includes/header.html"; ?>

    <div class="login-page">
        <div class="form">
            <h3 class="form-login-header">Login</h3>
            <form class="register-form">
                <label for="email">Email</label>
                <input class="input-login" placeholder="Enter Email Here " id="email" type="text" />
                <label for="password">Password</label>
                <input class="input-login" placeholder="Enter Password Here" id="password" type="text" />
                <button class="login">Login</button><br><br>
                <label class="sub-login-label">Forgot Password? <a class="sub-login" href="#">Click Here</a></button>

            </form>
        </div>


    </div>

    <?php include "includes/footer.html"; ?>
</body>

</html>