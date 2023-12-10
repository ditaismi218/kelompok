<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Fashion | Tentang Kami</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body">
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

    <!-- main -->
    <div class="container-fluid py-5">
        <div class="container fs-5 text-center">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam delectus molestias libero vero quam
                temporibus enim cumque maxime voluptates dolore error at facere, accusamus asperiores illum culpa
                debitis. Esse voluptatem quidem quo, ratione expedita obcaecati iusto minus culpa ad voluptas ex placeat
                commodi sit exercitationem accusamus aperiam repellendus voluptate recusandae asperiores rem. Dolorum
                sed aperiam, voluptates consequatur dignissimos hic assumenda nihil mollitia eveniet officia quas odio
                minima. Odit numquam minima non pariatur similique distinctio voluptate, obcaecati a, impedit vel
                quisquam neque expedita ipsa sequi nihil est velit quam officiis hic exercitationem harum. Itaque,
                cupiditate eos. Eaque voluptates in nihil beatae?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore saepe aliquam dolorem suscipit sapiente
                architecto mollitia ad eos assumenda ab ea, maiores quidem tempore? Nesciunt alias modi qui, ducimus
                impedit veniam delectus excepturi a deserunt explicabo sit soluta. Commodi minima fugiat rem iusto quos
                animi! Dignissimos facilis suscipit obcaecati possimus aspernatur ullam atque at repudiandae mollitia
                ratione, doloremque consectetur laboriosam est dolorem quam illum magni illo voluptas non enim adipisci!
                Saepe ipsum nostrum aut similique voluptatibus aperiam deleniti ipsa laboriosam?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint, doloribus placeat nam dignissimos
                inventore officiis nisi praesentium atque nemo mollitia accusamus fugit libero ducimus tempora itaque
                labore. Non pariatur delectus similique ut, qui, recusandae fugit eaque, autem deserunt magnam illo
                facilis! Vero error reprehenderit illum consequuntur. Vero, ex nisi. Officia, recusandae. Nobis ratione
                velit numquam facere architecto aut autem exercitationem dolore tempore quo, ut odio ducimus aperiam
                excepturi temporibus magni illo? Alias provident vitae obcaecati! Rerum optio vitae illo inventore porro
                cupiditate, placeat corporis soluta iste, id culpa consequatur voluptatem molestias dicta alias! Neque
                veritatis, fugiat nulla odio, incidunt in facere voluptatibus, officiis ipsa sapiente nihil accusamus
                pariatur optio! Eum cum quia dicta temporibus quisquam repellendus aliquam rerum deserunt minima id,
                voluptas hic repellat eius et optio, nemo alias eveniet atque saepe tenetur, quibusdam doloribus qui
                magni. Animi aut hic saepe quam a ducimus libero quasi iusto repellendus exercitationem!
            </p>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>