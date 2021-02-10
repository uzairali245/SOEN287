<!DOCTYPE html>
<html lang="en">
    <Head>
    <title>Login</title>
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
        <style>
            .body{
                text-align: center;
            }
            
            
            div.form{
                display: block;
                text-align: center;
                margin-left: 850px;
                max-width: 0;
                margin-top: 380px;
                
            }
  
            button.login{
                display: inline-block;
                margin-left: 0px;
                margin-top: 10px;
                padding: 3px 80px 3px 80px; ;
            }
            .register-form{
                border: 5px solid white;
               
                padding: 100px 300px 100px 100px;
            }
            .register-form label{
                font-size: 11px;
                font-family: sans-serif;
            }
            
        </style>
        
    </Head>
    <body>
        <div class="login-page">
            <div class="form">
                
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