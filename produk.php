<?php
require "koneksi.php";

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");

if (isset($_GET['keyword'])) {
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%{$_GET['keyword']}%'");
} else if (isset($_GET['kategori'])) {
    $queryGetKategoriId = mysqli_query($con, "SELECT id FROM kategori WHERE nama='$_GET[kategori]'");
    $queryKategoriId = mysqli_fetch_array($queryGetKategoriId);
    echo $KategoriId['id'];
} else {
}
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
            <div class="col-lg-9">
                <h3 class="text-center mb-3">Produk</h3>
            </div>
        </div>
    </div>

    <script src=" bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>