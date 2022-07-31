<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('titlelogin')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/iconroti.png" rel="icon">
    <link href="img/iconroti.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo url('/'); ?>/css/style.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <h1 class="logo mr-auto"><a href="/">Toko Roti</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo mr-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="active"><a href="/indexlogin">Home</a></li>
                            <li><a href="/menulogin">Products</a></li>
                            <li><a href="/orderlogin">Order Now</a></li>
                            <li><a href="/daftartransaksilogin">Daftar Transaksi</a></li>
                            <!-- <li><a href="/#team">Team</a></li> -->
                            <li class="drop-down"><a href="#">About Us</a>
                                <ul>
                                    <li><a href="/aboutlogin#aboutus">About</a></li>
                                    <li><a href="/aboutlogin#team">Our Team</a></li>
                                    <li><a href="/aboutlogin#contact">Contact</a></li>
                                    <li><a href="/aboutlogin#feedback">Feedback</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </nav><!-- .nav-menu -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->
    <br>
    {{-- <!-- <h2>@yield('judul_halaman')</h2> --> --}}
    @yield('kontenlogin')
    <br>
    <!-- Footer -->
    <footer id="footer" class="bottom">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Toko Roti</h3>
                        <p style="text-align: justify;">
                            Sebuah Sistem Informasi berbasis Web menggunakan framework laravel untuk membantu pengguna melakukan pemesanan roti secara online pada toko roti ini.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#favorite">Favorite Menu</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/menu">Products</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">About Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Manukan Lor 4F Number. 32 <br>
                            Postal Code : <br>
                            Surabaya<br>
                            <strong>Phone:</strong> +62 81249847967<br>
                            <strong>Email:</strong> 18410100117@dinamika.ac.id<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>New Variant Menu</h4>
                        <p style="text-align: justify;">Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>DAB SQUAD</strong>, 2020. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Vendor JS Files -->
    <script src="<?php echo url('/'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!-- <script src="<?php echo url('/'); ?>/vendor/php-email-form/validate.js"></script> -->
    <script src="<?php echo url('/'); ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/counterup/counterup.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/venobox/venobox.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo url('/'); ?>/js/main.js"></script>
</body>

</html>