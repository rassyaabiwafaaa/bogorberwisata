<?php 
  session_start();
  require '../functions/functions.php';

  if(!isset($_SESSION["login"])){
    echo "
    <script>
      alert('Silahkan Login Terlebih Dahulu');
      document.location.href = '../login/';
    </script>";
        exit;
  }

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

    <link rel="stylesheet" href="destinasi.css">

    <script src="https://kit.fontawesome.com/a01af1ac14.js" crossorigin="anonymous"></script>

    </head>
    
    <body>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="../../assets/images/destinasi.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
            <div class="section-heading">
                        <h2>Pilih <em>Destinasi</em></h2>
                        <h6>Pilih Lokasi Favoritmu</h6> 
                    </div>
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
                            <li class="scroll-to-section"><a href="../logout/">Logout</a></li>  
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

    <!-- ***** Card ***** -->
    <div class="container mt-5 mb-5">
        <div class="row g-1">

            <!-- Card 1 -->
                <div class="col-md-4 bawah">
                    <div class="p-card">
                        <div class="p-carousel">
                            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"><img class="w-100 d-block" src="images/kebunRaya/1.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="images/kebunRaya/2.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="images/kebunRaya/3.jpg" alt="Slide Image"></div>
                                </div>
                                
                                <div>
                                    <!-- Previous button -->
                                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                                    </a>
                                    <!-- Previous button end -->
                                    
                                    <!-- Next button -->
                                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                                    </a>
                                    <!-- Next button end -->
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-1" data-slide-to="1"></li>
                                    <li data-target="#carousel-1" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="p-details">
                            <div class="d-flex justify-content-between align-items-center mx-2">
                                <h5>Kebun Raya Bogor</h5>
                            </div>
                            <div class="mx-2">
                                <hr class="line">
                            </div>
                            <div class="d-flex justify-content-between mt-2 spec mx-2">
                                <div class="d-flex flex-column align-items-center">
                                    <span>Lihat informasi lengkap mengenai tempat ini seperti, deskripsi, lokasi, bahkan event yang akan diadakn di tempat tersebut.</span>
                                </div>  
                            </div>
                            <div class="buy mt-3"><button class="btn oren btn-block" type="button" id="kebunRaya">Lihat Destinasi</button></div>
                        </div>
                    </div>
                </div>
            <!-- Card 1 End -->

            <!-- Card 2 -->
                <div class="col-md-4 bawah">
                    <div class="p-card">
                        <div class="p-carousel">
                            <div class="carousel slide" data-ride="carousel" id="carousel-2">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"><img class="w-100 d-block" src="../Devoyage/images/1.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="../Devoyage/images/2.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="../Devoyage/images/3.jpg" alt="Slide Image"></div>
                                </div>
                                
                                <div>
                                    <!-- Previous button -->
                                    <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                                    </a>
                                    <!-- Previous button end -->
                                    
                                    <!-- Next button -->
                                    <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                                    </a>
                                    <!-- Next button end -->
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-2" data-slide-to="1"></li>
                                    <li data-target="#carousel-2" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="p-details">
                            <div class="d-flex justify-content-between align-items-center mx-2">
                                <h5>Devoyage Bogor</h5>
                            </div>
                            <div class="mx-2">
                                <hr class="line">
                            </div>
                            <div class="d-flex justify-content-between mt-2 spec mx-2">
                                <div class="d-flex flex-column align-items-center">
                                    <span>Lihat informasi lengkap mengenai tempat ini seperti, deskripsi, lokasi, bahkan event yang akan diadakn di tempat tersebut.</span>
                                </div>  
                            </div>
                            <div class="buy mt-3"><button class="btn oren btn-block" type="button" id="devoyage">Lihat Destinasi</button></div>
                        </div>
                    </div>
                </div>
            <!-- Card 2 end -->

            <!-- Card 3 -->
            <div class="col-md-4 bawah">
                    <div class="p-card">
                        <div class="p-carousel">
                            <div class="carousel slide" data-ride="carousel" id="carousel-3">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"><img class="w-100 d-block" src="../Kuntum-farmfield/images/1.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="../Kuntum-farmfield/images/2.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="../Kuntum-farmfield/images/3.jpg" alt="Slide Image"></div>
                                </div>
                                
                                <div>
                                    <!-- Previous button -->
                                    <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                                    </a>
                                    <!-- Previous button end -->
                                    
                                    <!-- Next button -->
                                    <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                                    </a>
                                    <!-- Next button end -->
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-3" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-3" data-slide-to="1"></li>
                                    <li data-target="#carousel-3" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="p-details">
                            <div class="d-flex justify-content-between align-items-center mx-2">
                                <h5>Kuntum Farm Field</h5>
                            </div>
                            <div class="mx-2">
                                <hr class="line">
                            </div>
                            <div class="d-flex justify-content-between mt-2 spec mx-2">
                                <div class="d-flex flex-column align-items-center">
                                    <span>Lihat informasi lengkap mengenai tempat ini seperti, deskripsi, lokasi, bahkan event yang akan diadakn di tempat tersebut.</span>
                                </div>  
                            </div>
                            <div class="buy mt-3"><button class="btn oren btn-block" type="button" id="kuntumfarm">Lihat Destinasi</button></div>
                        </div>
                </div>
            </div>
            <!-- Card 3 End -->

            <!-- Card 4 -->
            <div class="col-md-4 bawah">
                    <div class="p-card">
                        <div class="p-carousel">
                            <div class="carousel slide" data-ride="carousel" id="carousel-4">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"><img class="w-100 d-block" src="../jungle/images/1.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="../jungle/images/2.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="../jungle/images/3.jpg" alt="Slide Image"></div>
                                </div>
                                
                                <div>
                                    <!-- Previous button -->
                                    <a class="carousel-control-prev" href="#carousel-4" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                                    </a>
                                    <!-- Previous button end -->
                                    
                                    <!-- Next button -->
                                    <a class="carousel-control-next" href="#carousel-4" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                                    </a>
                                    <!-- Next button end -->
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-4" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-4" data-slide-to="1"></li>
                                    <li data-target="#carousel-4" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="p-details">
                            <div class="d-flex justify-content-between align-items-center mx-2">
                                <h5>The Jungle Waterpark</h5>
                            </div>
                            <div class="mx-2">
                                <hr class="line">
                            </div>
                            <div class="d-flex justify-content-between mt-2 spec mx-2">
                                <div class="d-flex flex-column align-items-center">
                                    <span>Lihat informasi lengkap mengenai tempat ini seperti, deskripsi, lokasi, bahkan event yang akan diadakn di tempat tersebut.</span>
                                </div>  
                            </div>
                             <a href="../jungle"><div class="buy mt-3"><button class="btn oren btn-block" type="button" id="kuntumfarm">Lihat Destinasi</button></div></a> 
                        </div>
                </div>
            </div>
            <!-- Card 4 End -->

            <!-- Card 5 -->
            <div class="col-md-4 bawah">
                    <div class="p-card">
                        <div class="p-carousel">
                            <div class="carousel slide" data-ride="carousel" id="carousel-5">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"><img class="w-100 d-block" src="images/sempur/1.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="images/sempur/2.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="images/sempur/3.jpg" alt="Slide Image"></div>
                                </div>
                                
                                <div>
                                    <!-- Previous button -->
                                    <a class="carousel-control-prev" href="#carousel-5" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                                    </a>
                                    <!-- Previous button end -->
                                    
                                    <!-- Next button -->
                                    <a class="carousel-control-next" href="#carousel-5" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                                    </a>
                                    <!-- Next button end -->
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-5" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-5" data-slide-to="1"></li>
                                    <li data-target="#carousel-5" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="p-details">
                            <div class="d-flex justify-content-between align-items-center mx-2">
                                <h5>Taman Sempur</h5>
                            </div>
                            <div class="mx-2">
                                <hr class="line">
                            </div>
                            <div class="d-flex justify-content-between mt-2 spec mx-2">
                                <div class="d-flex flex-column align-items-center">
                                    <span>Lihat informasi lengkap mengenai tempat ini seperti, deskripsi, lokasi, bahkan event yang akan diadakn di tempat tersebut.</span>
                                </div>  
                            </div>
                             <a href="../taman-sempur/"> <div class="buy mt-3"><button class="btn oren btn-block" type="button" id="kuntumfarm">Lihat Destinasi</button></div> </a>
                        </div>
                </div>
            </div>
            <!-- Card 5 End -->

            <!-- Card 6 -->
            <div class="col-md-4 bawah">
                    <div class="p-card">
                        <div class="p-carousel">
                            <div class="carousel slide" data-ride="carousel" id="carousel-6">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active"><img class="w-100 d-block" src="images/heulang/1.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="images/heulang/2.jpg" alt="Slide Image"></div>
                                    <div class="carousel-item"><img class="w-100 d-block" src="images/heulang/3.jpg" alt="Slide Image"></div>
                                </div>
                                
                                <div>
                                    <!-- Previous button -->
                                    <a class="carousel-control-prev" href="#carousel-6" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                                    </a>
                                    <!-- Previous button end -->
                                    
                                    <!-- Next button -->
                                    <a class="carousel-control-next" href="#carousel-6" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                                    </a>
                                    <!-- Next button end -->
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-6" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-6" data-slide-to="1"></li>
                                    <li data-target="#carousel-6" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="p-details">
                            <div class="d-flex justify-content-between align-items-center mx-2">
                                <h5>Taman Heulang</h5>
                            </div>
                            <div class="mx-2">
                                <hr class="line">
                            </div>
                            <div class="d-flex justify-content-between mt-2 spec mx-2">
                                <div class="d-flex flex-column align-items-center">
                                    <span>Lihat informasi lengkap mengenai tempat ini seperti, deskripsi, lokasi, bahkan event yang akan diadakn di tempat tersebut.</span>
                                </div>  
                            </div>
                             <a href="../taman-heulang/"> <div class="buy mt-3"><button class="btn oren btn-block" type="button" id="kuntumfarm">Lihat Destinasi</button></div> </a>
                        </div>
                </div>
            </div>
            <!-- Card 6 End -->
        </div>
    </div>
    <!-- ***** Card End ***** -->

    <!-- ***** Section Tambah Lokasi ***** -->
<section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Masukkan <em>Lokasimu</em></h2>
                        <p>Lokasi favoritmu tidak ada di sini? segera beritahu kami.</p>
                        <div class="main-button scroll-to-section">
                            <a href="../masukkan-lokasimu/">Masukkan Lokasimu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <br><br>
    <!-- ***** Section Tambah Lokasi End ***** -->s

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
            <a class="font-link" href=" " class="text-reset">Tempat Wisata</a>
          </p>

          <p class="link-footer">
            <a class="font-link" href="../kirim-Masukkan/" class="text-reset">Kirim Masukkan</a>
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
    
    <!-- Script dll -->
    <script src="button.js"></script>

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
