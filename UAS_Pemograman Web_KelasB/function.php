<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "fruitshop";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

function signup($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo"<script>
            alert('Username Sudah Terdaftar')
        </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2){
        echo"<script>
            alert('Konfirmasi Password Tidak Sesuai');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES(NULL, '$username', '$email', '$password')");
    return mysqli_affected_rows($conn);
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

?>

