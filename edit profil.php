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

// Pesan error untuk validasi input
$error_nama = $error_email = $error_telepon = $error_alamat = "";

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lakukan validasi input sesuai kebutuhan (misalnya, periksa apakah email valid, dsb.)

    // Jika data valid, simpan data profil yang diperbarui ke database
    // Dan beri tahu pengguna bahwa profil telah berhasil diperbarui

    // Misalnya, setelah proses penyimpanan data berhasil:
    $pesan_sukses = "Profil berhasil diperbarui!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <!-- Tambahkan CSS sesuai kebutuhan -->
</head>

<body>
    <h1>Edit Profil</h1>
    <p>Selamat datang, <?php echo $nama_pengguna; ?>!</p>

    <?php if (isset($pesan_sukses)) { ?>
        <p style="color: green;"><?php echo $pesan_sukses; ?></p>
    <?php } ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $nama_pengguna; ?>">
        <span style="color: red;"><?php echo $error_nama; ?></span>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $error_email; ?></span>
        <br>

        <label for="telepon">Telepon:</label>
        <input type="text" id="telepon" name="telepon" value="<?php echo $telepon; ?>">
        <span style="color: red;"><?php echo $error_telepon; ?></span>
        <br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"><?php echo $alamat; ?></textarea>
        <span style="color: red;"><?php echo $error_alamat; ?></span>
        <br>

        <input type="submit" value="Simpan">
    </form>

    <!-- Tambahkan tautan untuk kembali ke profil -->
    <a href="profile.php">Kembali ke Profil</a>

    <!-- Tambahkan tautan untuk keluar -->
    <a href="logout.php">Keluar</a>

</body>

</html>
