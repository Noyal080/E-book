<?php
 if(isset($_POST['add_to_cart'])){

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
$product_quantity = $_POST['product_quantity'];

$check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND userid = '$user_id'") or die('query failed');

if(mysqli_num_rows($check_cart_numbers) > 0){
   $message[] = 'already added to cart!';
}else{
   mysqli_query($conn, "INSERT INTO `cart`(userid, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
   $message[] = 'product added to cart!';
}

};
?>