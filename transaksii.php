<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Fashion</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">

    <?php require "navbar.php"; ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow p-3 mb-3 bg-body-tertiary rounded">
                    <div class="card-header text-center illustration2">
                        <h4 class="text-center" style="color: #fff; font-family: 'Poppins'">TRANSAKSI</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="proses_pemesanan.php">

                            <input type="hidden" name="produk_id" value="<?php echo $produk['id']; ?>">

                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah Produk:</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="1" min="1"
                                    required>
                                <small class="text-muted">Masukkan jumlah produk yang ingin Anda pesan (min. 1).</small>
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Pengiriman:</label>
                                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>

</body>

</html>