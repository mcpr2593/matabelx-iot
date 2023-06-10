<?php
// Memulai Sesi
session_start();

// menghapus semua variabel sesi
$_SESSION = array();

// menghentikan sesi login
session_destroy();

// mengarahkan ke hallaman login
header("location: auth-login.php");
exit;
?>