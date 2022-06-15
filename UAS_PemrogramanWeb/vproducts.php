<?php
session_start();

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'function.php'
?>
<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products | Tropical Fruit Shop</title>
	<link rel="stylesheet" type="text/css" href="css/products.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<div class="logo">
			<h1><a href="index.html">Tropical Fruit Shop</a></h1>
		</div>
			 <ul>
			 	<li><a href="admin.php">ADD PRODUCT</a></li>
				<li  class="active"><a href="vproducts.php">PRODUCTS</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			 </ul>

			 <div class="menu-toogle">
				 <input type="checkbox"/>
				 <span></span>
				 <span></span>
				 <span></span>
			 </div>
	</nav>
	<!-- label -->
	<section class="label">
		<div class="bagian">
			<p>Home / Products</p>
		</div>
	</section>  

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>


<div class="bagian">
  	<div class="box-container">

		<?php
		$select_products = mysqli_query($conn, "SELECT * FROM `fruit`");
		if(mysqli_num_rows($select_products) > 0){
			while($fetch_product = mysqli_fetch_assoc($select_products)){
		?>
		<div class="card">
		<form action="" method="post">
				<img  src="img/<?php echo $fetch_product['image']; ?>" alt="" class="card__img">
				<div class="card-contents" >
				<h3 class="card__name"><?php echo $fetch_product['name']; ?></h3>
				<div class="price">Rp<?php echo $fetch_product['price']; ?>/Kg</div>
				<input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
				<input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
				<input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
				</div>
		</form>
		</div>
		<?php
		};
		};
		?>

	</div>
	</div>

	<div class="popup-box">
		<div class="popup-content">
			<div class="popup-header">
				<h3>TIM KAMI</h3>
				<span class="popup-close-icon">&times;</span>
			</div>	
			<div class="popup-body">
				<p>1. Michelle Wahyuni Gretha Wowor (20021106060)</p>
				<p>2. Lidia Sendi Nelwan (20021106076)</p>
				<p>3. Kanaya Elfira Tumade (20021106165)</p>
				<p>Link Presentasi :</p>
				<a href="https://drive.google.com/file/d/1XT5kv6gW62XcGOq3BjnVZY59h4lnSAYi/view?usp=sharing"><strong>Klik Disini</strong></a> 
			</div>
			<div class="popup-footer">
				<button class="btn popup-close-btn">Close</button>
			</div>
		</div>
	</div>

  <script src="js/products.js"></script>
  
</body>

</html>

