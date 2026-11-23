<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <style>
        body {
            background-image: linear-gradient(to left, orange, yellow, white);
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Akun</h3>
                </div>
                <div class="card-body">
                    <form action="../action/register/register_akun.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama">
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" name="username" id="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input class="form-control" type="password" name="password" id="password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <input class="form-check-input" type="radio" name="role" id="role" value="admin">
                            <label class="form-check-label" for="admin">Admin</label>
                            <input class="form-check-input" type="radio" name="role" id="role" value="customer">
                            <label class="form-check-label" for="customer">Customer</label>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Kirim</button>
                            <button class="btn btn-danger" type="reset">Hapus</button>
                        </div>
                        <input type="text" name="id" id="id" value="<?= $_GET['id'] ?>" disabled style="display: none;">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>