<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time()-3600*7);
setcookie('key', '', time()-3600*7);

header('location:login.php');
exit;
?>