<?php
class Database
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "futsal";
    public $conn = "";

    public function __construct()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            echo "koneksi database gagal : " . mysqli_connect_error();
        } else {
            return $this->conn;
        }
    }
}
class Action extends Database
{

    public function Querydata()
    {
        $data = mysqli_query($this->conn, "SELECT * FROM data");
        while ($row = mysqli_fetch_assoc($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
    public function Tambahdata($data)
    {
        $nama = htmlspecialchars($data["nama"]);
        $wa = htmlspecialchars($data["wa"]);
        $tim = htmlspecialchars($data["tim"]);
        $lapangan = htmlspecialchars($data["lapangan"]);
        $hari = htmlspecialchars($data["hari"]);
        $durasi = htmlspecialchars($data["durasi"]);
        $mulai_jam = htmlspecialchars($data["mulai_jam"]);
        $query = mysqli_query($this->conn, "INSERT INTO data VALUES ('', '$nama', '$wa', '$tim', '$lapangan', '$hari', '$durasi','$mulai_jam')");
        return $query;
    }
    public function Hapus($id)
    {
        $query = mysqli_query($this->conn, "DELETE FROM data WHERE id = $id");
        return $query;
    }
    public function Cetak($id)
    {
        $query = mysqli_query($this->conn, "SELECT * FROM data WHERE id='$id'");
        return $query;
    }
    public function hitungHarga($durasiNya, $mulaiNya)
    {
        $hasilConvert = 0;
        switch ($mulaiNya) {
            case '13:00':
                $hasilConvert = 1;
                break;
            case '14:00':
                $hasilConvert = 2;
                break;
            case '15:00':
                $hasilConvert = 3;
                break;
            case '16:00':
                $hasilConvert = 4;
                break;
            case '17:00':
                $hasilConvert = 5;
                break;
            case '18:00':
                $hasilConvert = 6;
                break;
            case '19:00':
                $hasilConvert = 7;
                break;
            case '20:00':
                $hasilConvert = 8;
                break;
            case '21:00':
                $hasilConvert = 9;
                break;
            case '22:00':
                $hasilConvert = 10;
                break;
            default:
                $hasilConvert = 0;
                break;
        }
        if ($hasilConvert >= 5) {
            return $durasiNya * 130000;
        } else {
            return $durasiNya * 100000;
        }
    }
}

class SystemLogin extends Database
{
    private $username = "";
    private $password = "";
    public $pesanSalah = "";

    function registrasi($data)
    {
        $username = strtolower(stripslashes(($data['username'])));
        $pwd = mysqli_real_escape_string($this->conn, $data['password']);
        $pwd2 = mysqli_real_escape_string($this->conn, $data['password2']);

        //cek username sudah ada atau tidak
        $result = mysqli_query($this->conn, "SELECT username FROM user WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>alert('Username sudah terdaftar!')</script>";
            return false;
        }
        //cek Konfirmasi password
        if ($pwd !== $pwd2) {
            echo "<script>
        alert('Konfirmasi password salah!')</script>";
            return false;
        }
        //enkripsi password dan masukkan ke database
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = mysqli_query($this->conn, "INSERT INTO user VALUES('', '$username', '$pwd')");
        return ($sql);
    }

    public function login()
    {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];

        $sql = mysqli_query($this->conn, "SELECT * FROM user where username='$this->username'");
        if (mysqli_num_rows($sql) === 1) {
            //cek password
            $row = mysqli_fetch_assoc($sql);
            if (password_verify($this->password, $row["password"])) {
                //set session
                $_SESSION["login"] = true;
                header("Location: page-admin.php");
                exit;
            } else {
                return $this->pesanSalah = "Username atau Password yang anda masukkan salah!";
            }
        }
    }
}
