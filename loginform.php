<?php
if (isset($_GET['error'])) {

    if ($_GET['error'] == 'password_incorrect') {
      ?>
      <h4 >Login Failed due to incorrect password</h4>
      <?php
    }
  }
?>
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
        <form action="login.php " method="POST">
            <h1>Admin Login</h1>
            <div class="input">
            <input type="text" name="email" id="email" />
            <label > Email </label>
            </div>
            <div class="input box">
                <input type="password" name="password" id="password" />
                <label >Password</label>
                <div class="forgot"> <a href="#">Forgot Password?</a> 
            </div>
            </div>
            <input type="submit" name="login" value="Login" />
        </form>
    </div>
</div>
    
</body>
</html>


    

