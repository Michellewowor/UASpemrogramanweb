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
				<li ><a href="index.php">HOME</a></li>
				<li class="active"><a href="products.php">PRODUCTS</a></li>
				<li><a href="order.php">ORDER</a></li>
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
			<p>Home / Products</p>
			<input  type="text" id="search">
			<input  type="button" id="search-btn" value="Cari">
		</div>
	</section>

  <div class="bagian">
	<div class="card-holder">
	</div>
  </div>

  <script src="js/products.js"></script>
  
</body>

</html>

