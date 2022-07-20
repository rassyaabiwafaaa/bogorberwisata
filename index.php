<?php 
 session_start();
 require 'page/functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Tugas Akhir</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/fontawesome/css/all.min.css">

    <script src="https://kit.fontawesome.com/a01af1ac14.js" crossorigin="anonymous"></script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href=" " class="logo">BOGOR <em> BERWISATA</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#features">Tempat Wisata</a></li>
                            <li class="scroll-to-section"><a href="page/kirim-Masukkan">Kirim Masukkan</a></li>
                            <li class="scroll-to-section"><a href="page/logout/">
                             <?php  
                             
                             if(!isset($_SESSION["login"])){
                              echo" Login ";
                            } else{
                              echo "Logout";
                            }
                             
                             
                             ?>
                            </a>
                          </li>  
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/company-profile.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>"Not all those   <em>who wander are lost"</em></h2>
                <h6>CARI INFORMASI TENTANG OBYEK PARIWISATA YANG INGIN KAMU KUNJUNGI</h6>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
      <div class="section-heading">
                  <h2>Pilih <em>Lokasi</em></h2>
                  <img src="assets/images/line-dec.png" alt="waves">
                  <p>Pilih lokasi objek wisata yang kamu inginkan untuk mengetahui informasi apa saja yang ada di tempat tersebut.</p>
         </div>
        <div class="container menu">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/travel-01.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Kebun Raya Bogor</h4>
                                <p>Dapatkan informasi tentang objek wisata Kebun Raya Bogor.</p>
                                <a href="page/Kebun-raya/" class="text-button">Telusuri Lebih Lanjut</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/travel-01.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>The Jungle Waterpark</h4>
                                <p>Dapatkan informasi tentang objek wisata The Jungle Bogor.</p>
                                <a href="page/jungle" class="text-button">Telusuri Lebih Lanjut</a>
                            </div>
                        </li> 
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/travel-01.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Devoyage</h4>
                                <p>Dapatkan informasi tentang objek wisata Devoyage Kota Bogor.</p>
                                <a href="page/devoyage/" class="text-button">Telusuri Lebih Lanjut</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/travel-01.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Kuntum Farm Field</h4>
                                <p>Dapatkan informasi tentang objek wisata Kuntum Farm Field Bogor.</p>
                                <a href="page/Kuntum-farmfield/" class="text-button">Telusuri Lebih Lanjut</a>
                            </div>
                        </li> 
                    </ul>
                </div>

            </div>

            <div class="main-button scroll-to-section">
                <a href="page/destinasi/">Lihat Lokasi Lainnya</a>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Masukkan <em>Lokasimu</em></h2>
                        <p>Lokasi favoritmu tidak ada di sini? segera beritahu kami.</p>
                        <div class="main-button scroll-to-section">
                            <a href="page/masukkan-lokasimu/">Masukkan Lokasimu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  <br><br>
    <!-- ***** Call to Action End ***** -->

    <!-- Footer  -->
    <hr>
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            Bogor Berwisata
          </h6>
          <p>
            Dimana Kamu disini bisa menemukan Berbagai Objek Wisata
            yang ada di Kota Bogor.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Halaman
          </h6>
          <p class="link-footer">
            <a class="font-link" href="../../" class="text-reset">Beranda</a>
          </p> 

          <p class="link-footer">
            <a class="font-link" href="page/destinasi/" class="text-reset">Tempat Wisata</a>
          </p>

          <p class="link-footer">
            <a class="font-link" href="page/kirim-Masukkan" class="text-reset">Kirim Masukkan</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Kontak
          </h6>

          <p class="link-footer">
            <i class="fas fa-home me-3"></i> <a class="font-link" href="https://goo.gl/maps/cQGAkoZfkJoZpjzA6"> Kota Bogor, Indonesia</a>
          </p>

          <p class="link-footer">
            <i class="fas fa-envelope me-3"></i> <a class="font-link" href = "mailto: rassya.abiwafa@gmail.com">rassya.abiwafa@gmail.com</a>
          </p>

          <p class="link-footer">
            <i class="fas fa-phone me-3"></i> <a class="font-link" href="https://wa.me/+6285782643433" target="_blank"> + 62857 8264 3433</a>   
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section> <br> 
  <!-- Section: Links  -->
</footer>
<!-- Footer -->
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>
