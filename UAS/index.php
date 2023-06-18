<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: main.php");
    exit;
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
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary shadow p-md-3 fixed-top">
        <div class="container">
            <a class="navbar-brand text-warning-emphasis fw-bolder" href="">
                <img src="Assets/Logo_Cek-Pisang-Mu.png" alt="Logo" width="35" height="28" class="d-inline-block align-text-top">
                Cek Pisang Mu!
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="btn btn-success" href="login.php" role="button">Login</a>
                <a class="btn btn-outline-success" href="registrasi.php" role="button">Registrasi</a>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Section -->
    <section class="bg-success-subtle" style="padding: 10rem;">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="p-md-2">Cek Pisang Mu!</h1>
                    <p class="p-md-2">Cek Pisang Mu! Merupakan sistem informasi berbasis Web Based yang memanfaatkan teknologi Sistem Pakar didalamnya. Dengan menggunakan sistem pakar ini pengguna dapat mengenali atau memeriksakan gejala yang ada pada pohon pisang yang diduga terkena penyakit hanya dengan menjawab pertanyaan yang diberikan oleh sistem dan kemudian didapat hasil pemeriksaan dengan hasil yang direpresentasikan dalam bentuk persentase.</p>
                </div>
                <div class="col-4 text-center">
                    <img src="Assets/Logo_Cek-Pisang-Mu.png" alt="Logo" width="300" height="240" class="d-inline-block align-text-top">
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Section -->

    <!-- Footer -->
    <footer class="text-center text-light bg-success p-md-2">
        <div class="container p-md-2">
            <p>Create with <i class="bi bi-heart-fill text-danger"></i> by <a href="../" class="text-light fw-bolder">Kelompok 2 Kelas F</a></p>
            <p>&copy; 2023 Universitas Udayana</p>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Akhir Link Bootstrap JS -->
</body>

</html>