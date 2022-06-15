<?php
session_start();

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'function.php';
?>
<?php
include "config.php";
if(isset($_POST['submit'])){
	$insert_query = mysqli_query($conn,"INSERT INTO sell set
	name = '$_POST[name]',
	email = '$_POST[email]',
	address = '$_POST[address]',
	contact = '$_POST[contact]',
	deskripsi = '$_POST[deskripsi]',
	price = '$_POST[price]',
	img = '$_POST[img]'");

	if($insert_query){
		$message[] = 'Add Sell Form Succesfully';
	}else{
		$message[] = 'Could Not Add Sell Form';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sell | Tropical Fruit Shop</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/sell.css">
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
				<li ><a href="cart.php">CART<span><?php echo $row_count; ?></span></a></li>
                <li class="active"><a href="sell.php">SELL</a></li>
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
				<a href="https://drive.google.com/drive/folders/1-OLIlM9hlRYfnMvS5eRlrb4s0H-46uwa?usp=sharing"><strong>Klik Disini</strong></a> 
			</div>
			<div class="popup-footer">
				<button class="btn popup-close-btn">Close</button>
			</div>
		</div>
	</div>

	<!-- label -->
	<section class="label">
		<div class="bagian">
			<p>Home / Sell</p>
		</div>
	</section>
	<?php
	if(isset($message)){
	foreach($message as $message){
	   echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
	};
	 };
    ?>
	
	<!--message-->
	<div class="container">
  <h1>Sell Form</h1>
  <form name="registration" class="registration-form" method="POST" action="">
    <table>
      <tr>
        <td><label for="name">Name</label></td>
        <td><input type="text" name="name" id="name" style="width:95%;" required></td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="text" name="email" id="email" style="width:95%;" required></td>
      </tr>
      <tr>
        <td><label for="address">Address</label></td>
        <td><input type="text" name="address" id="address"  style="width:95%;" required></td>
      </tr>
      <tr>
        <td><label for="contact">Phone Number</label></td>
        <td><input type="text" name="contact" id="contact"  style="width:95%;" required></td>
      </tr>
      <tr>
        <td><label for="deskripsi">Fruit Description</label></td>
        <td><textarea name="deskripsi" id="about" style="width:95%;" required></textarea></td>
      </tr>
      <tr>
        <td><label for="price">Price</label></td>
		<td><input type="number" name="price" id="price" min="1"  style="width:95%;" required></td>
      </tr>
      <tr>
        <td><label for="img">Fruit Image</label></td>
        <td><input type="file" name="img" accept="image/*" required></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit" class="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</div>
	<script src="js/sell.js"></script>
</body>
</html>
