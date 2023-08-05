<?php
session_start();
require 'function.php';
if (!isset($_SESSION["login"])) {
    header("Location: ../page-login.php");
    exit;
}
$userobj = new Action();

if ($userobj->Hapus($_GET["id"]) == true) {
    echo "
        <script>
        alert('data telah ditolak');
        document.location.href = '../page-admin.php';
        </script>
    ";
} else {
    echo "
        <script>
        alert('data tidak jadi ditolak');
        document.location.href = '../page-admin.php';
        </script>
    ";
}
