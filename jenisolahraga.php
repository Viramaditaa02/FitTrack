<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="admin.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">FitTtack</span>
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
                <span class="admin_name"> FitTrack</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Data FitTrack </h3>
            <button type="button" class="btn btn-tambah">
                <a href="jenisolahraga-entry.html">Tambah Data</a>
            </button>
            <table class="table-data">
                <thead>
                    <tr>
                        <th style="width: 20%">Jenis Olahraga</th>
                        <th style="width: 20%">Harga Latihan/Bln</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Zumba</td>
                        <td><200.000></RP></td>
                        <td><a href="#" class="edit-link">Edit</a> | <a href="#" class="delete-link">Hapus</a></td>
                    </tr>
                    <tr>
                        <td>GYM</td>
                        <td><150.000></RP></td>
                        <td><a href="#" class="edit-link">Edit</a> | <a href="#" class="delete-link">Hapus</a></td>
                    </tr>
                </tbody>
            </table>
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

       




