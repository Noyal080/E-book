<?php

include 'C:\xampp\htdocs\Ecom\include\connect.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:userloginform.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'C:\xampp\htdocs\Ecom\include\head.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> Welcome to our Website</p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="img/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why us?</h3>
         <p>We at "Comic Book Store" take pride in the large collection of the book we hold. Not only we have an online store that is just a button away from your touch also we have a physical store that's located at Bafal Chowk</p>
         <p>Please do visit our store and send your feedback to us and we will contact you immediately.</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Customer's Review</h1>

   <div class="box-container">

      <div class="box">
         <img src="img/users/IMG_74119.jpeg" alt="">
         <p>One of the best site to buy your comic books from , this place also lets you donate your books. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bishal Thapa</h3>
      </div>

      <div class="box">
         <img src="img/users/IMG_42041.JPG" alt="">
         <p>Books prices are somewhat expensive but the delievery services are great and the book quality is also good. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Kushal Rijal</h3>
      </div>

      <div class="box">
         <img src="img/users/IMG_58178.JPG" alt="">
         <p>Very pleased with the services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ujjwal Thapa</h3>
      </div>

      
   </div>

</section>

<section class="authors">
   <h1 class="title"> Our Gallery </h1>
   <div class="box-container">
      <div class="box">
         <img src="./img/img1.jpg" alt="Image 1">
      </div>
      <div class="box"> <img src="./img/img2.jpg" alt=""></div>
      <div class="box"> <img src="./img/img3.jpg" alt=""></div>
      <div class="box"> <img src="./img/img4.jpg" alt=""></div>
      <div class="box"><img src="./img/img5.jpg" alt=""></div>
      <div class="box"><img src="./img/img6.jpg" alt=""></div>
 
   </div>
</section>






<?php include 'C:\xampp\htdocs\Ecom\include\footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>