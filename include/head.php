<?php
include 'C:\xampp\htdocs\Ecom\include\connect.php';

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }

}

?>


<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
         <a href="https://www.facebook.com"> <i class="fab fa-facebook-f"></i> </a>
         <a href="https://www.twitter.com"> <i class="fab fa-twitter"></i> </a>
         <a href="https://www.instagram.com"> <i class="fab fa-instagram"></i>  </a>
         <a href="https://www.linkedin.com"> <i class="fab fa-linkedin"></i> </a>
         </div>
         <p> New <a href="userloginform.php">Login</a> | <a href="register.php">Register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Comic Book Store</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Products</a>
            <a href="contact.php">Contact</a>
            <a href="order.php">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE userid = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>Your Profile</p>
         <p>Username : <span><?php echo $_SESSION['uname']; ?></span></p>
         
            <a href="include/logout.php" class="delete-btn">Logout</a>
         </div>
      </div>
   </div>

</header>

