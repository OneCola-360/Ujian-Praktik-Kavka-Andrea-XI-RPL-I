<?php 
require("../konek.php");
$queryuser = mysqli_fetch_all(mysqli_query($konek, "SELECT * FROM tb_user WHERE tb_user.role = 'customer'"), MYSQLI_ASSOC);
$querytiket = mysqli_fetch_all(mysqli_query($konek, "SELECT * FROM tb_tiket"));
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <style>
        body {
            background-image: linear-gradient(to right, lime, lightgreen, white);
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Buat Transaksi</h3>
                </div>
                <div class="card-body">
                    <form action="../action/register/transaksi.php" method="post"></form>
                        <div class="mb-3">
                            <div class="dropdown">
                                <label class="form-label">Pengguna</label>
                                <select name="user" id="user">
                                <?php foreach ($queryuser as $i): ?>
                                    <option value="<?= $i['id'] ?>"><?= $i['nama'] ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="dropdown">
                                <label class="form-label">Tiket</label>
                                <select name="tiket" id="tiket">
                                <?php foreach ($querytiket as $i): ?>
                                    <option value="<?= $i['id'] ?>"><?= $i['kategori'] ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Tiket</label>
                            <input class="form-control" type="number" name="jumlah" id="jumlah" require>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Kirim</button>
                            <button class="btn btn-danger" type="reset">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>