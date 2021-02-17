<!DOCTYPE html>
<html lang="en">

<Head>
    <title>Signup</title>
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
    
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

</html>