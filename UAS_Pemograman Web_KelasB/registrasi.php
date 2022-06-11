<?php
session_start();
require 'function.php';

if(isset($_POST["signup"])){
	if(signup($_POST)>0){
		echo"<script>
				alert('User baru berhasil ditambahkan!');
			</script>";
	} else{
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Halaman SignUp</title>
</head>
<body>
<div class="container">	
<form action="" method="post" class="login-email">
	<p class="login-text" style="font-size: 2rem; font-weight: 800;">SignUp</p>
		<ul>
			<div class="input-group">
				<label fbr="username">Username :</label>
				<input type="text" name="username" id="username" required>
			</div>
			<div class="input-group">
				<label fbr="email">Email :</label>
				<input type="email" name="email" id="email" required>
			</div>
			<div class="input-group">
				<label fbr="password">Password :</label>
				<input type="password" name="password" id="password" required>
			</div>
			<div class="input-group">
				<label fbr="password2">Konfirmasi Password :</label>
				<input type="password" name="password2" id="password2" required>
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="signup">SignUp</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</ul>
	</form>
</div>
</body>
</html>