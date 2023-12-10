<?php
require "session.php";
require "../koneksi.php";

$query = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON a. kategori_id=b.id");
$jumlahProduk = mysqli_num_rows($query);

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin kategori</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- link fontawesome -->
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="../css/sidebar1.css">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar -->
        <?php require "sidebar.php"; ?>

        <!-- main start -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="../image/admin.svg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="content px-3 py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <i class="fas fa-box pe-2"></i> Product <span><a href="index.php"
                                    class="breadcrumb-item active no-decoration">|
                                    Dashboard</a></span>
                        </li>
                    </ol>
                </nav>
                <!-- <div class="container-fluid mb-3">
                    <h4>Halo
                        <?php echo $_SESSION['username']; ?>
                    </h4>
                </div> -->
                <div class="row">
                    <div class="col-12">
                        <div class="card flex-fill border-0 illustration1">

                            <!-- Gambar -->
                            <img src="../image/bannersf.png" alt="" class="img-fluid"
                                style="object-fit: cover; height: 100%; border-radius: 5px;">

                        </div>
                    </div>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <div class="card shadow p-3 mb-3 bg-body-tertiary rounded">
                                    <div class="card-header text-center illustration3">
                                        <h4 class="text-center" style="color: #fff; font-family: 'Poppins'">TAMBAH
                                            PRODUK</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="nama" name="nama" class="form-control"
                                                        autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                                <div class="col-sm-10">
                                                    <select name="kategori" id="kategori" class="form-control" required>
                                                        <option value="">Pilih Satu</option>
                                                        <?php
                                                        while ($data = mysqli_fetch_array($queryKategori)) {
                                                            ?>
                                                            <option value="<?php echo $data['id']; ?>">
                                                                <?php echo $data['nama']; ?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="harga" class="list col-sm-2 col-form-label">Harga</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="harga" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="foto" class="list col-sm-2 col-form-label">Foto</label>
                                                <div class="col-sm-10">
                                                    <input type="file" name="foto" id="foto" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="detail" class="list col-sm-2 col-form-label">Detail</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" name="detail" id="detail"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <label for="ketersediaan_stok"
                                                    class="list col-sm-2 col-form-label">Ketersediaan Stok</label>
                                                <div class="col-sm-10">
                                                    <select name="ketersediaan_stok" id="ketersediaan_stok"
                                                        class="form-control">
                                                        <option value="tersedia">tersedia</option>
                                                        <option value="habis">habis</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div>
                                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                        </div> -->
                                            <div class="position-relative">
                                                <div class="position-absolute bottom-0 end-0 MR-5">
                                                    <button type="submit" name="simpan" class="btn btn-warning"
                                                        style="color: black;">Kirim</button>
                                                    <button type="reset" class="btn btn-danger"
                                                        style="color: white;">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_POST['simpan'])) {
                                            $nama = htmlspecialchars($_POST['nama']);
                                            $kategori = htmlspecialchars($_POST['kategori']);
                                            $harga = htmlspecialchars($_POST['harga']);
                                            $detail = htmlspecialchars($_POST['detail']);
                                            $ketersediaan_stok = htmlspecialchars($_POST['ketersediaan_stok']);

                                            $target_dir = "../image/";
                                            $nama_file = basename($_FILES["foto"]["name"]);
                                            $target_file = $target_dir . $nama_file;
                                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                                            $image_size = $_FILES["foto"]["size"];
                                            $random_name = generateRandomString(20);
                                            $new_name = $random_name . "." . $imageFileType;

                                            if ($nama == '' || $kategori == '' || $harga == '') {
                                                ?>
                                                <div class="alert alert-warning mt-3" role="alert">
                                                    Nama, kategori dan harga wajib disi
                                                </div>
                                                <?php
                                            } else {
                                                if ($nama_file != '') {
                                                    if ($image_size > 500000) {
                                                        ?>
                                                        <div class="alert alert-warning mt-3" role="alert">
                                                            File tidak boleh lebih dari 500 Kb
                                                        </div>
                                                        <?php
                                                    } else {
                                                        if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif') {
                                                            ?>
                                                            <div class="alert alert-warning mt-3" role="alert">
                                                                File wajib berisi foto jpg atau png atau gif
                                                            </div>
                                                            <?php
                                                        } else {
                                                            move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);
                                                        }

                                                    }
                                                }

                                                // query insert to product table
                                                $queryTambah = mysqli_query($con, "INSERT INTO produk (kategori_id, nama, harga, foto, detail, ketersediaan_stok) VALUES ('$kategori', '$nama', '$harga', '$new_name', '$detail', '$ketersediaan_stok')");

                                                if ($queryTambah) {
                                                    ?>
                                                    <div class="alert alert-primary mt-3" role="alert">
                                                        Produk Berhasil Tersimpan
                                                    </div>
                                                    <meta http-equiv="refresh" content="2; url=produk.php">
                                                    <?php
                                                } else {
                                                    echo mysqli_error($con);
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card flex-fill border-0 illustration1 shadow"
                                    style="height: 97%; width:100%">
                                    <!-- Gambar -->
                                    <img src="../image/bannersf4.png" alt="" class="img-fluid"
                                        style="object-fit: cover; height: 100%; border-radius: 5px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card flex-fill border-0 illustration1 shadow"
                                    style="height: 84%; width:100%">
                                    <!-- Gambar -->
                                    <img src="../image/bannersf3.png" alt="" class="img-fluid"
                                        style="object-fit: cover; height: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded ">
                                    <div class="card-header text-center illustration2">
                                        <h4 class="text-center" style="color: #fff; font-family: 'Poppins'">LIST
                                            PRODUK
                                        </h4>
                                        <!-- <h6 class="card-subtitle text-muted">Deskripsi tabel kategori Anda.</h6> -->
                                    </div>
                                    <div class="card-body" style="max-height: 300px; overflow-y: scroll;">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-bordered shadow table-striped p-6 mb-5 bg-body-tertiary rounded">
                                                <thead class="table-warning">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama</th>
                                                        <th>Kategori</th>
                                                        <th>Harga</th>
                                                        <th>Ketrsediaan Stok</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">

                                                    <?php
                                                    if ($jumlahProduk == 0) {
                                                        ?>
                                                        <tr>
                                                            <td colspan=6 class="text-center">Data produk tidak tersedia
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    } else {
                                                        $jumlah = 1;
                                                        while ($data = mysqli_fetch_array($query)) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $jumlah; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $data['nama']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $data['nama_kategori']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $data['harga']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $data['ketersediaan_stok']; ?>
                                                                </td>
                                                                <td>
                                                                    <a href="produk-detail.php?p=<?php echo $data['id']; ?>"
                                                                        class="btn btn-info"><i class="fas fa-search"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $jumlah++;
                                                        }
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>Star Fashion</strong>
                                </a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Social Media</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- main end -->
    </div>

    <!-- script -->
    <script src="../js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>