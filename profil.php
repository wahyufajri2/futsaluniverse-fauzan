<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: page-login.php");
    exit;
}

// Simulasi data profil pengguna (gantilah dengan data dari database)
$nama_pengguna = "John Doe";
$email = "john.doe@example.com";
$telepon = "08123456789";
$alamat = "Jl. Contoh No. 123, Kota Contoh";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Tambahkan CSS sesuai kebutuhan -->
</head>

<body>
    <h1>Profil Pengguna</h1>
    <p>Selamat datang, <?php echo $nama_pengguna; ?>!</p>

    <h2>Informasi Profil:</h2>
    <ul>
        <li><strong>Nama:</strong> <?php echo $nama_pengguna; ?></li>
        <li><strong>Email:</strong> <?php echo $email; ?></li>
        <li><strong>Telepon:</strong> <?php echo $telepon; ?></li>
        <li><strong>Alamat:</strong> <?php echo $alamat; ?></li>
    </ul>

    <!-- Tambahkan tautan untuk mengedit profil -->
    <a href="edit-profile.php">Edit Profil</a>

    <!-- Tambahkan tautan untuk keluar -->
    <a href="logout.php">Keluar</a>

</body>

</html>
