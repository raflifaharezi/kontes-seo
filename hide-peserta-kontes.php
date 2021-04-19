<?php include("koneksi.php"); ?>
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
    <style>
     
    </style>
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
          <i class="fa fa-book-open" aria-hidden="true"></i> PESERTA
        </h1>
        <p class="bd-lead">Peserta Kontes Gudangku.</p>
      </div>
    </header>

    <div class="container-fluid mt-3">
      <a href="index.php" class="btn btn-secondary mt-3 mt-md-3 mt-lg-0">Detail Kontes</a>
      <a href="peserta-kontes.php" class="btn btn-info mt-3 mt-md-3 mt-lg-0">Peserta Kontes</a>
      <a href="pendaftaran-kontes.php" class="btn btn-danger mt-3 mt-md-3 mt-lg-0"
        >Pendaftaran Kontes</a
      >
      <a href="pemenang-kontes.html" class="btn btn-success mt-3 mt-md-3 mt-lg-0">Pemenang Kontes</a>
      <a href="banner-gudangku.php" class="btn btn-warning text-white mt-3 mt-md-3 mt-lg-0">Banner Gudangku</a>


    <?php if(isset($_GET['status'])): ?>
      <p>
          <?php
              if($_GET['status'] == 'sukses'){
                  echo "Pendaftaran siswa baru berhasil!";
              } else {
                  echo "Pendaftaran gagal!";
              }
          ?>
      </p>
    <?php endif; ?>

      <div class="orders mt-3">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Peserta Kontes</h4>
              </div>
              <div style="overflow-x:auto;">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telephone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota / Kab</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Url Website</th>
                    <th scope="col">Url Facebook</th>
                    <th scope="col">Url Instagram</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $sql = "SELECT * FROM users";
                    $query = mysqli_query($koneksi, $sql);

                    while($user = mysqli_fetch_array($query)){
                      echo "<tr>";
                      echo "<td>".$user['id']."</td>";
                      echo "<td>".$user['name']."</td>";
                      echo "<td>".$user['email']."</td>";
                      echo "<td>".$user['no_telephone']."</td>";
                      echo "<td>".$user['address']."</td>";
                      echo "<td>".$user['city']."</td>";
                      echo "<td>".$user['province']."</td>";
                      echo "<td ><a href=".$user['url_website'].">" .$user['url_website']."</a></td>";
                      echo "<td ><a href=".$user['url_website'].">" .$user['url_facebook']."</a></td>";
                      echo "<td ><a href=".$user['url_website'].">" .$user['url_instagram']."</a></td>";
                      echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
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
