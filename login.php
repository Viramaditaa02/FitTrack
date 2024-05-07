<?php
session_start();

if($_SERVER ['REQUEST_METHOD'] === 'POST'){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $validUser = "Vira";
    $validPass = "admin";

    if($user === "" || $pass === ""){
        echo "<script>alert('Isi Datanya Dulu');</script>";
    } elseif($user === $validUser || $pass === $validPass) {
        $_SESSION['username'] = $user;
        setcookie('pass', $user, time() + (86400 * 30), '/');
        echo "<script>alert('Berhasil Login'); window.location.href = 'admin.php'</script>";
        exit();
    }
    else {
        echo "<script>alert('Gagal Login'); window.location.href = 'login.php'</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <header id="navbar">
            <nav class="navbar-container container">
                <a href="/" class="home-link">
                    <div class="navbar-logo"></div>
                    Website FitTrack
                </a>
                <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="navbar-menu" aria-labelledby="navbar-toggle">
                    <ul class="navbar-links">
                        <li class="navbar-item"><a class="navbar-link" href="indeks.html">Home</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="login.html">Login</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="register.html" id="register-link">daftar</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="form-login">
                <form action="login.php" method="post">
                <h3>Login</h3>
                <label for="">Username</label>
                <input class="input" type="text" id="username" name="username" placeholder="Username" />
                <label for="">Password</label>
                <input class="input" type="password" id="password" name="password" placeholder="Password" />
                <button type="submit" class="button" >Login</button>
                <br><br>
                <a href="register.php" class="link-register" id="register-button">Tidak Punya Akun?</a>
                </form>
            </div>
        </main>
    </center>

    <!-- <script>
        // Mengambil referensi ke tombol "Tidak Punya Akun"
        var registerButton = document.getElementById("register-button");

        // Menambahkan event listener untuk menangani peristiwa onchange
        registerButton.addEventListener("click", function() {
            alert("Akan kami arahkan ke halaman pendaftaran.");
        });
    </script> -->
</body>
</html>
