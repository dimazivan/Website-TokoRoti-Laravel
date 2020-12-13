@extends('master')
@section('title')
About Us
@endsection
@section('konten')

<!-- ======= About Us Section ======= -->
<section id="aboutus" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>About Us</h3>
            <p>Toko Roti adalah sebuah aplikasi penjualan aneka macam roti dan kue yang berbasis website.</p>
        </div>
    </div>
</section>
<!-- End About Us Section -->

<!-- ======= Team Section ======= -->
<section id="team">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Our Team</h3>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/FotoDimaz.jpg" class="img-fluid" alt="Foto Dimaz">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Dimaz Ivan Perdana</h4>
                            <span>18410100117</span>
                            <div class="social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/FotoAmel.jpg" class="img-fluid" alt="Foto Amel">
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
                    <img src="img/FotoKetut.jpg" class="img-fluid" alt="Foto Ketut">
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
                    <img src="img/FotoBerliana.jpg" class="img-fluid" alt="Foto Berliana">
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
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
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

<!-- ======= Feedback Section ======= -->
<section id="feedback" class="section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h3>Feedback</h3>
            <p>Please give us some feedback messages to improve our products and services!</p>
        </div>
        <div class="form">
            <form action="" method="post" class="php-email-form">
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail :</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan :</label>
                    <textarea id="pesan" class="form-control" placeholder="Pesan" name="pesan" autocomplete="off" data-msg="Please enter at least 25 chars" style="min-height: 150px; max-height: 150px;"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <button type="submit">Send</button> 
                </div>

            </form>
        </div>
    </div>
</section>
<!-- End Feedback Section -->

@endsection