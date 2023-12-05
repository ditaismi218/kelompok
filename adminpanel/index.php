<?php
// session_start();
require "session.php";
require "../koneksi.php";

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);

$queryProduk = mysqli_query($con, "SELECT * FROM produk");
$jumlahProduk = mysqli_num_rows($queryProduk);

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
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
                            <i class="fa-solid fa-list pe-2"></i> Dashboard
                        </li>
                    </ol>
                </nav>
                <div class="container-fluid">
                    <h4>Halo
                        <?php echo $_SESSION['username']; ?>
                    </h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card flex-fill border-0 illustration1">

                            <!-- Gambar -->
                            <img src="../image/bannersf.png" alt="" class="img-fluid"
                                style="object-fit: cover; height: 100%; border-radius: 5px;">

                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0 illustration2">
                            <div class="card-body p-0 d-flex flex-fill">
                                <div class="row g-0 w-100">
                                    <div class="col-6">
                                        <div class="p-3 m-1">
                                            <h3>Kategori</h3>
                                            <p class="mb-1">
                                                <?php echo $jumlahKategori; ?> kategori
                                            </p>
                                            <span><a href="kategori.php" class="text-black no-decoration">Lihat
                                                    Detail</a></span>
                                        </div>
                                    </div>
                                    <div class="col-6 align-self-end text-end mb-3">
                                        <i class="illustration-icon fas fa-clipboard fa-7x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0 illustration3">
                            <div class="card-body p-0 d-flex flex-fill">
                                <div class="row g-0 w-100">
                                    <div class="col-6">
                                        <div class="p-3 m-1">
                                            <h3>Produk</h3>
                                            <p class="mb-1">
                                                <?php echo $jumlahProduk; ?> Produk
                                            </p>
                                            <span><a href="produk.php" class="text-black no-decoration">Lihat
                                                    Detail</a></span>
                                        </div>
                                    </div>
                                    <div class="col-6 align-self-end text-end mb-2">
                                        <i class="illustration-icon fas fa-box fa-7x "></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <!-- <div class=" card border-0">
                    <div class="table-d card-header">
                        <h5 class="card-title">
                            basic table
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime accusantium quas in iste
                            tenetur! Vitae natus odit sequi ducimus doloribus numquam, maxime beatae atque deleniti
                            quis harum illum. Quis, quas!
                        </h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
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