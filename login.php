<!DOCTYPE html>
<html lang="en">
    <Head>
    <title>Login</title>
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
        <style>
            body{
                text-align: center;
            }
            
            
            .form{
                display: block;
                text-align: center;
                margin-left: 795px;
                max-width: 0;
                margin-top: 280px;
                /*this is for the white border*/
                border: 2px solid white;
                padding: 100px 275px 100px 100px;
                
            }
  
            button.login{
                display: inline-block;
                margin-left: 0px;
                margin-top: 10px;
                padding: 3px 70px 3px 70px;
                background-color: #EE4F3E;
                color: aliceblue;
            }
            .register-form{
                
            }
            .register-form label{
                font-size: 11px;
                font-family: sans-serif;
                color: wheat;
            }
            .form-login-header{
                max-width: 140px !important;
                color: wheat;
            }
            
        </style>
        
    </Head>
    <body>
        <div class="login-page">
            <div class="form">
                <h3 class="form-login-header" style="margin-left:50px">Login</h3>
                <form class="register-form">
                    <label for="email">Email</label>
                    <input id="email" type="text" />
                    <label for="password">Password</label>
                    <input id="password" type="text" />
                    <button class="login">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>