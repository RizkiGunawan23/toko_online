<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="d-flex justify-content-center w-100">
                <a class="navbar-brand mx-auto" href="/">Toko Online</a>
            </div>
            <a href="<?= base_url('/') ?>" class="btn btn-primary ms-auto">
                Home
            </a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Keranjang Belanja</h2>
        <form action="<?= base_url('cart/update') ?>" method="post">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $item) : ?>
                        <tr>
                            <td><?= $item['nama_barang'] ?></td>
                            <td>Rp <?= number_format($item['harga_barang'], 0, ',', '.') ?></td>
                            <td><input type="number" name="quantity[<?= $item['id_barang'] ?>]" value="<?= $item['quantity'] ?>" class="form-control"></td>
                            <td>Rp <?= number_format($item['harga_barang'] * $item['quantity'], 0, ',', '.') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Update Cart</button>
        </form>
        <a href="<?= base_url('cart/checkout') ?>" class="btn btn-success mt-3">Checkout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>