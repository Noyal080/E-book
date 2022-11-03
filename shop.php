<?php

include 'C:\xampp\htdocs\Ecom\include\connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:userloginform.php');
}

include 'C:\xampp\htdocs\Ecom\addtocart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shop</title>

   <!-- font awesome cdn link  -->
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
   
<?php include 'C:\xampp\htdocs\Ecom\include\head.php'; ?>

<div class="heading">
   <h3>Our Products</h3>
   <p> <a href="home.php">Home</a> / <a href="shop.php"> Shop </a> </p>
</div>

<br>
<div class="container">
   <div class="row">
      <h1 class="title" style="text-align: center;"> Products</h1>
      <br>
      <div align ="center">
           <a href="#latest"> <button class="btn btn-default filter-button" >Latest product</button> </a> 
           
           <a href="#comic"><button class="btn btn-default filter-button">Comic</button></a> 
           
           <a href="#manga"><button class="btn btn-default filter-button" >Manga</button></a> 
          
        </div>
   </div>
</div>
<section class="products" id="latest">

<h1 class="title">Latest Products</h1>

<div class="box-container" id="latest">


   <?php  
      $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_products = mysqli_fetch_assoc($select_products)){
   ?>
  <form action="" method="post" class="box">
   <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
   <div class="name"><?php echo $fetch_products['name']; ?></div>
   <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
   <input type="number" min="1" name="product_quantity" value="1" class="qty">
   <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
   <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
   <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   <input type="submit" value="add to cart" name="add_to_cart" class="btn">
  </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>
</div>

</section>


<section class="products" id="comic">

<h1 class="title">Comic books</h1>

<div class="box-container" id="comic">

   <?php  
      $select_products = mysqli_query($conn, "SELECT * FROM `products` where product_type = 'Comic'") or die('query failed');
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_products = mysqli_fetch_assoc($select_products)){
   ?>
  <form action="" method="post" class="box">
   <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
   <div class="name"><?php echo $fetch_products['name']; ?></div>
   <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
   <input type="number" min="1" name="product_quantity" value="1" class="qty">
   <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
   <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
   <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   <input type="submit" value="add to cart" name="add_to_cart" class="btn">
  </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>
</div>

</section>
<section class="products" id="manga">

<h1 class="title">Manga </h1>

<div class="box-container" id="manga">

   <?php  
      $select_products = mysqli_query($conn, "SELECT * FROM `products` where product_type = 'Manga'") or die('query failed');
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_products = mysqli_fetch_assoc($select_products)){
   ?>
  <form action="" method="post" class="box">
   <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
   <div class="name"><?php echo $fetch_products['name']; ?></div>
   <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
   <input type="number" min="1" name="product_quantity" value="1" class="qty">
   <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
   <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
   <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   <input type="submit" value="add to cart" name="add_to_cart" class="btn">
  </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>
</div>

</section>


  
</div>









<?php include 'C:\xampp\htdocs\Ecom\include\footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>