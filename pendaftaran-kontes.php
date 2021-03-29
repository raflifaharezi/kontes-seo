<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <a class="navbar-brand" href="index.php">
        <img src="images/paus gudangku.png" alt="" height="45px" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse dd-flex justify-content-end"
        id="navbarNav"
      >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              class="nav-link text-white btn btn-success"
              href="pendaftaran-kontes.php"
              >PENDAFTARAN KONTES</a
            >
          </li>
        </ul>
      </div>
    </nav>

    <header class="pt-5 border-bottom bg-light">
      <div class="container pt-md-1 pb-md-1">
        <h1 class="bd-title mt-4 font-weight-bold">
          <i class="fa fa-book-open" aria-hidden="true"></i> PENDAFTARAN
        </h1>
        <p class="bd-lead">Pedaftaran Peserta Kontes SEO Gudangku.</p>
      </div>
    </header>

    <div class="container mt-3">
      <a href="index.php" class="btn btn-secondary">Detail Kontes</a>
      <a href="peserta-kontes.php" class="btn btn-info">Peserta Kontes</a>
      <a href="pendaftaran-kontes.php" class="btn btn-danger"
        >Pendaftaran Kontes</a
      >
      <a href="pemenang-kontes.php" class="btn btn-success">Pemenang Kontes</a>

      <div class="card mt-3">
        <div class="card-header">
          <h4>Data Diri</h4>
        </div>
        <div class="card-body">
          <form action="proses-pendaftaran.php" method="POST">
            <div class="form-row form-group">
              <div class="col-md-6">
                <label for="name">Nama Lengkap :</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nama lengkap"
                  name="name"
                  required
                />
              </div>
              <div class="col-md-6">
                <label for="email">Email :</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Email"
                  name="email"
                  required
                />
              </div>

              <div class="col-md-6 mt-4">
                <label for="tlphone">Telephone/Handphone :</label>
                <input
                  type="number"
                  class="form-control"
                  placeholder="No telephone"
                  name="no_telephone"
                  required
                />
              </div>
              <div class="col-md-6 mt-4">
                <label for="adderess">Alamat Lengkap :</label>
                <textarea name="address" id="" class="form-control"></textarea>
              </div>

              <div class="col-md-6 mt-4">
                <label for="city">Kota / Kab :</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Kota"
                  name="city"
                  required
                />
              </div>
              <div class="col-md-6 mt-4">
                <label for="province">Provinsi :</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="provinsi"
                  name="province"
                  required
                />
              </div>

              <div class="col-md-6 mt-4">
                <label for="url_website">URL Website Utama :</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="https://example.co.id"
                  name="url_website"
                  required
                />
              </div>
              <div class="col-md-6 mt-4">
                <label for="url_facebook">URL Facebook :</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="https://facebook.com"
                  name="url_facebook"
                  required
                />
              </div>
              <div class="col-md-6 mt-4">
                <label for="url_instagram">URL Instagram :</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="https://instagram.com"
                  name="url_instagram"
                  required
                />
              </div>
            </div>

            <footer>
            <input type="submit" value="Daftar" name="daftar" class="btn btn-success" />
            </footer>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5">
      <div class="container-fluid bg-dark">
        <div class="row p-3">
          <div class="col-12">
            <div class="text-center text-white font-weight-bold">
              Copyright © 2021 Gudangku.id. All rights reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
