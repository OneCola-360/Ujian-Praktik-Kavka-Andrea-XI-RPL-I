<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <style>
        body {
            background-image: linear-gradient(to top, black, gray, white);
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container-lg">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    <h1>Register Akun Baru</h1>
                </div>
                <div class="card-body">
                    <form action="../action/register_akun.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" required>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" name="username" id="username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input class="form-control" type="password" name="password" id="password" required>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Kirim</button>
                            <button class="btn btn-danger" type="reset">Hapus</button>
                        </div>
                        <input type="text" disabled style="display: none;" value="customer" name="role" id="role">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>