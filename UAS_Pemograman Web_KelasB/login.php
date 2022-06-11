<?php
session_start();
require 'function.php';

//cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil email berdasarkan id
	$result = mysqli_query($conn, "SELECT email FROM users WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan email
	if($key === hash('sha256', $row['email'])){
		$_SESSION['login'] = true;
	}
}

if(isset($_SESSION["login"])){
	header("Location: index.php");
	exit;
}

if(isset($_POST["login"])){
	$email = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

	//cek email
	if(mysqli_num_rows($result) === 1){
		// cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){
			//set session
			$_SESSION["login"] = true;

			//cek remember me
			if(isset($_POST['remember'])){
				//buat cookie

				setcookie('id', $row['id'], time()+3600*6);
				setcookie('key', hash('sha256', $row['email']), time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="stylesheet" type="text/css" href="css/login.css">
        <title>Halaman Login</title>
    </head>
    <body>
	<div class = "container">
	<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
		<form action="" method="post" class="login-email">
			<ul>
				<div class = "input-group">
					<label fbr="email">Email :</label>
					<input type="email" name="email" id="email" required>
				</div>
				<div class = "input-group">
					<label fbr="password">Password :</label>
					<input type="password" name="password" id="password" required>
				</div>
				<div class="remem">
					<input type="checkbox" name="remember" id="remember">
					<label for="remember">Remember me</label>
				</div>
				<div class = "input-group">
					<button type="submit" class="btn" name="login">LogIn</button>
				</div>
				<?php if(isset($error)) : ?>
					<p style="color : red; font-style: italic;">Email atau Password Salah</p>
				<?php endif; ?>
				<p class="login-register-text">Don't have an account? <a href="registrasi.php">Register Here</a>.</p>
			</ul>
		</form>
	</div>
</body>
</html>
