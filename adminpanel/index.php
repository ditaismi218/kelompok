<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-kategori {
        background-color: #0a6b4a;
    }
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class=" container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-home"></i> Home
                </li>
            </ol>
        </nav>
        <h2>Halo
            <?php echo $_SESSION['username']; ?>
        </h2>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 summary-kategori p-4">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-align-justify fa-5x text-black-50"></i>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>