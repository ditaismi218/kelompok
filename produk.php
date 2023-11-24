<?php
require "koneksi.php";

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");

if (isset($_GET['keyword'])) {
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
} else if (isset($_GET['kategori'])) {
    $queryGetKategoriId = mysqli_query($con, "SELECT id FROM kategori WHERE nama='$_GET[kategori]'");
    $queryGetKategoriId = mysqli_fetch_array($queryGetKategoriId);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]'");
} else {
    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
}

$countData = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online |Produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="container-fluid banner-produk d-flex align-items-center">
        <div class="container">
            <h1 class="text-white text-center">Produk</h1>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3 mb-5">
                <h3>Kategori</h3>
                <ul class="list-group">
                    <?php while ($kategori = mysqli_fetch_array($queryKategori)) { ?>
                        <a class="no-decoration" href="produk.php?kategori=<?php echo $kategori['nama']; ?>">
                            <li class="list-group-item"><?php echo $kategori['nama']; ?></li>
                        </a>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <h3 class="text-center mb-3">Produk</h3>
            <div class="row"></div>
            <?php
            if ($countData < 1) {
            ?>
                <h4 class="text-center my-5">KALO NYARI BARANG YANG NGOTAK LAH BLOK</h4>
            <?php
            }
            ?>


            <?php while ($produk = mysqli_fetch_array($queryProduk)) { ?>
                <div class="col-md-4 mb-4"></div>
                <div class="card h-100">
                    <div class="image-box">
                        <img src="image/SOAL1_1.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">whatever</h4>
                        <p class="card-text text-truncate">whatever</p>
                        <p class="card-text text-harga">Rp 231321321</p>
                        <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 ">Lihat Detail</a>
                    </div>
                </div>
        </div>
    <?php } ?>
    <div class="card h-100">
        <div class="image-box">
            <img src="image/SOAL1_1.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h4 class="card-title">whatever</h4>
            <p class="card-text text-truncate">whatever</p>
            <p class="card-text text-harga">Rp 231321321</p>
            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 ">Lihat Detail</a>
        </div>
    </div>
    <div class="card h-100">
        <div class="image-box">
            <img src="image/SOAL1_1.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h4 class="card-title">whatever</h4>
            <p class="card-text text-truncate">whatever</p>
            <p class="card-text text-harga">Rp 231321321</p>
            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 ">Lihat Detail</a>
        </div>
    </div>
    <div class="card h-100">
        <div class="image-box">
            <img src="image/SOAL1_1.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h4 class="card-title">whatever</h4>
            <p class="card-text text-truncate">whatever</p>
            <p class="card-text text-harga">Rp 231321321</p>
            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 ">Lihat Detail</a>
        </div>
    </div>
    <div class="card h-100">
        <div class="image-box">
            <img src="image/SOAL1_1.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h4 class="card-title">whatever</h4>
            <p class="card-text text-truncate">whatever</p>
            <p class="card-text text-harga">Rp 231321321</p>
            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 ">Lihat Detail</a>
        </div>
    </div>
    <div class="card h-100">
        <div class="image-box">
            <img src="image/SOAL1_1.png" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h4 class="card-title">whatever</h4>
            <p class="card-text text-truncate">whatever</p>
            <p class="card-text text-harga">Rp 231321321</p>
            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 ">Lihat Detail</a>
        </div>
    </div>
    </div>
    </div>

    <script src=" bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>