<?php
require "koneksi.php";

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");

// get produk by nama produk/keyword
if (isset($_GET['keyword'])) {
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
}
// get produk by kategori
else if (isset($_GET['kategori'])) {
    $queryGetKategoriId = mysqli_query($con, "SELECT * FROM kategori WHERE nama='$_GET[kategori]'");
    $kategoriId = mysqli_fetch_array($queryGetKategoriId);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]'");
}
// get produk default
else {
    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
}

$countData = mysqli_num_rows($queryProduk);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center mt-3">
        <div class="card flex-fill border-0 warnanav banner1" style="position: relative;">

            <!-- Gambar -->
            <img src="image/bannersf.png" alt="Banner Image" class="img-fluid"
                style="object-fit: cover; height: 100%; border-radius: 30px;">

            <!-- search -->
            <div class="container mobile-margin" style="margin-top:-35px;">
                <form method="get" action="produk.php">
                    <div class="input-group warnanav shadow" style="border-radius: 15px;">
                        <input type=" text" class="form-control" placeholder="Cari Disini"
                            style="border-radius: 15px; padding: 0 25px; margin:9px;" aria-label="Recipient's username"
                            aria-describedby="basic-addon2" name="keyword">
                        <div class="input-group-append" style="margin: 10px;">
                            <button type="submit" class="btn illustration2 text-white"
                                style="padding: 7px 20px; border-radius: 8px; font-weight:bold; font-size:18px;">Telusuri</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- body -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 mb-5">
                <h3>Kategori</h3>
                <ul class="list-group shadow mt-3">
                    <?php while ($kategori = mysqli_fetch_array($queryKategori)) { ?>
                        <a class="no-decoration" href="produk.php?kategori=<?php echo $kategori['nama'] ?>">
                            <li class="list-group-item">
                                <?php echo $kategori['nama']; ?>
                            </li>
                        </a>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <h3 class="text-center mb-3">Produk</h3>
                <div class="row">
                    <?php
                    if ($countData == 0) {
                        ?>
                        <h4 class="text-center my-3">Produk yang Anda cari tidak tersedia</h4>
                        <?php
                    }
                    ?>
                    <?php while ($produk = mysqli_fetch_array($queryProduk)) { ?>
                        <div class="col-md-4 mb-5">
                            <div class="card h-100 shadow">
                                <div class="image-box">
                                    <img src="image/<?php echo $produk['foto']; ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <?php echo $produk['nama']; ?>
                                    </h4>
                                    <p class="card-text text-truncate">
                                        <?php echo $produk['detail']; ?>
                                    </p>
                                    <p class="card-text text-harga">Rp
                                        <?php echo $produk['harga']; ?>
                                    </p>
                                    <a href="produk-detail.php?nama=<?php echo $produk['nama']; ?>"
                                        class="btn warna2 ">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>