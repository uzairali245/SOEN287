<!DOCTYPE html>
<html lang="en">

<Head>
    <title>Signup</title>
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">


</Head>

<body>
    <?php include "includes/header.html"; ?>

    <div class="Signup-page">
        <div class="form">
            <h3 class="form-Signup-header">Signup</h3>
            <form class="register-form">
                <label for="email">Email</label>
                <input class="input-Signup" placeholder="Enter Email Here " id="email" type="text" />
                <label for="password">Password</label>
                <input class="input-Signup" placeholder="Enter Password Here" id="password" type="text" />
                <button class="Signup">Signup</button><br><br>
                <label class="sub-Signup-label">Forgot Password? <a class="sub-Signup" href="#">Click Here</a></button>

            </form>
        </div>


    </div>

    <?php include "includes/footer.html"; ?>
</body>

</html>