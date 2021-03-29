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
    <!-- START: NAVBAR-->
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
        class="collapse navbar-collapse d-flex justify-content-end"
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
    <!-- END : Navbar-->

    <!-- START : Carausel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slider_image.png" class="w-100" />
          <div class="carousel-caption d-none d-md-block">
          <a href="pendaftaran-kontes.php" class="btn btn-success"
          >DAFTAR SEGERA
          </a>
          <h4 class="mt-3">Menangkan Hadiahnya Sampai dengan 15 Juta Rupiah</h4>
      
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slider_image.png" class="w-100" />
          <div class="carousel-caption d-none d-md-block">
          <a href="pendaftaran-kontes.php" class="btn btn-success"
          >DAFTAR SEGERA
          </a>
          <h4 class="mt-3">Menangkan Hadiahnya Sampai dengan 15 Juta Rupiah</h4>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#myCarousel"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#myCarousel"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- END : Carousel-->

    <div class="text-center mt-3 mb-4">
      <h2>Details Kontes SEO Gudangku</h2>
    </div>

    <!-- START : Collapse-->
    <div class="container mt-3">
      <a href="index.php" class="btn btn-secondary">Detail Kontes</a>
      <a href="peserta-kontes.php" class="btn btn-info">Peserta Kontes</a>
      <a href="pendaftaran-kontes.php" class="btn btn-danger"
        >Pendaftaran Kontes</a
      >
      <a href="pemenang-kontes.php" class="btn btn-success">Pemenang Kontes</a>

      <div class="col-12 mt-3">
        <div class="row">
          <div class="card">
            <div class="card-header">
              <h4 class="text-justify">
                Informasi Kontes SEO
                <a href="https://gudangku.id/" class="text-decoration-none"
                  >Gudangku.id</a
                >
              </h4>
            </div>
            <div class="card-body">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card">

                  <!-- Start: Collapse Hadiah-->
                  <div class="card-header bg-primary" id="headingTwo">
                    <h2 class="mb-0">
                      <button
                        class="btn text-white text-justify"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        Hadiah Kontes Gudangku | Fulfillment
                      </button>
                    </h2>
                  </div>

                  <div
                    id="collapseTwo"
                    class="collapse show"
                    aria-labelledby="headingTwo"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body">
                      <p><strong>Juara 1: Uang tunai Rp 7.000.000,-</strong></p>
                      <p><strong>Juara 2: Uang tunai Rp 3.000.000,-</strong></p>
                      <p><strong>Juara 3: Uang tunai Rp 2.000.000,-</strong></p>
                      <p><strong>Juara 4-5: Uang tunai Rp 1.500.000,-</strong></p>
                    </div>
                  </div>
                </div>
                <!-- End: Collapse Hadiah-->

                    <!-- Collapse Informasi Pendaftaran-->
                    <div class="card-header bg-secondary" id="headingOne">
                      <h2 class="mb-0">
                        <button
                          class="btn text-white collapsed text-justify"
                          type="button"
                          data-toggle="collapse"
                          data-target="#collapseOne"
                          aria-expanded="false"
                          aria-controls="collapseOne"
                        >
                          Informasi Pendaftaran Kontes Gudangku | Fulfillment
                        </button>
                      </h2>
                    </div>
                    <div
                      id="collapseOne"
                      class="collapse"
                      aria-labelledby="headingOne"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <p class="text-justify">
                          <strong
                            >Informasi Pendaftaran Perlombaan sebagai berikut
                            :</strong
                          >
                        </p>
                        <p class="text-justify">
                          Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                          ini tidak dipungut biaya sama sekali (gratis).
                        </p>
                        <p class="text-justify">
                          Peserta Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                          bebas (umur, status, maupun pekerjaan).
                        </p>
                        <p class="text-justify">
                          Peserta Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                          hanya boleh mendaftarkan 1 blog saja.
                        </p>
                        <p class="text-justify">
                          Peserta Lomba Seo gudangku.id wajib mendaftar terlebih
                          dahulu melalui Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                          dan Klik Daftar Pada Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                          yang dilombakan Setiap peserta Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                          harus mencantumkan alamat url postingannya atau url
                          artikelnya, dan bukan nama domain web atau blognya.
                          Artikel atau postingan yang tidak terdaftar dalam
                          database kami tidak akan dianggap sebagai Peserta
                          Lomba Seo gudangku.id Peserta Lomba Seo gudangku.id
                          harus menaati dan mematuhi semua syarat ketentuan
                          gudangku.id. Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                          dengan kata kunci
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                  <!--End: Collapse Informasi Pendaftaran-->

                  

                <!-- Start: Collapse Pelaksanaan-->
                <div class="card">
                  <div class="card-header bg-primary" id="headingThree">
                    <h2 class="mb-0">
                      <button
                        class="btn text-white collapsed text-justify"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                      >
                        Pelaksanaan Kontes Gudangku | Fulfillment
                      </button>
                    </h2>
                  </div>
                  <div
                    id="collapseThree"
                    class="collapse"
                    aria-labelledby="headingThree"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body">
                      <p><strong>PENGUMUMAN :</strong></p>
                      <p class="text-justify text-danger">
                        <strong>Pembukaan Pendaftaran tanggal 30 Maret 2021 - 30 April 2021</strong> 
                      </p>
                      <p class="text-justify text-danger">
                      <strong>Pengumuman pemenang akan dikabarkan kepada peserta pada 26 Juni 2021</strong>
                      </p>
                      <p class="text-justify text-danger">
                        <strong>Penyerahan Hadiah 28 Juni 2021</strong>
                      </p>
                      <p>
                        <strong>
                          Perhatian! Catatan Penting untuk Kontestan / Peserta
                          Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                        </strong>
                      </p>
                      <p class="text-justify">
                        Jika didapati tidak terdapat minimal 3 backlink maka web
                        / blog anda otomatis diskualifikasi tanpa pemberitahuan
                        terlebih dahulu.
                      </p>
                      <p class="text-justify">
                        Jika pada urutan 1 sampai 30 terdapat web / blog lain
                        yang tidak ikut berpartisipasi dalam kontes SEO
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >, maka web / blog tersebut bukanlah termasuk sebagai
                        pemenang, posisinya akan digantikan oleh web / blog yang
                        ikut berpartisipasi dalam Lomba Seo
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >
                        pada urutan berikutnya.
                      </p>
                      <p class="text-justify">
                        Jika Peserta kontes tidak meng-like atau menfollow
                        sesuai dengan link facebook dan instagram yang diberikan
                        diatas maka dianggap tidak memenuhi syarat dan ketentuan
                        otomatis peserta akan didiskualifikasi.
                      </p>
                      <p class="text-justify">
                        Apabila pada hari terakhir Lomba jumlah peserta di
                        Google masih dibawah 50, maka pelaksanaan Lomba akan
                        diperpanjang selama 30 hari.
                      </p>
                      <p class="text-justify">
                        Peraturan diatas akan selalu berlaku pada bulan
                        berikutnya jika jumlah peserta dan artikel masih dibawah
                        50.
                      </p>
                      <p class="text-justify">
                        Panitia Lomba Seo gudangku.id tidak bertanggung jawab
                        terhadap tuntutan apapun akibat penjiplakan artikel yang
                        dilakukan pihak lain kepada peserta.
                      </p>
                      <p class="text-justify">
                        <strong
                          >Keputusan Juri adalah Mutlak dan Tidak dapat diganggu
                          gugat.</strong
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End : Collapse Pelaksanaan-->

                <!-- Start: Collapse Syarat dan Ketentuan-->
                <div class="card">
                  <div class="card-header bg-secondary" id="headingFour">
                    <h2 class="mb-0">
                      <button
                        class="btn text-white collapsed text-justify"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                      >
                        Syarat dan Ketentuan Kontes Gudangku | Fulfillment
                      </button>
                    </h2>
                  </div>
                  <div
                    id="collapseFour"
                    class="collapse"
                    aria-labelledby="headingFour"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body">
                      <p class="text-justify">
                        <strong
                          >Syarat dan Ketentuan dalam mengikuti Lomba Seo
                          gudangku.id adalah sebagai berikut :</strong
                        >
                      </p>
                      <p class="text-justify">
                        Peserta sebelumnya wajib membuat blog review tentang
                        Lomba Seo gudangku.id ( Solusi penjualan tanpa repot
                        mempunyai gudang dan karyawan ).
                      </p>
                      <p class="text-justify">
                        Wajib memposting / menulis artikel dengan tema dan kata
                        kunci <strong>"Fulfillment"</strong>.
                      </p>
                      <p class="text-justify">
                        <strong
                          >Setiap peserta wajib menulis artikel dengan panjang
                          minimal 400 kata dan harus mencantumkan 4 linkback
                          dengan ancor text :
                        </strong>
                      </p>
                      <p>
                        Fullfilment (url target:
                        <a
                          href="https://gudangku.id/"
                          class="text-decoration-none"
                          >gudangku.id</a
                        >
                        )
                      </p>
                      <p>
                        Sewa gudang (url target:
                        <a
                          href="https://gudangku.id/"
                          class="text-decoration-none"
                          >gudangku.id</a
                        >)
                      </p>
                      <p>
                        Sewa Gudang Bogor (url target:
                        <a
                          href="https://gudangku.id/"
                          class="text-decoration-none"
                          >gudangku.id</a
                        >)
                      </p>
                      <p class="text-justify">
                        <strong>
                          Wajib Meng-like Facebook dan Follow Instagram di bawah
                          ini :
                        </strong>
                      </p>
                      <p>Facebook :</p>
                      <p>
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku</a
                        >
                      </p>
                      <p>Instagram :</p>
                      <p>
                        <a
                          href="https://www.instagram.com/gudangkuid/"
                          class="text-decoration-none"
                          >Gudangku</a
                        >
                      </p>
                      <p>Artikel harus original dan asli buatan sendiri</p>
                      <p class="text-justify">
                        Artikel atau postingan yang tidak terdaftar dalam
                        database kami tidak akan dianggap sebagai Peserta Lomba
                        Seo
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >
                      </p>
                      <p>
                        Judul artikel bebas dan boleh menggunakan target kata
                        kunci
                      </p>
                      <p class="text-justify">
                        Artikel atau postingan yang hanya semata-mata berisikan
                        atau memberikan informasi
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >
                      </p>
                      <p class="text-justify">
                        Peserta kontes wajib memasang Banner Lomba Seo
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >
                        (pilih salah 1) :
                      </p>
                      <p>Ukuran 480x60</p>
                      <p>Ukuran 300x250</p>
                      <p class="text-justify">
                        Artikel atau postingan tidak boleh menyinggung SARA,
                        berbau pornografi dan melanggar undang undang yang
                        berlaku di indonesia.
                      </p>
                      <p class="text-justify">
                        Peserta tidak boleh menggunakan domain atau subdomain
                        sesuai kalimat / kata kunci yang dilombakan.
                      </p>
                      <p class="text-justify">
                        Panitia berhak meninjau ulang peraturan seperti
                        menambah, mengurangi peraturan menyesuaikan dengan
                        perkembangan kontes.
                      </p>
                      <p class="text-justify">
                        Peserta wajib memasang banner Lomba Seo
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >
                        di SIDEBAR blognya. Jika didapati tidak terdapat banner
                        kontes maka blog anda otomatis diskualifikasi tanpa
                        pemberitahuan terlebih dahulu.
                      </p>
                      <p class="text-justify">
                        Tidak diperbolehkan memakai iklan PPC untuk promosi blog
                        / website / artikel.
                      </p>
                      <p class="text-justify">
                        Tidak diperbolehkan mengunakan Metode Black Hat SEO
                        Apabila Peserta kedapatan memakai metode ini maka
                        otomatis akan didiskualifikasi.
                      </p>
                      <p>Keputusan Juri tidak dapat diganggu gugat.</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header bg-primary" id="headingFive">
                    <h2 class="mb-0">
                      <button
                        class="btn collapsed text-white text-justify"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapseFive"
                        aria-expanded="false"
                        aria-controls="collapseFive"
                      >
                        Penilaian dan Pemenang Kontes Gudangku | Fulfillment
                      </button>
                    </h2>
                  </div>
                  <div
                    id="collapseFive"
                    class="collapse"
                    aria-labelledby="headingFive"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body">
                      <p class="text-justify">
                        <strong
                          >Penilaian Pemenang Lomba Seo
                          <a
                            href="https://www.facebook.com/gudangkuid"
                            class="text-decoration-none"
                            >Gudangku.id</a
                          >
                          adalah sebagai berikut :</strong
                        >
                      </p>
                      <p>
                        Peserta yang url postingannya tercantum di
                        <a
                          href="https://www.google.co.id/"
                          class="text-decoration-none"
                          >google.co.id</a
                        >
                      </p>
                      <p class="text-justify">
                        Telah lolos dari verifikasi persyaratan
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >
                        (verifikasi blog akan dilakukan setelah penutupan
                        pendaftaran lomba)
                      </p>
                      <p class="text-justify">
                        URL postingan yang dilombakan minimal sudah terindeks
                        selama 60 hari di
                        <a
                          href="https://www.google.co.id/"
                          class="text-decoration-none"
                          >google.co.id</a
                        >
                      </p>
                      <p class="text-justify">
                        Persyaratan dan Penentuan pemenang ditentukan
                        berdasarkan peringkat
                        <a
                          href="https://www.google.co.id/"
                          class="text-decoration-none"
                          >google.co.id</a
                        >
                        dengan mencari kata kunci yang telah ditentukan yaitu
                        <strong>"Fulfillment"</strong>.
                      </p>
                      <p class="text-justify">
                        Website yang menempati posisi Nomor 1-5 akan di
                        screenshot dan ditentukan sebagai pemenang Lomba Seo
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >
                      </p>
                      <p class="text-justify">
                        Juri Lomba Seo
                        <a
                          href="https://www.facebook.com/gudangkuid"
                          class="text-decoration-none"
                          >Gudangku.id</a
                        >
                        memiliki wewenang mutlak atas para pemenang
                      </p>
                      <p class="text-justify">
                        Daftar pemenang bisa dilihat di halaman pemenang kontes.
                      </p>
                      <p>Pemenang akan dihubungi via HP dan Email</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
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
