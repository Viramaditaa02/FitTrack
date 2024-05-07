<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="admin.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jadwal Entry</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">FitTrack</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="jenisolahraga.html">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Jenis Olahraga </span>
                 </a>
         
            </li>
            <li>
                <a href="jadwal.html">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Jadwal</span>
                 </a>
         
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">FitTrack</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Input Jadwal Latihan Kamu Sekarang YUKK</h3>
            <div class="form-login">
                <form id="jadwalForm">
                    <label for="nama">Nama</label>
                    <input class="input" type="text" name="nama" id="nama" placeholder="Nama" required/>
                    <label for="jenis_olahraga">Jenis Olahraga </label>
                    <input class="input" type="text" name="jenis_olahraga" id="jenis_olahraga" placeholder="Jenis Olahraga" required/>
                    <label for="harga"> Harga Latihan / Bln</label>
                    <input class="input" type="text" name="harga" id="harga" placeholder="Harga Latihan / Bln" required/>
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input class="input" type="date" name="tanggal_mulai" id="tanggal_mulai" placeholder="Tanggal Mulai" required/>
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input class="input" type="date" name="tanggal_selesai" id="tanggal_selesai" placeholder="Tanggal Selesai" required/>
                    <button type="submit" class="btn btn-simpan" name="simpan">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };

        document.getElementById("jadwalForm").addEventListener("submit", function (event) {
            event.preventDefault();
            // Simpan data atau lakukan tindakan lainnya di sini

            // Set semua inputan menjadi kosong setelah data disimpan
            document.getElementById("nama").value = "";
            document.getElementById("jenis_olahraga").value = "";
            document.getElementById("harga").value = "";
            document.getElementById("tanggal_mulai").value = "";
            document.getElementById("tanggal_selesai").value = "";

            // Tampilkan prompt box setelah berhasil menyimpan data
            alert("Data telah berhasil disimpan!");
        });
    </script>
</body>

</html>
