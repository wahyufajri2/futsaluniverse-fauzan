<?php
session_start();
require 'src/function.php';
if (!isset($_SESSION["login"])) {
    header("Location: page-login.php");
    exit;
}
$dataP = new Action();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$querynya = $dataP->cetak($id);
$resultnya = mysqli_fetch_array($querynya);
$hitung = new Action();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota</title>
    <!-- Bootstrap CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <!-- js -->
    <script src="assets/dist/js/canvas2image.js"></script>
    <script src="assets/dist/js/html2canvas.min.js"></script>
    <script src="assets/dist/js/jquery-3.2.1.min.js"></script>
    <script src="assets/dist/js/jquery.min.js"></script>
    <script src="assets/dist/js/qrcode.js"></script>

    <style>
        .samping {
            text-align: right;
            font-weight: bold;
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="row" id="1">
            <div class="col-md-2 ">
            </div>
            <div class="col-md-8" id="element" style="width: 720px;height:720px;">
                <h2 class="text-center text-uppercase font-weight-bold">NOTA</h2>
                <hr class="divider my-4">
                <div class="card">
                    <div style="text-align: center;">
                        <input type="hidden" id="text" value="TIM : <?php echo $resultnya['tim'] ?>
                        LAPANGAN : <?php echo $resultnya['lapangan'] ?>
                        HARI : <?php echo $resultnya['hari'] ?>
                        DURASI : <?php echo $resultnya['durasi'] ?> jam, MULAI JAM : <?php echo $resultnya['mulai'] ?>">
                        <center>
                            <div id="qrcode" style="width:250px; height:250px; margin-top:15px;"></div>
                        </center>
                    </div>
                    <div style="text-align: center;margin: auto;">
                        <form action="" method="get">
                            <table class="table">
                                <tr>
                                    <td class="samping">Nama TIM :</td>
                                    <td><?php echo $resultnya['tim'] ?></td>
                                </tr>
                                <tr>
                                    <td class="samping">Nomer WA :</td>
                                    <td><?php echo $resultnya['wa'] ?></td>
                                </tr>
                                <tr>
                                    <td class="samping">Lapangan :</td>
                                    <td><?php echo $resultnya['lapangan'] ?></td>
                                </tr>
                                <tr>
                                    <td class="samping">Hari :</td>
                                    <td><?php echo $resultnya['hari'] ?></td>
                                </tr>
                                <tr>
                                    <td class="samping">Durasi :</td>
                                    <td><?php echo $resultnya['durasi'];
                                        echo " Jam" ?></td>
                                </tr>
                                <tr>
                                    <td class="samping">Mulai Jam :</td>
                                    <td><?php echo $resultnya['mulai'] ?></td>
                                </tr>
                                <tr>
                                    <td class="samping">Total :</td>
                                    <td><?php echo "Rp." ?> <?php echo $hitung->hitungHarga($resultnya['durasi'], $resultnya["mulai"]); ?></td>
                                </tr>
                            </table>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 ">
        </div>
        <center>
            <div class="container">
                <button type="button" class="btn btn-dark" id="save" style="width:600px;margin-left:-10px;">Cetak</button>
            </div>
        </center>

    </div>

    <!-- JS QRCode -->
    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 250,
            height: 250
        });

        function makeCode() {
            var elText = document.getElementById("text");

            if (!elText.value) {
                alert("Input a text");
                elText.focus();
                return;
            }

            qrcode.makeCode(elText.value);
        }

        makeCode();

        $("#text").
        on("blur", function() {
            makeCode();
        }).
        on("keydown", function(e) {
            if (e.keyCode == 13) {
                makeCode();
            }
        });
    </script>

    <!-- JS JPG -->
    <script>
        $('#save').click(function() {
            var elm = $('#element').get(0);
            var lebar = "720";
            var tinggi = "720";
            var type = "jpg";
            var filename = "gambar"
            html2canvas(elm).then(function(canvas) {
                var canWidht = canvas.width;
                var canHeight = canvas.height;
                var img = Canvas2Image.convertToImage(canvas, canWidht, canHeight);
                $('#preview').after(img);
                Canvas2Image.saveAsImage(canvas, lebar, tinggi, type, filename);
            })
        })
    </script>

</body>

</html>