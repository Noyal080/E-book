<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>

    <main class="flex">
    <div class="rcontainer">
        <div class="user">        </div>
        <form action="reg.php" method="POST">
            <h1>Register</h1>
            <div class="input">
            <input type="text" name="uname" id="user" required/>
            <label >Username</label>
            </div>
            <div class="input">
                <input type="email" name="email" id="email" required/>
                <label>Email</label>
            </div>
            <div class="input box">
                <input type="password" name="pass" id="pword" required/>
                <label >Password</label>
                <div class="forgot">            </div>
            </div>
            <input type="submit" value="Register" name="register" />
        </form>
            <div class="div">
                <div class="line"> </div>
                <div class="signup">Already have a account?
                    <a href="userloginform.php">Login Here</a></div>
               
            </div>
    </div>
</main>

</body>
</html>