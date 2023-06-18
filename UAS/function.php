<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "cek_pisang_mu";

$conn = mysqli_connect($server, $username, $password, $database);

function registrasi($data)
{
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data["nama"]);
    $username = mysqli_real_escape_string($conn, $data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $konfirmasi = mysqli_real_escape_string($conn, $data["konfirmasi"]);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username Telah Terdaftar');
        </script>";
        return false;
    }

    if ($password !== $konfirmasi) {
        echo "<script>
            alert('Konfirmasi Password Tidak Sesuai');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
function gejala($id_relasi)
{
    if ($id_relasi == '1') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=2" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=7" role="button">Tidak</a>';
    }
    if ($id_relasi == '2') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=3" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=7" role="button">Tidak</a>';
    }
    if ($id_relasi == '3') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=4" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=7" role="button">Tidak</a>';
    }
    if ($id_relasi == '4') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=5" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=7" role="button">Tidak</a>';
    }
    if ($id_relasi == '5') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=6" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=7" role="button">Tidak</a>';
    }
    if ($id_relasi == '6') {
        echo '<a class="btn btn-primary m-md-1" href="result.php?id_penyakit=1" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=7" role="button">Tidak</a>';
    }

    if ($id_relasi == '7') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=8" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=11" role="button">Tidak</a>';
    }
    if ($id_relasi == '8') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=9" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=11" role="button">Tidak</a>';
    }
    if ($id_relasi == '9') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=10" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=11" role="button">Tidak</a>';
    }
    if ($id_relasi == '10') {
        echo '<a class="btn btn-primary m-md-1" href="result.php?id_penyakit=2" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=11" role="button">Tidak</a>';
    }

    if ($id_relasi == '11') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=12" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=15" role="button">Tidak</a>';
    }
    if ($id_relasi == '12') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=13" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=15" role="button">Tidak</a>';
    }
    if ($id_relasi == '13') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=14" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=15" role="button">Tidak</a>';
    }
    if ($id_relasi == '14') {
        echo '<a class="btn btn-primary m-md-1" href="result.php?id_penyakit=3" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=15" role="button">Tidak</a>';
    }

    if ($id_relasi == '15') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=16" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=1" role="button">Tidak</a>';
    }
    if ($id_relasi == '16') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=17" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=1" role="button">Tidak</a>';
    }
    if ($id_relasi == '17') {
        echo '<a class="btn btn-primary m-md-1" href="main.php?id_relasi=18" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=1" role="button">Tidak</a>';
    }
    if ($id_relasi == '18') {
        echo '<a class="btn btn-primary m-md-1" href="result.php?id_penyakit=4" role="button">Ya</a>';
        echo '<a class="btn btn-danger m-md-1" href="main.php?id_relasi=1" role="button">Tidak</a>';
    }
}
