<?php
include_once 'connexion.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NEW LIFESTYLE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

 <!-- font awesome icons -->
 <script src="https://kit.fontawesome.com/209f8ed90c.js" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">



  <!-- =======================================================
  * Template Name: Bethany - v4.3.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html" ><span id="logo">Lifestyle by you</span>  </a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"> <img src="assets/img/logo.jpg" alt="" class="img-fluid"> </a> -->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="../index.html">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="service.html">Services</a></li>
            <li><a class="nav-link scrollto" href="#Sport">Sport</a></li>
            <li><a class="nav-link scrollto" href="#Sport">food</a></li>
          <!--  <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                     <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>-->
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="login.html">sign up</a></li>
          </ul>
          
          <i class="bi bi-list mobile-nav-toggle"></i>
          <form action="#" class="font-size-14 font-rale">
            <a href="#" class="py-2 rounded-pill color-primary-bg">
              
              <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
              <i class="fas fa-shopping-cart"></i>
              <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
            </a>
          </form>

        </nav><!-- .navbar -->
        

      </div><!-- End Header Container -->


    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Create Your Own LifeStyle With Us</h1>
      <h2>Let's get a healthier life from now on </h2>
      <a href="inscription.html" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
      <div class="section-title" data-aos="fade-left">
          <h2>Our Market</h2>
          <p>quality premium </p>
        </div>

           <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              <?PHP
        
                $sql = "SELECT ref_produit,name, image,_description , prix FROM produit";
                $resultset = mysqli_query($connect, $sql) or die("database error:" . mysqli_error($connect));
                   while ($record = mysqli_fetch_assoc($resultset)) {?>
                     <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                       <div class="portfolio-wrap">
                        <img src="<?php echo "../".$record['image']; ?>" class="img-fluid" alt="">
                          <div class="portfolio-info">
                           <h4><?php echo $record['name']; ?> </h4>
                           <p><div class="desc"><?php  echo $record['_description']; ?></div></p>
                            <div class="portfolio-links">
                             <a  name="add_to_cart" id='.$record["ref_produit"].' ><i class="bx bx-plus"></i></a>
                             <a href="portfolio-details.html" title="More Details" ><i class="bx bx-link"></i></a>
                            </div>
                         </div>
                       </div>
                      </div>
         
              <?php  } ?>

            </div>
      
      </div>
    </section><!-- End Portfolio Section -->



    <!-- ======= Sport Section ======= -->
    <section id="Sport" class="Sport">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Our Profiles</h2>
              <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>-->
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

              <div class="col-lg-4 mt-4 ">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="assets/img/Sport/Sport-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>ANDI Jennate</h4>
                    <span>Personal Coatch</span>
                    <p>Always in your service !</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-4 ">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/Sport/Sport-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>EL OUAFI Khadija</h4>
                    <span>Product Manager</span>
                    <p>You can count on me ! </p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href="https://www.facebook.com/profile.php?id=100004948273726"><i
                          class="ri-facebook-fill"></i></a>
                      <a href="https://www.instagram.com/lallajassmine/?hl=fr"><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="assets/img/Sport/Sport-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>MOUNIB Marouane</h4>
                    <span>Developper</span>
                    <p>hatini hna se7a </p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>
        </div>

      </div>
    </section><!-- End Sport Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13276.660376582622!2d-7.3604533!3d33.7046767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79759da1a916fc50!2sENSET%20Mohammedia!5e0!3m2!1sfr!2sma!4v1624497305119!5m2!1sfr!2sma"
              frameborder="0" allowfullscreen></iframe>

            <div class="info mt-4">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>ENSET Mohammedia
                Boulevard Hassan II, Mohammédia 28830</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>enset@dwm.ma</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+212523322220</p>
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Life style by you</h3>
            <p>
              ENSET Mohammedia <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +212523322220<br>
              <strong>Email:</strong> enset@dwm.ma<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>if you want to receive any new update in our website please subscribe bellow </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Lifestyle by you</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ 
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  

</body>

</html>