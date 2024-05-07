<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu"
                    aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="navbar-menu" aria-labelledby="navbar-toggle">
                    <ul class="navbar-links">
                        <li class="navbar-item"><a class="navbar-link" href="indeks.html">Home</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="login.html">Login</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="register.html">daftar</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="form-login">
                <form action="register.php" method="post">
                <h3>daftar</h3>
                <label for="">Masukkan Email</label>
                <input class="input" type="text" id="email" name="nama" placeholder="Masukkan Email" >
                <label for="">Masukkan Username</label>
                <input class="input" type="text" id="username" name="nama" placeholder="Nama Lengkap" >
                <label for="">Password</label>
                <input class="input" type="password" id="password" name="password" placeholder="Password" />
                <button class="button" value="input data" type="submit" onclick="Rform()">daftar</button>
            </form>
            </div>
        </main>
    </center>
    <script>
        function Rform(){
            let email = document.getElementById("email").value;
             username = document.getElementById("username").value;
            var pass = document.getElementById("Password").value;
            
            if(email === "dummy@yahoo.com" || username === "dummy" || pass === "9090"){
                alert("Anjay bener dong");
                return false;
            }else{
                alert("Sudah Terdaftar");
                return true;
            }
                
        
        }
    </script>
</body>
</html>

