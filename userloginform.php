
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
 

  
</head>
<body>
    
<div class="flex">
    <div class="container">
        <div class="user">        </div>
        <form action="userlog.php" method="POST">
            <h1>Log In</h1>
            <div class="input">
            <input type="text" name="username" id="username" required/>
            <label >Username</label>
            </div>
            <div class="input box">
                <input type="password" name="password" id="password" required/>
                <label >Password</label>
                <div class="forgot"> <a href="#">Forgot Password?</a> 
            </div>
            </div>
            <input type="submit" name="log" value="Login" />
        </form>
            <div class="div">
                <div class="line"> </div>
                <div class="signup">Dont have a account?
                    <a href="register.php">Sign up?</a></div>
               
            </div>
    </div>
</div>
    
</body>
</html>



