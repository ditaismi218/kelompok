<?php
// session_start();
require "session.php";
require "../koneksi.php";

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);
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
                            <i class="fas fa-clipboard pe-2"></i> Kategori <span><a href="index.php"
                                    class="breadcrumb-item active no-decoration">|
                                    Dashboard</a></span>
                        </li>
                    </ol>
                </nav>
                <!-- <div class="container-fluid">
                    <h4>Halo
                        <?php echo $_SESSION['username']; ?>
                    </h4>
                </div> -->
                <div class="row">
                    <div class="container">
                        <div class="col-12">
                            <div class="card flex-fill border-0 illustration1">

                                <!-- Gambar -->
                                <img src="../image/bannersf.png" alt="" class="img-fluid"
                                    style="object-fit: cover; height: 100%; border-radius: 5px;">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card shadow p-3 mb-3 bg-body-tertiary rounded">
                                    <div class="card-header text-center illustration3">
                                        <h4 class="text-center" style="color: #fff; font-family: 'Poppins'">TAMBAH
                                            KATEGORI</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label for="kategori" class="form-label">Kategori</label>
                                                <input type="text" id="kategori" name="kategori"
                                                    placeholder="Input nama kategori" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn illustration3" type="submit"
                                                    name="simpan_kategori">Kirim</button>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_POST['simpan_kategori'])) {
                                            $kategori = htmlspecialchars($_POST['kategori']);
                                            $queriExist = mysqli_query($con, "SELECT nama FROM kategori WHERE nama='$kategori'");
                                            $jumlahDataKategoriBaru = mysqli_num_rows($queriExist);

                                            if ($jumlahDataKategoriBaru > 0) {
                                                ?>
                                                <div class="alert alert-warning" role="alert">
                                                    Kategori Sudah Ada
                                                </div>
                                                <?php
                                            } else {
                                                $querySimpan = mysqli_query($con, "INSERT INTO kategori (nama) VALUES ('$kategori')");
                                                if ($querySimpan) {
                                                    ?>
                                                    <div class="alert alert-primary" role="alert">
                                                        Kategori Berhasil Tersimpan
                                                    </div>
                                                    <meta http-equiv="refresh" content="2; url=kategori.php">
                                                    <?php
                                                } else {
                                                    echo mysqli_error($con);
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="card flex-fill border-0 shadow p-3 bg-body-tertiary rounded"
                                    style="height: 26%;">
                                    <img src="../image/bannersf2.png" alt="" class="img-fluid"
                                        style="object-fit: cover; height: 100%;">
                                </div>

                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded ">
                                    <div class="card-header text-center illustration2">
                                        <h4 class="text-center" style="color: #fff; font-family: 'Poppins'">LIST
                                            KATEGORI
                                        </h4>
                                        <!-- <h6 class="card-subtitle text-muted">Deskripsi tabel kategori Anda.</h6> -->
                                    </div>
                                    <div class="card-body" style="max-height: 300px; overflow-y: scroll;">
                                        <div class="table-responsive">
                                            <table class="table shadow table-striped p-6 mb-5 bg-body-tertiary rounded">
                                                <thead class="table-warning">
                                                    <tr>
                                                        <th style="width: 10%;">No.</th>
                                                        <th style="width: 60%;">Nama</th>
                                                        <th style="width: 30%;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if ($jumlahKategori == 0) {
                                                        ?>
                                                        <tr>
                                                            <td colspan="3" class="text-center">Data kategori tidak tersedia
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    } else {
                                                        $jumlah = 1;
                                                        while ($data = mysqli_fetch_array($queryKategori)) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $jumlah; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $data['nama']; ?>
                                                                </td>
                                                                <td>
                                                                    <a href="kategori-detail.php?p=<?php echo $data['id']; ?>"
                                                                        class="btn illustration2">
                                                                        <i class="fas fa-search"></i>
                                                                    </a>
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
        <!-- main end -->
    </div>

    <!-- script -->
    <script src="../js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>