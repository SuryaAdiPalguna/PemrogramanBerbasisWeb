<?php
session_start();
include 'function.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// $gejala = mysqli_query($conn, "SELECT * FROM gejala");
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
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION["nama"] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Section -->
    <section class="bg-success-subtle" style="padding: 10rem;">
        <div class="container">
            <div class="row p-md-3">
                <div class="col-8">
                    <form method="post" enctype="multipart/form-data" role="form">
                        <?php
                        $id_relasi = '1';
                        if (isset($_GET['id_relasi'])) {
                            $id_relasi = $_GET['id_relasi'];
                        }

                        $data_relasi = mysqli_query($conn, "SELECT * FROM relasi WHERE id_relasi='$id_relasi'");
                        $row_relasi = mysqli_fetch_assoc($data_relasi);

                        $id_gejala = $row_relasi['id_gejala'];
                        $data_gejala = mysqli_query($conn, "SELECT * FROM gejala WHERE id_gejala='$id_gejala'");
                        $row_gejala = mysqli_fetch_assoc($data_gejala);
                        ?>
                        <div class="row p-md-3">
                            <div class="col">
                                <h3>Pertanyaan:</h3>
                            </div>
                        </div>
                        <div class="row p-md-3">
                            <div class="col">
                                <h5>Apakah pohon pisang anda mengalami <?= $row_gejala["gejala"] ?></h5>
                            </div>
                        </div>
                        <div class="row p-md-3">
                            <div class="col">
                                <h3>Jawaban:</h3>
                            </div>
                        </div>
                        <?php gejala($id_relasi); ?>
                    </form>
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