<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <style>
        body {
            background-image: linear-gradient(to right, blue, cyan, white);
            background-attachment: fixed;
        }
    </style>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Buat Tiket</h3>
                </div>
                <div class="card-body">
                    <form action="../action/register/tiket.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Umum">
                            <label class="form-check-label" for="Umum">Umum</label>
                            <input class="form-check-input" type="radio" name="kategori" id="kategori" value="Membership">
                            <label class="form-check-label" for="Membership">Membership</label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input class="form-control" type="number" name="harga" id="harga" required>
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