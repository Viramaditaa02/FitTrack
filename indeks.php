<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitTrack</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
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
            <div class="jumbotron">
                <div class="jumbotron-text">
                    <h1>Welcome TO FitTrack</h1>
                    <p>Ayo sehat bersama kami</p>
                </div>
                <button type="submit" >daftar</button>
                <div class="slides">
                    <div class="slide">
                        <img src="gambar1.jpg" alt="gambar1">
                    </div>
                    <div class="slide">
                        <img src="gambar2.jpg" alt="gambar2">
                    </div>
                    <div class="slide">
                        <img src="gambar3.jpg" alt="gambar3">
                    </div>
                    <div class="slide">
                        <img src="gambar4.jpg" alt="gambar4">
                    </div>
                    <div class="navigation">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(-1)">&#10095;</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        function plusSlides(n){
            showSlides(slideIndex += n)
        }

        function showSlides(n){
            var x;
            var slides = document.getElementsByClassName("slide");
            if (n > slides.length){
                slideIndex = 1;
            }
            if (n < 1){
                slideIndex = slides.length
            }
            for (x = 0; x < slides.length; x++){
                slides[x].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>
</body>
</html>

