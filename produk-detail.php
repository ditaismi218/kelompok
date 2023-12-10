<?php
require "koneksi.php";

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama='$nama'");
$produk = mysqli_fetch_array($queryProduk);

if ($produk) {
    // Tampilkan informasi produk
    $queryProdukTerkait = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$produk[kategori_id]' AND id!='$produk[id]' LIMIT 4");
} else {
    // Produk tidak ditemukan, mungkin tampilkan pesan atau redirect ke halaman lain
    header("Location: halaman_error.php");
    exit();
}

$status = isset($_GET['status']) ? $_GET['status'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Fashion | Detail produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">
    <?php require "navbar.php"; ?>

    <!-- detail produk -->
    <div class="container-fluid py-5">
        <!-- Tampilkan pesan transaksi -->
        <?php if ($status == 'success'): ?>
            <div class="alert alert-success" role="alert">
                Transaksi berhasil! Terima kasih atas pembelian Anda.
            </div>
        <?php elseif ($status == 'failed'): ?>
            <div class="alert alert-danger" role="alert">
                Maaf, stok produk tidak mencukupi untuk transaksi ini.
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-3">
                    <div class="card shadow">
                        <img src="image/<?php echo $produk['foto']; ?>" class="card-img-top" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card shadow">
                        <div class="card-body">
                            <h1 class="card-title">
                                <?php echo $produk['nama']; ?>
                            </h1>
                            <p class="card-text fs5">
                                <?php echo $produk['detail']; ?>
                            </p>
                            <p class="card-text text-harga">Harga: Rp.
                                <?php echo $produk['harga']; ?>
                            </p>
                            <p class="card-text fs-5">Status Ketersediaan: <strong>
                                    <?php echo $produk['ketersediaan_stok']; ?>
                                </strong></p>
                            <!-- Button/Icon for buying -->
                            <a href="transaksii.php?produk_id=<?php echo $produk['id']; ?>" class="btn illustration2"
                                style="color:#fff;">Beli
                                Sekarang</a>
                        </div>
                    </div>
                    <div class="col-12 mt-2 shadow">
                        <div class="card flex-fill border-0 illustration1">

                            <!-- Gambar -->
                            <img src="image/bannersf.png" alt="" class="img-fluid"
                                style="object-fit: cover; height: 100%; border-radius: 5px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- produk terkait -->
    <div class="container-fluid py-5 illustration1">
        <div class="container">
            <h1 class="text-center text-white mb-5">Produk Terkait</h1>
            <div class="row">
                <?php while ($data = mysqli_fetch_array($queryProdukTerkait)) { ?>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>">
                            <img src="image/<?php echo $data['foto']; ?>"
                                class="produk-terkait-image img-fluid img-thumbnail" alt="">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>