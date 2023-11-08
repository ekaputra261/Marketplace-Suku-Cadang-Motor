<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #ff0000;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Regristrasi
                    </div>
                    <form action="" method="post" ;>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="kode_user" name="kode_user" aria-describedby="kode_user" required placeholder="user code">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" required placeholder="username">
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" id="email" name="email" ariade-scribedby="email" required placeholder="email">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="telp" name="telp" aria-describedby="telp" required placeholder="telpon">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="password" required placeholder="password">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="peran" name="peran" aria-describedby="peran" required placeholder="role">
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary" name="btndaftar">Regristrasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
crossorigin="anonymous"></script>
-->
</body>

</html>
<?php
require_once 'database.php';
if (isset($_POST['btndaftar'])) {
    $kode_user = $_POST['kode_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];
    $peran = $_POST['peran'];
    $db = new Database();
    $hasil = $db->insRegister($kode_user, $nama, $email, $telp, $password, $peran);
    if ($hasil)
        echo "
<script>
alert('daftar user sukses');
window.location.href='login.php';
</script>
";
}
