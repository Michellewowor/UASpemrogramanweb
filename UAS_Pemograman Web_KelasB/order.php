<?php
session_start();

if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order | Tropical Fruit Shop</title>
	<link rel="stylesheet" type="text/css" href="css/order.css">
</head>
<body>

	<nav>
		<div class="logo">
			<h1><a href="index.html">Tropical Fruit Shop</a></h1>
		</div>
			 <ul>
				<li ><a href="index.php">HOME</a></li>
				<li><a href="products.php">PRODUCTS</a></li>
				<li class="active"><a href="order.php">ORDER</a></li>
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

	<!-- label -->
	<section class="label">
		<div class="bagian">
			<p>Home / Order</p>
		</div>
	</section>
	
	<!--message-->
	<div class="container">
  <h1>Order Form</h1>
  <form name="registration" class="registartion-form" method="POST" action="output.php">
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
        <td colspan="2"><input type="submit" class="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</div>

	<script src="js/order.js"></script>
</body>
</html>