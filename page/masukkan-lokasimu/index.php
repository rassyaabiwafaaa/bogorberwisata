<?php 
  session_start();
  require 'functions.php';
 

  if(!isset($_SESSION["login"])){
    echo "
    <script>
      alert('Silahkan Login Terlebih Dahulu');
      document.location.href = '../login/';
    </script>";
        exit;
  } 

  
  if(isset($_POST["submit"])){ 
 

    if(tambah($_POST) > 0 ){
        echo "
            <script> 
                alert('Data Berhasil diTambahkan');
                document.location.href = '../../';
            </script>     
        ";
    }else{
        echo "
            <script> 
                alert('Data Gagal diTambahkan');
                document.location.href = 'index.php';
            </script>     
        ";
    }

    
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

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="form.css">

    <link rel="stylesheet" href="../../assets/scss/color.scss">

    <link rel="stylesheet" href="../../assets/css/fontawesome/css/all.min.css">

    <script src="https://kit.fontawesome.com/a01af1ac14.js" crossorigin="anonymous"></script>

    </head>
    
    <body>

    <?php if(isset($error)) : ?>
      <?php echo"<script> 
              alert('Akun tidak ada');
          </script>";   ?>
    <?php endif; ?>
    
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
        <div class="container header-area header-sticky">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../../" class="logo">BOGOR <em> BERIWISATA</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="../../" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="../destinasi/">Tempat Wisata</a></li>
                            <li class="scroll-to-section"><a href="../kirim-Masukkan/">Kirim Masukkan</a></li> 
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
    
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Form SignUp End ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Masukkan <em>Lokasimu</em></h2> <br>
                        <p>Tidak ada lokasi favoritmu di Website ini? jangan sedih, yuk beritahu kami.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 offset-lg-3">

          <div class="form">
            <form action="" method="post"> 

              <div class="form-group">
                    <label for="namaObjekWisata" class="text-center">Nama Objek Wisata</label>
                     <input type="text" id="namaObjekWisata" name="namaObjekWisata" class="form-control" placeholder ="Masukkan Nama Objek Wisata" required>
              </div>  

              <div class="form-group">
                  <label for="namaPengelola" class="text-center">Nama Pengelola Objek Wisata</label>
                  <input type="text" id="namaPengelola" name="namaPengelola" class="form-control" placeholder ="Masukkan Nama Pengelola Objek Wisata" required>     
              </div>

              <div class="form-group">
                    <label for="kontakPengelola" class="text-center">Kontak Pengelola Objek Wisata</label>
                    <input type="text" id="kontakPengelola" name="kontakPengelola" class="form-control" placeholder ="Kontak Pengelola Objek Wisata (Nomor Telepon)" required>        
              </div>

              <div class="form-group">
                    <label for="email" class="text-center">Email Pengelola Objek Wisata</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder ="Email Pengelola Objek Wisata" required>        
              </div>

              <div class="form-group">
                    <label for="alamat" class="text-center">Alamat Objek Wisata</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder ="Alamat Pengelola Objek Wisata" required>        
              </div>

              <button type="submit" class="btn oren" name="submit">Kirim</button>

            </form>
           
          </div>   
        </div>
      </div>
    </section>
    <!-- ***** Form Sign Up End ***** -->


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
    

    <script src="form.js"></script>

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
