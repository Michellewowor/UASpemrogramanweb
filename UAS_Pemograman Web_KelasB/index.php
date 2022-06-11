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
	<title>Home | Tropical Fruit Shop</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<nav>
		<div class="logo">
			<h1><a href="index.html">Tropical Fruit Shop</a></h1>
		</div>
			 <ul>
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="products.php">PRODUCTS</a></li>
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

	<!-- banner -->
	<section class="banner">
		<h2>Fresh Fruit For You</h2>
	</section>

	<!-- about -->
	<section>
		<div class="container">
			<p><strong>Tropical Fruit Shop </strong>is a quality value-driven business based in Indonesia.</p>
			<p>Been around since 2020, we have served more than 100.000 costumers from all over the world.</p>	
		</div>
	</section>

	<div class="unggul">

		<h1 class="heading">Make Healthy Eating Essential With Us!</h1>
	
		<div class="box-container">
	
			<div class="box">
				<img src="img/fruits.png" alt="">
				<h3>Fresh</h3>
				<p>100% organic & pesticide-free</p>
			</div>
	
			<div class="box">
				<img src="img/money.png" alt="">
				<h3>Affordable</h3>
				<p>Buy more, pay Less</p>
			</div>
	
			<div class="box">
				<img src="img/quality.png" alt="">
				<h3>Quality</h3>
				<p>Eat healthy, be nutrition wealthy</p>
			</div>
		</div>
	</div>
	
	<script src="js/index.js"></script>
</body>
</html>