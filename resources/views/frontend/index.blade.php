<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Frontend</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="frontend/assets/img/favicon.png" rel="icon">
  <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="frontend/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: - v2.2.1
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Tracking Covid</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="active"></li>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Data kasus</a></li>
          <li><a href="#provinsi">Provinsi</a></li>
          <li><a href="#global">Global</a></li>
          <li><a href="#services">Tentang</a></li>
          <li><a href="#footer">Kontak</a></li>

          
        </ul>
      </nav><!-- .nav-menu -->
    </div>  
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>TRACKING COVID 19</h1>
      <h2></h2>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" >
      <div class="section-title" data-aos="zoom-out">
      <br><h2>Data Kasus Covid 19</h2>
      </div>
        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-worried"></i>
                  <p>Total positif</p>
                  <span data-toggle="counter-up">{{$positif}}</span>
                  <p>Orang</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="icofont-simple-smile"></i>
                  <p> Total Sembuh</p>
                  <span data-toggle="counter-up">{{$sembuh}}</span>
                  <p>Orang</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="icofont-crying"></i>
                  <p> Total Meninggal</p>
                  <span data-toggle="counter-up">{{$meninggal}}</span>
                  <p>Orang</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="icofont-globe"></i>
                  <p>Kasus Data Global</p>
                  <span data-toggle="counter-up"><?php echo $posglobal['value'] ?></span>
                  <p>Orang</p>
                </div>
              </div>

            </div>
          </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Table Section Provinsi ======= -->
    <section id="provinsi" class="provinsi">
      <div class="container" >

        <div class="section-title" data-aos="zoom-out">
          <h2>Data Kasus Provinsi</h2>
        </div>
        <div class="card-body" >
           <div style="height:600px;overflow:auto;margin-right:15px;">
           <table  class="table table-bordered table-striped mb-0 " width="100%">
             <thead>
                <tr>
                      <th scope="col"><center>No</center></th>
                      <th scope="col"><center>Provinsi</center></th>
                      <th scope="col"><center>Positif</center></th>
                      <th scope="col"><center>Sembuh</center></th>
                      <th scope="col"><center>Meninggal</center></th>
                    </tr>
             </thead>
             <tbody>
              @php
                $no = 1;
              @endphp

              @foreach($tampil as $tmp)
                  <tr>
                    <th scope="row"><center>{{$no++}}</center></th>
                      <td><center>{{$tmp->nama_provinsi}}</center></td>
                      <td><center>{{number_format($tmp->positif)}}</center></td>
                      <td><center>{{number_format($tmp->sembuh)}}</center></td>
                      <td><center>{{number_format($tmp->meninggal)}}</center></td>
                  </tr>
                  
                </tbody>
                @endforeach
           </table>
           </div>
        </div>
             </div>
    </section>
    <!-- End Table Section provinsi -->

    <!-- ======== Table Section Global ======= -->
    <section id="global" class="global">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Data Kasus Global</h2>
        </div>

       
        <div class="card-body" >
            <div style="height:600px;overflow:auto;margin-right:15px;">
              <table class="table table-bordered table-striped mb-0 " width="100%">
                <thead>
                  <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Negara</center></th>
                    <th scope="col"><center>Positif</center></th>
                    <th scope="col"><center>Sembuh</center></th>
                    <th scope="col"><center>Meninggal</center></th>
                  </tr>
                </thead>
              <tbody>
              @php
                $no = 1;
              @endphp
                @foreach($dunia as $data)
                    <tr>
                      <td> <?php echo $no++ ?></td>
                      <td> <?php echo $data['attributes']['Country_Region'] ?></td>
                      <td> <?php echo number_format($data['attributes']['Confirmed']) ?></td>
                      <td><?php echo number_format($data['attributes']['Recovered'])?></td>
                      <td><?php echo number_format($data['attributes']['Deaths'])?></td>
                    </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
          </div>
        </div>

      </div>
      </section>
    <!-- ======== End Table Section Global ======= -->
    


    <!-- ======= Services Section ======= -->
    <section id="services" class="services  section-bg ">
      <div class="container">
      <div class="section-title pt-5" data-aos="fade-up">
          <h2>Tentang Virus Corona</h2>
        </div>
        <div class="row">
          <div class="col-md-80 col-xl-15">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="card text-white "></i></div>
              <p class="description"><h5>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat.
                Coronavirus jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina, pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus
                dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).</h5></p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer"> 
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12 footer-contact">
           <center> <h4>Tracking Covid</h4>
            <p>
                JL.Situtarate - Cibaduyut <br>
                Kab.Bandung<br><br>
              <strong>Phone:</strong> +62 856 5955 6428<br>
              <strong>Email:</strong> smkassalaambandung.sch.id<br>
            </p>
            </center>
          </div>  
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Hak Cipta <strong><span>Vinatn</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  
  <!-- Vendor JS Files -->
  <script src="frontend/assets/vendor/jquery/jquery.min.js"></script>
  <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="frontend/assets/vendor/php-email-form/validate.js"></script>
  <script src="frontend/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="frontend/assets/vendor/counterup/counterup.min.js"></script>
  <script src="frontend/assets/vendor/venobox/venobox.min.js"></script>
  <script src="frontend/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/assets/js/main.js"></script>

</body>
</html>