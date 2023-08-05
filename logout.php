<?php
session_start();

// Hapus semua data sesi
session_unset();

// Hapus sesi dari server
session_destroy();

// Redirect pengguna ke halaman login setelah logout
header("Location: page-login.php");
exit;
?>
