<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style>
        .card-img-top {
            width: 10em;
            height: 10em;
            object-fit: fill;
            display: block;
            margin: 0 auto;
        }

        .card {
            cursor: pointer;
        }

        .card-title a {
            text-decoration: none;
            color: inherit;
        }

        .card-title a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="d-flex justify-content-center w-100">
                <a class="navbar-brand mx-auto" href="/">Toko Online</a>
            </div>
            <a href="<?= base_url('cart') ?>" class="ms-auto">
                <span class="material-symbols-outlined">
                    shopping_cart
                </span>
            </a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php foreach ($barang as $item) : ?>
                <div class="col">
                    <div class="card" onclick="window.location.href='<?= base_url('barang/detail/' . $item['id_barang']) ?>'">
                        <img src="<?= base_url('images/' . $item['gambar']) ?>" class="card-img-top" alt="<?= $item['nama_barang'] ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?= base_url('barang/detail/' . $item['id_barang']) ?>"><?= $item['nama_barang'] ?></a>
                            </h5>
                            <p class="card-text"><?= $item['short_deskripsi_barang'] ?></p>
                            <p class="card-text">Harga: Rp <?= number_format($item['harga_barang'], 0, ',', '.') ?></p>
                            <p class="card-text">Stok: <?= $item['stok_barang'] ?></p>
                            <a href="<?= base_url('cart/add/' . $item['id_barang']) ?>" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>