<?php
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

   <div class="flex">

      <a href="dashboard.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="dashboard.php">Home</a>
         <a href="ad_products.php">Products</a>
         <a href="ad_orders.php">Orders</a>
         <a href="ad_users.php">Users</a>
         <a href="ad_contact.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Admin Profile</p>
         <p>Username : <span> <?php echo $_SESSION['loginname']; ?></span></p>
         <a class="delete-btn" href="include/logout.php">Logout</a>
      </div>

   </div>

</header>