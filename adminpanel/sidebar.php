<?php
// sidebar.php

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);

$queryProduk = mysqli_query($con, "SELECT * FROM produk");
$jumlahProduk = mysqli_num_rows($queryProduk);
?>

<aside id="sidebar" class="js-sidebar">
    <div class="h-100">
        <div class="sidebar-logo">
            <a href="#">Star Fashion</a>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                admin elements
            </li>
            <li class="sidebar-item">
                <a href="index.php" class="sidebar-link">
                    <i class="fa-solid fa-list pe-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                    aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                    Manajemen Konten
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="sidebar">
                    <li class="sidebar-item">
                        <a href="kategori.php" class="sidebar-link hover">Kategori</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="produk.php" class="sidebar-link hover">Produk</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>