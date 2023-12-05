<?php
session_start();
require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<style>
    body {
        background: linear-gradient(123deg, #F5D9CE 18.17%, #D3D0EF 84.16%);
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, ;

    }

    .container-fluid {
        height: 100vh;
    }

    .card {
        width: 400px;
        border-radius: 15px;
        /* font-weight: bold; */
        color: #919191;
        background-color: white;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .btn-login {
        background: linear-gradient(95deg, #BF81CE 16.18%, #F69B9B 90.86%);
        color: white;
        font-weight: bold;
    }

    .btn-login:hover {
        color: #EADDEE;
    }


    h2 {
        font-weight: bold;
        background: linear-gradient(95deg, #BF81CE 16.18%, #F69B9B 90.86%);
        -webkit-background-clip: text;
        color: transparent;
    }

    .form-control {
        background-color: #EADDEE;
        border: 1px solid #FDAEB1;
    }

    .form-control:focus {
        background-color: #ffffff;
    }
</style>

<body style="background: linear-gradient(123deg, #F5D9CE 18.17%, #D3D0EF 84.16%);">

    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh;">

        <div class="card p-4 shadow" style="width: 400px; border-radius: 15px;">
            <h2 class="text-center mb-3 mt-3">Login</h2>

            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username"
                        placeholder="Enter your username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter your password" required>
                </div>

                <button class="btn btn-login btn-block mt-3" type="submit" name="loginbtn">Login</button>
            </form>

            <?php
            if (isset($_POST['loginbtn'])) {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
                $countdata = mysqli_num_rows($query);
                $data = mysqli_fetch_array($query);

                if ($countdata > 0) {
                    if (password_verify($password, $data['password'])) {
                        $_SESSION['username'] = $data['username'];
                        $_SESSION['login'] = true;
                        header('location: ../adminpanel');
                    } else {
                        ?>
                        <div class="alert alert-warning" role="alert">
                            Password salah
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning" role="alert">
                        Akun tidak tersedia
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and any additional scripts go here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>