<?php 
require("konek.php");
$akun_id = $_SESSION['akun_id'];
$current = mysqli_fetch_all(mysqli_query($konek, "SELECT role FROM tb_user WHERE tb_user.id = $akun_id"), MYSQLI_ASSOC);
foreach ($current as $role);
if ($role == "admin"):
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <style>
        body {
            background-image: linear-gradient(to top, darkblue, blue, lightblue, white);
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container-lg">
            <div class="container px-4 text-center">
                <div class="mt-4">
                    <h2>Main Menu</h2>
                    <div class="row align-item-start">
                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-success text-light">
                                    <h3>AKun</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" role="group">
                                        <a href="tabel/users.php" class="btn btn-outline-warning">Tabel User</a>
                                        <a href="create_new/akun.php" class="btn btn-outline-warning">Buat Akun</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-warning">
                                        <h3>Tiket</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-group" role="group">
                                            <a href="tabel/tiket.php" class="btn btn-outline-primary">Tabel Tiket</a>
                                            <a href="create_new/tiket.php" class="btn btn-outline-primary">Buat Tiket</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h3>Transaksi</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-group" role="group">
                                            <a href="tabel/transaksi.php" class="btn btn-outline-success">Tabel Transaksi</a>
                                            <a href="create_new/transaksi.php" class="btn btn-outline-success">Buat Transaksi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
else:
    $querythis = mysqli_fetch_all(mysqli_query($konek, "SELECT *, kategori FROM tb_transaksi LEFT JOIN tb_tiket ON tb_transaksi.id_tiket = tb_tiket.id WHERE id_user = $akun_id"), MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <style>
        body {
            background-image: linear-gradient(to top, darkgreen, green, lightgreen, white);
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container-lg">
            <div class="container px-4 text-center">
                <div class="mt-4">
                    <div class="row align-item-start">
                    <?php foreach($querythis as $yours): ?>
                        <div class="col">
                            <div class="card">
                                <div class="card-head">
                                    <h3>Tiket <?= $yours['kategori'] ?></h3>
                                </div>
                                <div class="card-body">
                                    <div class="mb-1">
                                        <h5>Jumlah: <?= $yours['jml_tiket'] ?></h5>
                                    </div>
                                    <div class="mb-1">
                                        <h5>Total Harga: <?= $yours['total_harga'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
endif;
?>