<?php
// session_start();
// if (!isset($_SESSION["login"])) {
//     header("Location: page-login.php");
//     exit;
// }
require 'src/function.php';
$tambah = new Action();

if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambah atau tidak
    if ($tambahdata = $tambah->Tambahdata($_POST) == true) {
        echo "
        <script>
        alert('berhasil diBooking');
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal diBooking');
        </script>
        ";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>FUTSAL UNIVERSE</title>
    <!-- <link rel="icon" href="img/futsal-universe.png"> -->
    <link rel="shortcut icon" href="img/futsal-universe.jpg" type="image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- jsnya -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="assets/dist/js/bootstrap.bundle.js"></script>
    <script src="assets/dist/js/galery.js"></script>

    <!-- Bootstrap CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/fontawesome/css/all.min.css">

    <style>
        h2 {
            font-family: Arial, Helvetica, sans-serif;

        }

        hr.divider {
            max-width: 8rem;
            border-width: 0.2rem;
            border-color: #000000;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .mt-4,
        .my-4 {
            margin-top: 1rem !important;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        user agent stylesheet hr {
            display: block;
            -webkit-margin-before: 0.5em;
            -webkit-margin-after: 0.5em;
            -webkit-margin-start: auto;
            -webkit-margin-end: auto;
            border-style: inset;
            border-width: 1px;
        }


        .contact-form {

            margin-bottom: 5%;
            width: 70%;
        }

        .contact-form .form-control {
            border-radius: 1rem;
        }

        .contact-form form {
            padding: 14%;
        }

        .contact-form form .row {
            margin-bottom: -7%;
        }

        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            font-weight: 600;

            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="assets/dist/css/galery.css">
    <link rel="stylesheet" href="assets/dist/css/footer.css">
    <!-- CSS e dewe -->
    <link href="carousel.css" rel="stylesheet">



</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- Image and text -->
            <a class="navbar-brand" href="#" style="font-family: curvise;">
                <img src="img/q1.png" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                Futsal Universe
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="index.php">Home</a>
                    <a class="nav-link" href="booking.php">Booking</a>
                    <a class="nav-link" href="jadwal.php">Jadwal</a>
                    <a class="nav-link" href="galery.php">Galery</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                    <a class="nav-link" href="page-admin.php">Profil</a>

                    <?php if (isset($_SESSION["login"])) { ?>
                        <a class="nav-link" href="profile.php">Profile</a>
                        <a class="nav-link" href="edit-profile.php">Edit Profile</a>
                        <a class="nav-link" href="logout.php">Logout</a>
                    <?php } else { ?>
                        <a class="nav-link" href="page-login.php">Login</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>


    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/2.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Booking</h1>
                            <p>Booking lapangan futsal jadi lebih mudah hanya dimanapun dan kapanpun</p>
                            <p><a class="btn btn-lg btn-primary" href="booking.php" role="button">Booking</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide 1.jpg" alt="" class="">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Langkah Pembayaran</h1>
                            <p>Untuk pembayaran sangatlah mudah, yuk kita lihat</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Cara Bayar</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide3.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>FASILITAS</h1>
                            <p>Kita memeliki beberapa fasilitas yuk lihat di galery kita</p>
                            <p><a class="btn btn-lg btn-primary" href="galery.php" role="button">Buka gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- card -->
        <div class="container">
            <h2 class="text-center text-uppercase font-weight-bold">Pemilihan Lapangan</h2>
            <hr class="divider my-4">
            <div class="row" id="1">
                <div class="col-md-4 ">
                    <div class="card">
                        <img src="img/lapijo.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h4>Lapangan 1</h4>
                            </div>
                            Lapangan Matras
                        </div>
                        <a href="booking.php" type="button" class="btn btn-dark">Pesan</a>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="card">
                        <img src="img/lapbiru.jpg" class="card-img-top" alt="...">

                        <div class="card-body text-center">
                            <div class="card-title">
                                <h4>Lapangan 2</h4>
                            </div>
                            Lapangan Tanpa Rumput
                        </div>
                        <a href="booking.php"type="button" class="btn btn-dark">Pesan</a>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="card">
                        <img src="img/OIP.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h4>Lapangan 1</h4>
                            </div>
                            Lapangan Dengan Rumput
                        </div>
                        <a href="booking.php" type="button" class="btn btn-dark">Pesan</a>
                    </div>
                </div>
            </div>
                <!-- Footer -->
                <div class="mt-5 pt-5 pb-5 footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-xs-12 about-company">
                                <h2>Futsal Universe</h2>
                                <p class="pr-5 text-white-50">Sebuah aplikasi untuk melakukan booking online
                                    lapangan
                                    futsal.
                                </p>
                                <p><a href="#"><i class="fab fa-facebook-square mr-3"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in mr-3"></i></a>
                                    <a href="https://instagram.com/sportstationfutsal?igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram  mr-3"></i></a>
                                </p>
                            </div>
                            <div class="col-lg-3 col-xs-12 links">
                                <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                                <ul class="m-0 p-0">
                                    <li>- <a href="booking.php">Booking</a></li>
                                    <li>- <a href="jadwal.php">Jadwal</a></li>
                                    <li>- <a href="galery.php">Galeri</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-xs-12 location">
                                <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                                <p>Jl. Pluto No.51, pluto utara, Kec. namex, Kab. saturnus 69696</p>
                                <p class="mb-0"><i class="fa fa-phone mr-3"></i>(083) 827-004-159</p>
                                <p><i class="fa fa-envelope mr-3"></i>futsaluniverse@gmail.com</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col copyright">
                                <p class=""><small class="text-white-50">© 2010-<?php echo date("Y"); ?>. All Rights
                                        Reserved.</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </main>

    <script src="assets/dist/js/jquery-3.2.1.min.js"></script>
    <script src="assets/dist/js/anime.2.2.0.js"></script>
</body>

</html>