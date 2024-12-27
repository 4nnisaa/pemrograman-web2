<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nisaa's Store</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url()?>css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-end">
          <a href="<?= base_url() ?>chart" class="btn btn-secondary">Keranjang Belanja <span class="badge text-bg-warning">4</span></a>
        </div>
      </div>
      <div class="row bg-primary-subtle mb-5">
        <div class="col-6 p-5">
          <h1>Selamat Datang di Nisaa's Store</h1>
          <p>Kami menyediakan berbagai macam produk.</p>
          <a href="#" class="btn btn-success">Lihat Produk</a>
        </div>
        <div class="col-6 p-5">
          <h1>Temukan produk favorit Anda!</h1>
          <form action="">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Jenis Produk"/>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary">Cari</button>
            </div>
          </form>
        </div>
      </div>

      <h2>Produk Terlaris</h2>
      <div class="row mb-5 g-3">
        <div class="col-3">
          <div class="card">
            <img src="images/Tas.jpeg" class="card-img-top" alt="produk 1" />
            <div class="card-body">
              <h5 class="card-title">Tas</h5>
              <p class="card-text">
                Rp 200,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/sn.jpeg" class="card-img-top" alt="produk 2" />
            <div class="card-body">
              <h5 class="card-title">Seneakers</h5>
              <p class="card-text">
                Rp 300,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/ss.jpeg" class="card-img-top" alt="produk 3" />
            <div class="card-body">
              <h5 class="card-title">Celana</h5>
              <p class="card-text">
                Rp 200,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/b.jpeg" class="card-img-top" alt="produk 4" />
            <div class="card-body">
              <h5 class="card-title">Baju</h5>
              <p class="card-text">
                Rp 360,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-danger-subtle py-3">
      <div class="container">
        Copyright 2024. Nisaa's Store. All Rights Reserved.
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
