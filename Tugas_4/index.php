<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Kelompok 2 Kelas F</title>

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
            <a class="navbar-brand" href="">
                <img src="../Assets/Logo_Kelompok-2_Kelas-F.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Kelompok 2 - Kelas F
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tugas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://docs.google.com/document/d/1Avw4nUpLgY9BjXIZb9jIZHSSeN2I4jPr/edit?usp=share_link&ouid=111552214435515886838&rtpof=true&sd=true">Tugas 1</a></li>
                            <li><a class="dropdown-item" href="../">Tugas 2</a></li>
                            <li><a class="dropdown-item" href="">Tugas 3</a></li>
                            <li><a class="dropdown-item" href="../Tugas_4/">Tugas 4</a></li>
                            <li><a class="dropdown-item" href="https://docs.google.com/document/d/1VzsjlF_UKRinSe4VlMOvZ8IBId6y3PqV/edit?usp=sharing&ouid=111552214435515886838&rtpof=true&sd=true">Tugas 7</a></li>
                            <li><a class="dropdown-item" href="../UTS/">UTS</a></li>
                            <li><a class="dropdown-item" href="../UAS/">UAS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Section -->
    <section class="p-md-5">
        <div class="container p-md-5">
            <div class="row text-center p-md-3">
                <h2>Isi Form</h2>
            </div>
            <div class="row p-md-5">
                <form action="result.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" class="form-control" id="nim" name="nim" aria-describedby="nim">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                    </div>
                    <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Akhir Section -->

    <!-- Footer -->
    <footer class="text-center text-light bg-primary p-md-2">
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