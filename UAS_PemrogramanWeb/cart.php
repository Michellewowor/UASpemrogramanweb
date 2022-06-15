<?php

@include 'config.php';

session_start();

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}


if(isset($_POST['update_update_btn'])){
	$update_value = $_POST['update_quantity'];
	$update_id = $_POST['update_quantity_id'];
	$update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
	if($update_quantity_query){
	   header('location:cart.php');
	};
 };
 
 if(isset($_GET['remove'])){
	$remove_id = $_GET['remove'];
	mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
	header('location:cart.php');
 };
 
 if(isset($_GET['delete_all'])){
	mysqli_query($conn, "DELETE FROM `cart`");
	header('location:cart.php');
 }

require 'function.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart | Tropical Fruit Shop</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
<body>
   <?php
   $select_rows = mysqli_query($conn, "SELECT*FROM `cart`") or die ('query failed');
   $row_count = mysqli_num_rows($select_rows);
   ?>
	<nav>
		<div class="logo">
			<h1><a href="index.php">Tropical Fruit Shop</a></h1>
		</div>
			 <ul>
				<li ><a href="index.php">HOME</a></li>
				<li><a href="products.php">PRODUCTS</a></li>
				<li class="active"><a href="cart.php">CART<span><?php echo $row_count; ?></span></a></li>
				<li ><a href="sell.php">SELL</a></li>
				<li ><a>CREATE BY</a></li>
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
			<p>Home / Cart</p>
		</div>
	</section>
	
	<!--message-->
<div class="container">
  <h1>Cart Item</h1>

  <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>sub price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>Rp<?php echo intval($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>Rp<?php echo $sub_total = intval($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="products.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">TOTAL</td>
            <td>Rp<?php echo $grand_total; ?></td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>

</div>

	<script src="js/cart.js"></script>
   <script src="js/script.js"></script>
</body>
</html>