<!DOCTYPE html>
<html lang="en">

<Head>
    <title>Login</title>
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">


</Head>

<body>
    <?php include "includes/header.html"; ?>

    <div class="login-page">
        <div class="form">
            <h3 class="form-login-header">Login</h3>
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


    </div>

    <?php include "includes/footer.html"; ?>
</body>

</html>