<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>

<h2 class="mb-5">Edit Produk</h2>

<form action="<?= base_url('admin/daftar-produk/change/'.$produk['id']); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama">Nama Produk</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $produk['nama']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" name="jenis" id="jenis"value="<?= $produk['jenis']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="warna">Warna</label>
            <input type="text" class="form-control" name="warna" id="warna"value="<?= $produk['warna']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga"value="<?= $produk['harga']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
        <label for="gambar" class="form-label">Gambar Produk Baru Jika Mau</label>
        <input type="file" class="form-control" id="gambar" name="gambar" autocomplete="off">
        
    </div>
        <div class="mb-3">
            <label for="stok">Stok Produk</label>
            <input type="text" class="form-control" name="stok" id="stok"value="<?= $produk['stok']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-produk') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>
