<?php
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

        .row {
            margin-bottom: 15px;
        }

        .column {
            overflow: hidden;
            border-radius: 5px;
        }
  
        .column img {
            width: 100%;
            height: auto;
            transition: transform 0.3s;
        }
  
        .column:hover img {
            transform: scale(1.1);
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
                </div>
            </div>
        </div>
    </nav>
     <!-- Galery -->
     <h2 class="text-center text-uppercase font-weight-bold mt-lg-5 mt-5" id="galery">Galery</h2>
                    <hr class="divider my-4">
                    <div class="container">
                    <div class="row">
                        <div class="column">
                            <img src="img/slide1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/lapbiruGallery.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/slide3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/lapijoGallery.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                        </div>
                        </div>
                    <div class="row">
                        <div class="column">
                            <img src="img/slide1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/lapbiruGallery.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/slide3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/lapijoGallery.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                        </div>
                    </div>
                </div>
                    
                    <div id="myModal" class="modal">

                        <div class="modal-content">

                            <div class="mySlides">
                                <div class="numbertext">1 / 4</div>
                                <img src="img/slide1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 4</div>
                                <img src="img/lapbiruGallery.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 4</div>
                                <img src="img/slide3.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 4</div>
                                <img src="img/lapijoGallery.jpg" style="width:100%">
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            <span class=" close cursor" onclick="closeModal()">&times;</span>
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>
                            <div class="row">
                                <div class="container-flui">
                                    <div class="column">
                                        <img class="demo cursor" src="img/slide1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img/lapbiruGallery.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img/slide3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img/lapijoGallery.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                    </div>
                                </div>

                            </div>
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