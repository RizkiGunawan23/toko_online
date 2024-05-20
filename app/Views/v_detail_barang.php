<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            width: 18rem;
            /* Sesuaikan ukuran card */
            margin: 0 auto;
            /* Center the card horizontally */
        }

        .detail-img {
            max-width: 200px;
            /* Maksimal lebar gambar */
            height: auto;
            margin: 0 auto;
            /* Center the image horizontally */
            display: block;
            /* Ensure the image is a block element */
        }
    </style>
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
        <div class="card">
            <img src="<?= base_url('images/' . $barang['gambar']) ?>" class="card-img-top detail-img" alt="<?= $barang['nama_barang'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $barang['nama_barang'] ?></h5>
                <p class="card-text"><?= $barang['deskripsi_barang'] ?></p>
                <p class="card-text">Harga: Rp <?= number_format($barang['harga_barang'], 0, ',', '.') ?></p>
                <p class="card-text">Stok: <?= $barang['stok_barang'] ?></p>
                <a href="<?= base_url('cart/add/' . $barang['id_barang']) ?>" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>