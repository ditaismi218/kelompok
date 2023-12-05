<?php
require "session.php";
require "../koneksi.php";

$id = $_GET['p'];

$query = mysqli_query($con, "SELECT * FROM kategori WHERE id='$id'");
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Detail</title>
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
                            <i class="fas fa-clipboard pe-2"></i> <a href="kategori.php"
                                class="breadcrumb-item active no-decoration">
                                Kategori</a>
                            <span><a href="index.php" class="breadcrumb-item active no-decoration">|
                                    Dashboard</a></span>
                        </li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-12">
                        <div class="card flex-fill border-0 illustration1">

                            <!-- Gambar -->
                            <img src="../image/bannersf.png" alt="" class="img-fluid"
                                style="object-fit: cover; height: 100%; border-radius: 5px;">

                        </div>
                    </div>
                    <div class="container">
                        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                            <div class="card-header text-center illustration2">
                                <h4 class="text-center" style="color: #fff; font-family: 'Poppins'">DETAIL KATEGORI
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="row mb-3">
                                            <label for="kategori" class="col-sm-2 col-form-label">
                                                <h5 class="kategori">Kategori</h5>
                                            </label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kategori" id="kategori" class="form-control"
                                                    value="<?php echo $data['nama']; ?>">
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <button type="submit" class="btn btn-primary" name="editBtn">Edit</button>
                                            <button type="submit" class="btn btn-danger"
                                                name="deleteBtn">Delete</button>
                                        </div>
                                    </form>

                                    <?php if (isset($alertMessage)): ?>
                                        <div class="alert alert-<?php echo isset($querySimpan) ? 'primary' : 'warning'; ?> mt-3"
                                            role="alert">
                                            <?php echo $alertMessage; ?>
                                        </div>
                                    <?php endif; ?>
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