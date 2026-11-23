<?php 
require("../konek.php");
$querytransaksi = mysqli_fetch_all(mysqli_query($konek, "SELECT *, nama, kategori FROM tb_transaksi LEFT JOIN tb_users ON tb_transaksi.id_user = tb_users.id LEFT JOIN tb_kategori ON tb_transaksi.id_kategori = tb_kategori.id"), MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <style>
        body {
            background-image: linear-gradient(to right, orange, yellow, white);
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container">
            <table class="table table-striped table-hover border">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Tiket</th>
                        <th scope="col">Jumlah Tiket</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($querytransaksi as $i): ?>
                        <tr>
                            <td><?= $o++ ?></td>
                            <td><?= $i['nama'] ?></td>
                            <td><?= $i['kategori'] ?></td>
                            <td><?= $i['jml_tiket'] ?></td>
                            <td><?= $i['total_harga'] ?></td>
                            <td><a href="../form_edit/transaksi.php?id=<?= $i['id'] ?>">Edit</a><a href="../action/hapus/transaksi.php?id=<?= $i['id'] ?>">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>