<?php 
require("../konek.php");
$querytiket = mysqli_fetch_all(mysqli_query($konek, "SELECT * FROM tb_tiket"), MYSQLI_ASSOC);
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
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($querytiket as $i): ?>
                        <tr>
                            <td><?= $o++ ?></td>
                            <td><?= $i['kategori'] ?></td>
                            <td><?= $i['harga'] ?></td>
                            <td><a href="../form_edit/tiket.php?id=<?= $i['id'] ?>">Edit</a><a href="../action/hapus/tiket.php?id=<?= $i['id'] ?>">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>