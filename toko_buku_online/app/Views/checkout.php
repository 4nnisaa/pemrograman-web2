<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container">
    <h2 class="mb-5">Checkout</h2>
    <div class="mb-3">
        <table class=" table tabel-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail buku</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url('images/download (1).jpeg'); ?>" alt="" style="width: 150px; height:auto;">
                        <h6>Lord Of The Rings</h6>
                    </td>
                    <td>
                        x1
                    </td>
                    <td>
                        Rp65.000
                    </td>
                    <td>
                        Rp65.000
                    </td>




                </tr>
            </tbody>
        </table>

    </div>
    <h2 class="mb-5">Total : Rp 170.000</h2>
    <h2 class="mb-3">Data Pembeli</h2>
    <div class="mb-5">
        Surah Annisa <br />
        085783093452 <br />
        surahannisa361@gmail.com

    </div>
    <h2 class="mb-3">Alamat Pengiriman</h2>
    <div class="mb-5">
        <span>Jl.Mendalo, Sungai Duren</span>
    </div>
    <div class="mb-5">
        Transfer Bank <br />
        BCA, Surah Annisa <br />
        199220519
    </div>
    <div class="mb-5">
        <a href="<?= base_url('submit') ?>" class="btn btn-danger">Submit</a>
    </div>
</div>
<?= $this->endSection() ?>