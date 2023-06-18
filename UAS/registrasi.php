<?php
require "function.php";

if (isset($_POST["daftar"])) {
    if (registrasi($_POST) > 0) {
        header("Location: login.php");
        exit;
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS | Kelompok 2 Kelas F</title>

    <!-- Link Favicon -->
    <link rel="shortcut icon" href="../Assets/Logo_Kelompok-2_Kelas-F.png" type="image/x-icon">
    <!-- Akhir Link Favicon -->

    <!-- Link Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Akhir Link Bootstrap Icon -->

    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Akhir Link Bootstrap CSS -->
</head>

<body>
    <!-- Section -->
    <section>
        <div class="container">
            <div class="row text-center p-md-4">
                <div class="col">
                    <h2>Registrasi</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="konfirmasi" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="konfirmasi" name="konfirmasi" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="daftar" name="daftar">Daftar</button>
                        <a class="btn btn-outline-primary" href="index.php" role="button">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Section -->

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Akhir Link Bootstrap JS -->
</body>

</html>