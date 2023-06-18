<?php
session_start();
require "function.php";

if (isset($_POST["masuk"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["nama"] = $row["nama"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["login"] = true;
            header("Location: main.php");
            exit;
        }
    }

    $error = true;
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
                    <h2>Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="post">
                        <?php if (isset($error)) : ?>
                            <div class="alert alert-warning" role="alert">
                                Username atau Password Salah
                            </div>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="masuk" name="masuk">Masuk</button>
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