<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: page-login.php");
    exit;
}
require 'src/function.php';

$tambah = new Action();
$tampil = $tambah->Querydata();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/dist/css/simple-sidebar.css">
</head>

<body>
    <div class=" text-center">
        <span><?php

                $tanggal = mktime(date("m"), date("d"), date("Y"));
                echo "Tanggal : <b>" . date("d-M-Y", $tanggal) . "</b> ";
                date_default_timezone_set('Asia/Jakarta');
                $jam = date("H:i:s");
                echo "| Pukul : <b>" . $jam . " " . "</b>";
                $a = date("H");
                if (($a >= 6) && ($a <= 11)) {
                    echo "<b>, Selamat Pagi !!</b>";
                } else if (($a >= 11) && ($a <= 15)) {
                    echo ", Selamat Siang !!";
                } else if (($a >= 15) && ($a <= 18)) {
                    echo ", Selamat Sore !!";
                } else {
                    echo ", <b> Selamat Malam </b>";
                }


                ?></span>
    </div>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-dark border-right" id="sidebar-wrapper">
            <div class="sidebar-heading" style="color: white;"><b>ADMINISTRATOR</b></div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="src/logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="container-fluid">
            <div class="container">
                <table class="table" border="1" style="text-align: center;">
                    <thead class="table-dark">
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NOMER WA</th>
                        <th>NAMA TIM</th>
                        <th>LAPANGAN</th>
                        <th>HARI</th>
                        <th>DURASI</th>
                        <th>MULAI JAM</th>
                        <th>VERIFIKASI</th>
                    </thead>
                    <?php
                    $i = 1;
                    foreach ($tampil as $row) { ?>
                        <tbody>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["wa"]; ?></td>
                            <td><?php echo $row["tim"]; ?></td>
                            <td><?php echo $row["lapangan"]; ?></td>
                            <td><?php echo $row["hari"]; ?></td>
                            <td><?php echo $row["durasi"]; ?></td>
                            <td><?php echo $row["mulai"]; ?></td>
                            <td>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <button class="btn btn-success" type="button"><a href="page-nota.php?id=<?php echo $row["id"]; ?>" style="text-decoration: none;color:white;">SETUJU </a></button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-danger" type="button"><a href="src/hapus.php?id=<?php echo $row["id"]; ?>" style="text-decoration: none;color:white;" onclick="return confirm('yakin ingin menolak?')" ;> TOLAK</a></button>
                                    </div>
                                </div>
                            </td>
                        </tbody>

                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>