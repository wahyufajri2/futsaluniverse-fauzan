<?php
require 'src/function.php';
$user = new SystemLogin();
if (isset($_POST["register"])) {
    if ($user->registrasi($_POST) == true) {
        echo "<script>alert('User admin berhasil ditambahkan!')</script>";
        header("Location: page-login.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/dist/css/icon-font.min.css" rel="stylesheet">
    <link href="assets/dist/css/animate.css" rel="stylesheet">
    <link href="assets/dist/css/hamburgers.min.css" rel="stylesheet">
    <link href="assets/dist/css/animsition.min.css" rel="stylesheet">
    <link href="assets/dist/css/select2.min.css" rel="stylesheet">
    <link href="assets/dist/css/daterangepicker.css" rel="stylesheet">
    <link href="assets/dist/css/util.css" rel="stylesheet">
    <link href="assets/dist/css/main.css" rel="stylesheet">

</head>

<body>


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title p-b-33">
                        DAFTAR AKUN
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="masukan username">
                        <input class="input100" type="text" name="username" placeholder="username" id="username" required>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="masukan password yang benar" style="margin-top: 10px;">
                        <input class="input100" type="password" name="password" id="password" placeholder="password" required>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="masukan password yang benar" style="margin-top: 10px;">
                        <input class="input100" type="password" name="password2" id="password2" placeholder="konfirmasi password" required>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="container" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-dark" type="submit" name="register" style="width: 100%;">Daftar</button>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>

                    </div>

                    <div class="text-center" style="margin-top: 10px;">
                        <span class="txt1">
                            masuk?
                        </span>

                        <a href="page-login.php" class="txt2 hov1">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>