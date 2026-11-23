<?php 
require("../konek.php");
$queryusers = mysqli_fetch_all(mysqli_query($konek, "SELECT * FROM tb_user"), MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <style>
        body {
            background-image: linear-gradient(to top, orange, yellow, white);
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container">
            <table class="table table-striped table-hover border">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($queryusers as $i): ?>
                        <tr>
                            <td><?= $o++ ?></td>
                            <td><?= $i['username'] ?></td>
                            <td><?= $i['nama'] ?></td>
                            <td><?= $i['role'] ?></td>
                            <td><a href="../form_edit/users.php?id=<?= $i['id'] ?>">Edit</a><a href="../action/hapus/users.php?id=<?= $i['id'] ?>">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>