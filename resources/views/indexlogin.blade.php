@extends('masterlogin')
@section('titlelogin')
Toko Roti
@endsection('titlelogin')
@section('kontenlogin')
<!-- ======= Intro Section ======= -->
<section id="intro" style="margin-top: -23px;">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url(img/RotiBg1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate_animated animate_fadeInDown">Roti </h2>
              <p class="animate_animated animate_fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="#favorite" class="btn-get-started scrollto animate_animated animate_fadeInUp">See Product</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/RotiBg2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate_animated animate_fadeInDown">Roti </h2>
              <p class="animate_animated animate_fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
              <a href="#favorite" class="btn-get-started scrollto animate_animated animate_fadeInUp">See Product</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/RotiBg1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate_animated animate_fadeInDown">Roti </h2>
              <p class="animate_animated animate_fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
              <a href="#favorite" class="btn-get-started scrollto animate_animated animate_fadeInUp">See Product</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/RotiBg2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate_animated animate_fadeInDown">Roti </h2>
              <p class="animate_animated animate_fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
              <a href="#favorite" class="btn-get-started scrollto animate_animated animate_fadeInUp">See Product</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/RotiBg1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate_animated animate_fadeInDown">Roti </h2>
              <p class="animate_animated animate_fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="#favorite" class="btn-get-started scrollto animate_animated animate_fadeInUp">See Product</a>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</section><!-- End Intro Section -->

<main id="main">

  <!-- ======= Featured Services Section Section ======= -->
  <!-- <section id="featured-services">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 box">
          <i class="ion-ios-bookmarks-outline"></i>
          <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>

        <div class="col-lg-4 box box-bg">
          <i class="ion-ios-stopwatch-outline"></i>
          <h4 class="title"><a href="">Dolor Sitema</a></h4>
          <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>

        <div class="col-lg-4 box">
          <i class="ion-ios-heart-outline"></i>
          <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>

      </div>
    </div>
  </section> -->
  <!-- End Featured Services Section -->

  <!-- ======= Favorite Section ======= -->
  <section id="favorite">
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>FAVORITE MENU</h3>
          <p>Hola! This is our favorite menu. Grab it fast!</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="img/cakes/tawar-kupas.jpg" alt="" class="img-fluid">
                <!-- <div class="icon"><i class="ion-ios-speedometer-outline"></i></div> -->
              </div>
              <h2 class="title"><a href="#">Roti Tawar Kupas</a></h2>
              <p style="text-align: justify;">
                Roti tawar premium tanpa pinggiran. Tekstur lembut dan mudah dikonsumsi yang menjadikannya favorit para penikmat roti.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img src="img/cakes/bolu-gulung-pandan.jpg" alt="" class="img-fluid">
                <!-- <div class="icon"><i class="ion-ios-list-outline"></i></div> -->
              </div>
              <h2 class="title"><a href="#">Bolu Gulung Pandan</a></h2>
              <p style="text-align: justify;">
                Bolu varian pandan dengan krim vanila yang lembut akan memanjakan lidah siapapun yang merasakannya.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="img/cakes/roti-susu-keju.jpg" alt="" class="img-fluid">
                <!-- <div class="icon"><i class="ion-ios-eye-outline"></i></div> -->
              </div>
              <h2 class="title"><a href="#">Roti Susu Keju</a></h2>
              <p style="text-align: justify;">
                Roti dengan isian dan taburan keju yang classic merupakan rasa yang familiar bagi yang merasakan.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
  </section><!-- End Favorite Section -->

  <!-- ======= Order Form Section ======= -->
  <section id="order">
    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3>Sudah tahu kue dan roti apa yang ingin dibeli?</h3>
        <p>Klik tombol di bawah ini untuk memesan!</p>
        <a class="cta-btn" href="orderlogin">Beli Sekarang</a>
      </div>
    </section>
  </section><!-- End Order Form Section -->

  <!-- ======= Kategori Section ======= -->
  <section id="testimonials" class="section-bg kate">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3>Kategori Kue dan Roti</h3>
      </header>

      <div class="owl-carousel testimonials-carousel">

        <div class="testimonial-item">
          <div class="col-md-12">
            <img src="img/cakes/tawar-kulit.jpg" alt="">
            <h3>Toast</h3>
            <div class="icon" style="font-size: 24px;">
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="col-md-12">
            <img src="img/cakes/roti-coklat-tiramisu.jpg" alt="">
            <h3>Bread</h3>
            <div class="icon" style="font-size: 24px;">
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star-half"></i>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="col-md-12">
            <img src="img/cakes/chocolate-fudge.jpg" alt="">
            <h3>Cake</h3>
            <div class="icon" style="font-size: 24px;">
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star-outline"></i>
            </div>
          </div>
        </div>

        <div class="testimonial-item">
          <div class="col-md-12">
            <img src="img/cakes/bolu-gulung-strawberry.jpg" alt="">
            <h3>Dry Cake</h3>
            <div class="icon" style="font-size: 24px;">
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star"></i>
              <i class="ion-ios-star-half"></i>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Kategori Section -->

  <!-- ======= Team Section ======= -->
  <section id="team">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h3>Our Team</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="img/FotoDimaz.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Dimaz Ivan Perdana</h4>
                <span>18410100117</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <img src="img/FotoAmel.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Putu Ayu Amalia Indriani</h4>
                <span>18410100128</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <img src="img/FotoKetut.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Ketut Agus Arta Wijaya</h4>
                <span>18410100051</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <img src="img/FotoBerliana.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Berliana Putri Dwi Prehastutik</h4>
                <span>18410100046</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h3>Contact Us</h3>
        <p>Hubungi Kami pada Kontak di bawah ini.</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Address</h3>
            <address>Manukan Lor 4F Number. 32</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+6281249847967">+6281249847967</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:18410100117@dinamika.ac.id">18410100117@dinamika.ac.id</a></p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Contact Section -->

</main><!-- End #main -->
@endsection