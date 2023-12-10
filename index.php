<?php
require "koneksi.php";
$queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JUDUL -->
    <title>Star Fashion</title>
    <!-- LINK BOOTSTRAP -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- LINK FONTAWESOME -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- LINK MYSTYLE -->
    <link rel="stylesheet" href="css/style.css">
    <!-- LINK FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&family=Lobster&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@900&display=swap" rel="stylesheet" />
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

    <!-- main content -->
    <div class="container-fluid py-5">

        <!-- kategori terlaris -->
        <div class="container text-center">
            <h3 class="mb-5">Kategori Terlaris</h3>

            <div class="row nt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center"
                        style="border-radius:10px;">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Baju Pria">Baju
                                Pria</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-wanita d-flex justify-content-center align-items-center"
                        style="border-radius:10px;">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Baju Wanita">Baju
                                Wanita</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="highlighted-kategori kategori-sepatu d-flex justify-content-center align-items-center"
                        style="border-radius:10px;">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Sepatu">Sepatu</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- tentang kami  -->
        <div class="container">
            <div class="tentang-kami shadow mt-3">
                <!-- <h3 class="text-center">
                Tentang Kami
            </h3>
            <p class="mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae tenetur voluptate perspiciatis alias
                dolores, pariatur quod totam necessitatibus! Repellat debitis id sequi, atque, corrupti omnis
                consectetur temporibus a architecto veritatis voluptate modi velit voluptates nostrum quo earum
                deleniti illum quas, dolorum est fugit laborum itaque ut harum. Accusantium numquam atque nemo
                quibusdam enim impedit quaerat accusamus. Quaerat iure repellendus delectus, laudantium quod numquam
                odit animi commodi maxime doloremque quae pariatur?
            </p> -->
                <div>
                    <div class="p-2 d-flex">
                        <div class="wrapper mx-4">
                            <div class="p-2">
                                <b style="color: #717171; font-family: 'Mulish'">
                                    <h1 class="ms-2">GET TO KNOW <br />MORE ABOUT US</h1>
                                </b>
                            </div>
                            <div class="p-2 me-5">
                                <h5 class="ms-2" style="color: #818181;">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit consequatur, culpa est corporis voluptates
                                    cumque assumenda ea quo adipisci! Ab dolore
                                    reprehenderit cum quis maiores doloribus!
                                </h5>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="kotak2 shadow">
                <div class="anak-kotak">
                    <div class="d-flex flex-row mb-3">
                        <div class="p-2 d-flex">
                            <div class="image-text">
                                <img src="asset/img/senyum.png" alt="" width="200px" height="250px" class="mb-5" />
                            </div>
                            <div class="wrapper mx-4">
                                <div class="p-2">
                                    <b style="color: #6f984c; font-family: 'Mulish'">
                                        <h1 class="ms-2">GET TO KNOW <br />MORE ABOUT US</h1>
                                    </b>
                                </div>
                                <div class="p-2 me-5">
                                    <h5 class="ms-2" style="color: #6f984c;">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Sit consequatur, culpa est corporis voluptates
                                        cumque assumenda ea quo adipisci! Ab dolore
                                        reprehenderit cum quis maiores doloribus!
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </div> -->

        <!-- carousel slider -->
        <div class="container-1">
            <div class="container-slider py-5">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button> -->
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/b1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/b2.png" class="d-block w-100" alt="...">
                        </div>
                        <!-- <div class="carousel-item">
                            <img src="image/3.png" class="d-block w-100" alt="...">
                        </div> -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- produk -->
        <div class="container-fluid produk">
            <div class="container text-center">
                <h3 class="mb-5">Produk</h3>

                <div class="row mt-5">
                    <?php while ($data = mysqli_fetch_array($queryProduk)) { ?>
                        <div class="col-sm-6 col-md-4 mb-4">
                            <div class="card h-100 shadow">
                                <div class="image-box">
                                    <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <?php echo $data['nama']; ?>
                                    </h4>
                                    <p class="card-text text-truncate">
                                        <?php echo $data['detail']; ?>
                                    </p>
                                    <p class="card-text text-harga">Rp
                                        <?php echo $data['harga']; ?>
                                    </p>
                                    <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 ">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <a class="btn btn-outline-warning mt-3 p-3 fs-3 mb-5" href="produk.php">See More</a>

            </div>
        </div>

    </div>

    <?php require "footer.php"; ?>
    <script src=" bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>