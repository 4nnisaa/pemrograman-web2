<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Produk</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus Produk</h1>

        <?php if (isset($produk)): ?>
            <p>Apakah Anda yakin ingin menghapus produk dengan data berikut?</p>
            <ul>
                <li><strong>Nama:</strong> <?= htmlspecialchars($produk['nama']); ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($produk['harga'], 2, ',', '.'); ?></li>
                <li><strong>Stok:</strong> <?= htmlspecialchars($produk['stok']); ?></li>
            </ul>

            <form action="/admin/daftar-produk/hapus/<?= $produk['id']; ?>" method="post">
                <?= csrf_field(); ?> 
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/daftar-produk" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data Produk tidak ditemukan.</p>
            <a href="/admin/daftar-produk" class="btn btn-secondary">Kembali ke Daftar produk</a>
        <?php endif; ?>
    </div>
</body>
</html>