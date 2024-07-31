<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $queryLogin = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");
    if(mysqli_num_rows($queryLogin) > 0) {
        $dataUser = mysqli_fetch_assoc($queryLogin);
        if ($password == $dataUser['password']) {
            $_SESSION['NAMA_LENGKAP'] = $dataUser['nama_lengkap'];
            $_SESSION['ID'] = $dataUser['id'];
            header("location:index.php");
        } else {
            header("location:login.php?error=login");
        }
    } else {
        echo "Email Tidak Ditemukan";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header">Login Form</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="login" id="login" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=" assets/js/bootstrap.min.js"></script>
</body>

</html>