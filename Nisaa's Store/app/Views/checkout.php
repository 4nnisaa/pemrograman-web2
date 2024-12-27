<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container">
    <h2>Review Order</h2>
    <hr />
    <h5>Celana & Baju</h5>
    <h5>Rp 560,000</h5>

    <h2 class="mt-3">Alamat pengiriman</h2>
    <hr />
    <h5>Jambi Luar Kota, Simpang Sungai Duren.</h5>

    <h2 class="mt-3">Metode Bayar</h2>
    <hr />
    <h5>Transfer Bank</h5>
    <h5>BCA Surah Annisa</h5>
    <h5>Rek. 1133777995</h5>

    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
            <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
