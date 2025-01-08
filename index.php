<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemalang Ikhlas</title>
    <link rel="icon" href="img/11zon_cropped (2).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Gaya dasar untuk mode terang */
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Gaya untuk mode gelap */
        .dark-mode {
            background-color: #262525;
            color: #ffffff;
        }

        /* Gaya untuk tombol */
        .button {
            padding: 10px 20px;
           
            font-size: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .light-button {
            background-color: #f1f1f1;
            color: #333;
        }
        .dark-button {
            background-color: #333;
            color: #f1f1f1;
        }

    </style>
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">Kotaku Pemalang Ikhlas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
              <li class="nav-item">
                <a class="nav-link" href="#hero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedule">Region</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutme">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>
              <!--Button Mode begin-->
                <!-- Button Dark -->
                <button class="button dark-button" onclick="setDarkMode()"><i class="bi bi-lightbulb-fill"></i></button>
              </li>
              <li>
                <!-- Button Light -->
                <button class="button light-button" onclick="setLightMode()"><i class="bi bi-lightbulb"></i></button>
              </li>
              <!--Button Mode end-->
            </ul>
          </div>
        </div>
      </nav>
     <!-- nav end -->
     <!--hero begin -->
     <section id="hero" class="text-center p-5 bg-primary-subtle text-sm-start" >
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="https://img.inews.co.id/media/600/files/networks/2022/07/08/f053d_pemalang.png" class="img-fluid" alt="">
                <div>
                    <h1 class="fw-bold display-10">Kabupaten Pemalang terletak di pantai utara Pulau Jawa, dengan luas 111.530 km2. Terletak antara 109°17'30" – 109°40'30" BT dan 6°52'30" – 7°20'11" LS. Pemalang adalah ibu kota kabupaten ini. Lokasi Pemalang berada di jalur Pantura yang menghubungkan Jakarta, Semarang, dan Surabaya.

                   </h1>
                    <h4 class="lead display-8"> Dari Semarang, ibu kota Provinsi Jawa Tengah, kabupaten ini berjarak kira-kira 135 kilometer ke arah barat, atau memakan waktu sekitar dua hingga tiga jam dengan kendaraan darat. Kabupaten Pemalang memiliki luas 1.115,30 km2. Area ini berbatasan dengan Laut Jawa di sebelah utara, Kabupaten Purbalingga di sebelah selatan, Kabupaten Pekalongan di sebelah timur, dan Kabupaten Tegal di sebelah barat. Kabupaten Pemalang memiliki posisi strategis dalam hal perdagangan dan pemerintahan.</h4>

                    <!--Date dan time begin-->
                    <div>
                      <span id="tanggal"></span>
                      <span id="jam"></span>
                    </div>
                    <!--Date dan time end-->

                </div>
            </div>
        </div>
     </section>
     <!--hero end-->
     <!--article begin-->
     <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3 justify-content-center">Article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="https://www.puskapik.com/wp-content/uploads/2020/08/IMG-20200822-WA0026.jpg" class="card-img-top"  width="150" height="150" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Potensi</h5>
                      <p class="card-text">Pemalang adalah salah satu daerah yang memiliki banyak potensi alam, dengan pantai-pantai yang indah, gunung-gunung yang menjulang tinggi, dan hutan-hutan yang lebat. Selain itu, daerah ini memiliki sejarah yang kaya, dengan banyak situs budaya dan sejarah yang dapat dikunjungi.
                      </p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card h-100">
                    <img src="https://imgx.sonora.id/crop/0x0:0x0/x/photo/2021/02/08/iyengjpg-20210208042733.jpg" class="card-img-top"  width="150" height="150" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kuliner</h5>
                      <p class="card-text">Kabupaten Pemalang juga terkenal dengan makanan khasnya, yaitu Nasi Grombyang sehingga kota ini juga dijuluki dengan Kota Grombyang. Beberapa kuliner lainnya yang tak kalah enak adalah Lontong Dekem, Sate Loso, dan Kue apem, serta Kue Khamir. Pemalang juga terkenal dengan oleh - oleh khasnya yaitu Ogel - Ogel. Kabupaten ini juga memiliki komoditas buah unggulan yaitu Nanas Madu.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="https://info.pemalangkab.go.id/uploads/1661398507768.jpeg" class="card-img-top"  width="150" height="150" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kesehatan</h5>
                      <p class="card-text">Untuk membantu perawatan kesehatan masyarakat Pemalang, ada 1 rumah sakit umum daerah dan 3 rumah sakit umum swasta, 22 puskesmas induk, 65 puskesmas pembantu, dan 22 unit puskesmas keliling; dan 103 dokter umum, 21 dokter gigi, 24 dokter spesialis, 473 bidan, dan 542 perawat. Selain itu, ada 55 apotek dan 9 toko obat.
                        </p>
                    </div>
                    <div class="card-footer">
                      <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                      <img src="https://osissmanegeri1petarukan.wordpress.com/wp-content/uploads/2019/06/img_20190630_1303361775609581.jpg" class="card-img-top"  width="150" height="150" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pendidikan</h5>
                        <p class="card-text">Kabupaten Pemalang terus mengupayakan proses pendidikan yang terpadu dan berkesinambungan untuk meningkatkan kehidupan masyarakatnya. Ini difasilitasi oleh 350 Sekolah Taman Kanak-kanak, 2 Sekolah Luar Biasa, 868 SD/MI, 161 SMP/MTS, 37 SMA/MA, 29 SMK, dan 3 perguruan tinggi. Dengan demikian, sumber daya manusia yang berkualitas dan mandiri dihasilkan.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>   
                  <div class="col">
                    <div class="card h-100">
                      <img src="https://indonesiasenang.com/content/images/2024/04/Sarung-Goyor-Kain-Identitas-Masyarakat-Kabupaten-Pemalang-1.jpg" class="card-img-top"  width="150" height="150" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Kegiatan Ekonomi</h5>
                        <p class="card-text">Industri kecil pakaian jadi atau konveksi adalah sektor ekonomi rakyat penting di Kabupaten Pemalang. Investor Jepang masuk dengan mendirikan pabrik pakaian untuk memenuhi permintaan ekspor tekstil Indonesia. Sarung tenun, sarung palekat, kaos kaki, dan goyor adalah produk dari industri tesktil dan tenun. Selain itu, kerajinan yang terdiri dari gerabah, sapu glagah, dan kulit ular telah berhasil masuk ke pasar ekspor ke Singapura dan Malaysia.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="card h-100">
                      <img src="https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/Curug-Sibedil-3.jpg" class="card-img-top"  width="150" height="150" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Wisata</h5>
                        <p class="card-text">Pemalang juga memiliki potensi pariwisata yang besar, dengan banyak objek wisata alam dan budaya yang dapat dikunjungi, seperti Pantai Widuri, Bukit Tangkeban, Curug Bengkawah, Curug Sibedil serta terdapat makah Syekh Maulana Syamsuddin yang terletak di pesisir utara Pantai Widuri Pemalang.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
        </div>
     </section>
     <!--article end-->
    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-primary-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/sarung.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/sma.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/rsud.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/grombyang.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/curug.jpeg" class="d-block w-100" alt="...">
                </div>
		              <div class="carousel-item">
                  <img src="img/bukit.jpeg" class="d-block w-100" alt="...">
                </div>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
    </section>
    <!-- gallery end -->

       <!-- schedule begin -->
       <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Region</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Ampelgading</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  | Desa |<br /> Ampelgading, Banglarangan, Blimbing, Cibiyuk, Jatirejo, Karangtalok, Karangtengah, Kebagusan,Kemuning, Losari, Sidokare, Sokawati, Tegalsari Barat, Tegalsari Timur, Ujunggede, Wonogiri
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Bantarbolang</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                 | Desa |<br />Banjarsari, Bantarbolang, Glandang, Karanganyar, Kebon Gede, Kuta, Lenggerong, Pabuaran, Paguyangan, Pedagung, Pegiringan, Purana, Sambeng, Sarwodadi, Sumurkidang, Suru, Wanarata
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Bodeh</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  | Desa |<br />Babakan, Bodeh, Cangak, Gunungbatu, Jatingarang, Jatiroyom, Jraganan, Karangbrai, Kebandaran, Kebandungan, Kelangdepok, Kesesirejo, Kwasen, Longkeyang, Muncang, Parunggalih, Pasir, Payung, Pendowo
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Belik</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                 | Desa |<br />Badak, Belik, Beluk, Bulakan, Gombong, Gunungjaya, Gunungtiga, Kalisaleh, Kuta, Mendelem, Sikasur, Simpur, Sodong, Basari
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Comal</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                 | Desa |<br />Ambokulon, Gandu, Gedeg, Gintung, Kandang, Kauman, Kebojongan Klegen, Lowa Pecangakan, Purwosari Sarwodadi, Sidorejo, Sikayu, Susukan, Tumbal, Wonokromo
                </li>
                <li class="list-group-item">
                 | Kelurahan |<br />Purwoharjo
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Pemalang</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">| Desa | <br> Banjarmulya, Bojongnangka, Danasari, Kramat, Lawangrejo, Mengori, Pagongsoran, Saradan, Sewaka, Sungapan, Surajaya, Tambakrejo, Wanamulya
                </li>
                <li class="list-group-item">| Kelurahan | <br> Bojongbata, Kebondalem, Mulyoharjo, Paduraksa, Pelutan, Sugihwaras, Widuri
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Petarukan</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">| Desa | <br> Bulu, Iser, Kalirandu, Karangasem, Kendaldoyong, Kendalrejo, Kendalsari, Klareyan, Loning, Nyamplung Sari, Panjunan Pegundan, Pesucen, Petanjungan, Serang, Sirangkang, Tegalmlati, Temuireng, Widodaren</li>
                <li class="list-group-item">| Kelurahan | <br> Petarukan</li>
              </ul>
            </div>
          </div> <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Taman</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">| Desa | <br> Asemdoyong, Banjaran, Banjardawa, Cibelok, Gondang, Jebed Selatan, Jebed Utara, Jrakah, Kabunan, Kedungbanjar, Kejambon, Pedurungan, Pener, Penggarit, Sitemu, Sokawangi, Taman, Wanarejan Utara</li>
                <li class="list-group-item">| Kelurahan | <br> Kaligelang, Wanarejan Selatan, Beji</li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-primary-subtle text-white">Randudongkal</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">| Desa | <br> Banjaranyar, Gembyang, Gongseng, Kalimas, Kalitorong Karangmoncol Kecepit Kejene Kreyo Lodaya Mangli Mejagong Penusupan Randudongkal, Rembul, Semaya, Semingkir, Tanahbaya</li>
              </ul>
            </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-primary-subtle text-white">Pulosari</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">| Desa | <br>Batursari, Cikendung, Clekatakan, Gambuhan, Gunungsari, Jurangmangu, Karangsari, Nyalembeng, Pagenteran, Penakir, Pulosari, Siremeng
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-primary-subtle text-white">Ulujami</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">| Desa | <br> 	
                Ambowetan, Blendung, Botekan, Bumirejo, Kaliprau, Kertosari, Ketapang, Limbangan, Mojo, Padek, Pagergunung, Pamutih, Pesantren, Rowosari, Samong, Sukorejo, Tasikrejo, Wiyorowetan
                </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-primary-subtle text-white">Warungpring</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">| Desa | <br> 	
                Cibuyur, Datar, Karangdawa, Mereng, Pakembaran, Warungpring
             </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-header bg-primary-subtle text-white">Watukumpul</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">| Desa | <br> 	
                Bodas, Bongas, Cawet, Cikadu, Gapura, Jojogan, Majakerta, Majalangu, Medayu, Pagelaran, Tambi, Tlagasana, Tundagan, Watukumpul, Wisnu
              </li>
              <li class="list-group-item">| Kelurahan | <br> Bojongbata, Kebondalem, Mulyoharjo, Paduraksa, Pelutan, Sugihwaras, Widuri
              </li>
            </ul>
          </div>
        </div>
      
      </div>
      
    </section>
    <!-- schedule end -->

     <!--profil begin-->

     <section id="aboutme" class="text-center p-5 bg-primary-subtle">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
          <div class="p-3">
            <img
              src="https://cdn.idntimes.com/content-images/community/2023/12/screenshot-20231229-233936-instagram-b86542cfca28fd997b2e2385fddeca1d-00870a1c94d13764defa4e384ecee989.jpg"
              class="rounded-circle border shadow"
              width="200px"
              height="200px"
            />
          </div>
          <div class="p-md-5 text-sm-start">
            <h3 class="lead">A11.2023.15037</h3>
            <h1 class="fw-bold">Habibi Ramadhani</h1>
            Program Studi Teknik Informatika<br />
            <a href="https://dinus.ac.id/" class="fw-bold text-decoration-none"
              >Universitas Dian Nuswantoro</a
            >
          </div>
        </div>
      </div>
    </section>
     <!--profil end-->

     <!--footer begin-->
     <footer class="text-center p-5">
        <div>
           <a href="https://www.instagram.com/habibiramadhani02/profilecard/?igsh=MXV6b2RlanF5dGFtYg=="><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
           <a href="https://wa.me/+6285292301037"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>
            Habibi Ramadhani 2024 &copy 2024
        </div>
     </footer>
     <!--footer end-->


     <script>
      // Fungsi untuk mengaktifkan mode terang
      function setLightMode() {
          document.body.classList.remove("dark-mode");
      }

      // Fungsi untuk mengaktifkan mode gelap
      function setDarkMode() {
          document.body.classList.add("dark-mode");
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      
    <script type="text/javascript">
     window.setTimeout("tampilWaktu()",1000);
      
     function tampilWaktu(){
      var waktu = new Date();
      var bulan = waktu.getMonth()+1;

      // Fungsi untuk tampil tanggal
      setTimeout("tampilWaktu()",1000);
      document.getElementById("tanggal").innerHTML=
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
      // Fungsi untuk tampil jam
      document.getElementById("jam").innerHTML =
        waktu.getHours() +
        ":" +
        waktu.getMinutes() +
        ":" +
        waktu.getSeconds();
     }
    </script>
  </body>
</html>