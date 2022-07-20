<?php  
  session_start();  
  require '../functions/functions.php';
 
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
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">

    <link rel="stylesheet" href="kebunRaya.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="galeri.css">


    <script src="https://kit.fontawesome.com/a01af1ac14.js" crossorigin="anonymous"></script>

    </head>
    
    <body>

     <!-- ***** Main Banner Area Start ***** -->
     <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="../../assets/images/devoyage.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>DEVOYAGE <em>BOGOR </em></h2>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../../" class="logo">BOGOR <em> BERIWISATA</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="../../" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="../destinasi">Tempat Wisata</a></li>
                            <li class="scroll-to-section"><a href="../kirim-Masukkan">Kirim Masukkan</a></li>
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

    <!-- ***** Call to Action Start ***** -->
    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>DEVOYAGE <em>BOGOR</em></h2>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="../../assets/images/icon/asd.png" alt="">Deskripsi</a></a></li>
                  <li><a href='#tabs-2'><img src="../../assets/images/icon/asd.png" alt=""><I>Event</I></a></a></li>
                  <li><a href='#tabs-3'><img src="../../assets/images/icon/asd.png" alt="">Lokasi Objek Wisata</a></a></li>
                  <li><a href='#tabs-4'><img src="../../assets/images/icon/asd.png" alt="">Kontak</a></a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <h4>Devoyage Bogor</h4>
                    <p>Wisata Devoyage Bogor ini baru dibuka secara resmi pada bulan April 2018. Kini, wisata ini semakin ramai diminati wisatawan. Bahkan, ketika hari libur tiba, wisata ini dipadati pengunjung loh. Buat kamu yang kini sedang berada di Bogor, coba deh kepoin wisata baru ini. Devoyage ini cocok banget sebagai destinasi liburanmu sob, sebab kamu tidak perlu jauh-jauh pergi ke Eropa untuk merasakan atmosfir Eropa, cukup mengunjungi wisata ini nuansa Eropa sangat kental, terutama dari segi bagunan hingga secara garis besar panorama sekitarnya.
                      <br> <br> Devoyage Bogor tidak hanya menyediakan aneka spot foto yang cakep, tetapi juga tersedia fasilitas menarik lainnya, misalnya seperti Cafe yang bisa kamu jadikan sebagai tempat untuk menikmati menu makanan dan minuman. Tentu sangat pas sekali sehabis keliling kawasan Devoyage, kemudian mampir di area Cafe untuk nongkorong maupun menikmati menu lezat yang disajikan.
                      <br><br>  Untuk bisa memasuki Devoyage Bogor kamu cukup merogoh kocek sebesar Rp 25.000 saja pada hari biasa, dan pada hari libur harga tiketnya naik menjadi Rp 35.000. Harga tersebut belum termasuk wahana permainan.

                    </p>
                  </article>
                  <article id='tabs-2' class='nol'>
                    <h4 class="">Event</h4>
                    <p>Untuk saat ini belum ada <i>Event</i> di lokasi ini, <i>Stay Tuned</i> terus untuk mendapat informasi selanjutnya ya :).</p>
                  </article>
                  <article id='tabs-3'>
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.074156198813!2d106.79294791477136!3d-6.637713095200264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf5d7e18bcfb%3A0xd6e2377b1b566b08!2sDevoyage%20Bogor!5e0!3m2!1sid!2sid!4v1629173704516!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <h4>Kontak</h4>
                    <p>Berikut adalah kontak atau Sosial Media dari Objek Wisata tersebut, jika kamu mau tentang tempat tersebut lebih jauh :).</p>

              <ul class="social-list">
                  <a href="https://wa.me/+6287820193911" target="_blank">
                    <li>
                        <div class="maincard p-3" id="kartuSatu">
                            <div class="thecard">
                                <div class="thefront text-center py-4 oren">
                                    <div class="social-icon"> <i class="fab fa-whatsapp fa-2x"></i> </div>
                                </div>
                                <div class="theback py-3 px-3 text-center oren">
                                    <div class="social-text mt-1"> <small class="font-weight-bold"> <i class="fab fa-whatsapp fa-2x"></i> </small> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                  </a>
                  

                  <a href="https://www.instagram.com/devoyagebogor/?hl=id" target="_blank">
                    <li>
                        <div class="maincard p-3" id="kartuDua" >
                            <div class="thecard">
                                <div class="thefront text-center py-4 oren">
                                    <div class="social-icon"> <i class="fab fa-instagram fa-2x"></i> </div>
                                </div>
                                <div class="theback py-3 px-3 text-center oren">
                                    <div class="social-text mt-1"> <small class="font-weight-bold"><i class="fab fa-instagram fa-2x"></i></small> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                  </a>
                  

                  <a href="https://web.facebook.com/devoyagebogor/?_rdc=1&_rdr" target="_blank">
                    <li>
                        <div class="maincard p-3" id="kartuTiga">
                            <div class="thecard">
                                <div class="thefront text-center py-4 oren">
                                    <div class="social-icon"> <i class="fa fa-facebook fa-2x"></i> </div>
                                </div>
                                <div class="theback py-3 px-3 text-center oren">
                                    <div class="social-text mt-1"> <small class="font-weight-bold"><i class="fa fa-facebook fa-2x"></i></small> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                  </a>

                  <a href="https://twitter.com/devoyagebogor?lang=id" target="_blank">
                    <li>
                        <div class="maincard p-3" id="kartuEmpat">
                            <div class="thecard">
                                <div class="thefront text-center py-4 oren">
                                    <div class="social-icon"> <i class="fa fa-twitter fa-2x"></i> </div>
                                </div>
                                <div class="theback py-3 px-3 text-center oren">
                                    <div class="social-text mt-1"> <small class="font-weight-bold"><i class="fa fa-twitter fa-2x"></i></small> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                  </a>

                  <a href="https://twitter.com/devoyagebogor?lang=id" target="_blank">
                    <li>
                        <div class="maincard p-3" id="kartuEmpat">
                            <div class="thecard">
                                <div class="thefront text-center py-4 oren">
                                    <div class="social-icon"> <i class="fa fa-twitter fa-2x"></i> </div>
                                </div>
                                <div class="theback py-3 px-3 text-center oren">
                                    <div class="social-text mt-1"> <small class="font-weight-bold"><i class="fa fa-twitter fa-2x"></i></small> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                  </a>

              </ul>

            </article>
          </section>
        </div>
      </div>
  </div>
</section>
    <!-- ***** Our Classes End ***** -->
<!-- ***** Call to Action End ***** -->

<!-- Galeri -->

<div class="container">
  <div class="section-heading">
    <h2>Galeri <em>Foto</em></h2>
  </div>
    <div class="row">
        <div class="col-md-4">
            <div class="image"> <img src="images/1.jpg" /> </div>
        </div>
        <div class="col-md-4">
            <div class="image"> <img src="images/2.jpg" /> </div>
        </div>
        <div class="col-md-4">
            <div class="image"> <img src="images/3.jpg" /> </div>
        </div>
    </div> <br>
    <div class="row">
        <div class="col-md-4">
            <div class="image"> <img src="images/4.jpg" /> </div>
        </div>
        <div class="col-md-4">
            <div class="image"> <img src="images/5.jpg" /> </div>
        </div>
        <div class="col-md-4">
            <div class="image"> <img src="images/6.jpg" /> </div>
        </div>
    </div>
</div> <br><br>

<!-- Galeri udahan -->
 

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
            <a class="font-link" href="../destinasi/" class="text-reset">Tempat Wisata</a>
          </p>

          <p class="link-footer">
            <a class="font-link" href="../kirim-Masukkan" class="text-reset">Kirim Masukkan</a>
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
    <script src="../../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../../assets/js/popper.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../../assets/js/scrollreveal.min.js"></script>
    <script src="../../assets/js/waypoints.min.js"></script>
    <script src="../../assets/js/jquery.counterup.min.js"></script>
    <script src="../../assets/js/imgfix.min.js"></script> 
    <script src="../../assets/js/mixitup.js"></script> 
    <script src="../../assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="../../assets/js/custom.js"></script>

  </body>
</html>
