@extends('master')
@section('title')
Menu
@endsection('title')
@section('konten')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="section-bg" style="margin-top: 50px;">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3 class="section-title">Our Products</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class=" col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All Products</li>
                    <li data-filter=".filter-toast">Toast</li>
                    <li data-filter=".filter-bread" id="bread">Bread</li>
                    <li data-filter=".filter-cake">Cake</li>
                    <li data-filter=".filter-dry">Dry Cake</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-toast">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/tawar-kulit') }}.jpg" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/tawar-kulit') }}.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Roti 1"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Roti Tawar kulit</a></h4>
                        <p>Toast</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-bread">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/roti-triple-oreo.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/roti-triple-oreo.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Roti Triple Oreo</a></h4>
                        <p>Bread</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-dry">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/bolu-gulung-pandan.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/bolu-gulung-pandan.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Bolu Gulung Pandan</a></h4>
                        <p>Dry Cake</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-cake">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/chocolate-fudge.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/chocolate-fudge.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Chocolate Fudge</a></h4>
                        <p>Cake</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-bread">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/roti-susu-keju.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/roti-susu-keju.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Roti Susu Keju</a></h4>
                        <p>Bread</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-cake">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/blueberry-cheesecake.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/blueberry-cheesecake.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Blueberry Cheesecake</a></h4>
                        <p>Cake</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-toast">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/tawar-gandum') }}.jpg" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/tawar-gandum') }}.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Roti 1"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Roti Tawar Gandum</a></h4>
                        <p>Toast</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-dry">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/bolu-gulung-strawberry.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/bolu-gulung-strawberry.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti 3"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Bolu Gulung Strawberry</a></h4>
                        <p>Dry Cake</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-cake">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/oreo-cheesecake.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/oreo-cheesecake.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti 1"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Oreo Cheesecake</a></h4>
                        <p>Cake</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-bread">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/roti-coklat-tiramisu.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/roti-coklat-tiramisu.jpg') }}" data-lightbox="portfolio" data-title="Roti" class="link-preview"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Roti Coklat Tiramisu</a></h4>
                        <p>Bread</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-toast">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/tawar-kupas.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/tawar-kupas.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Roti Tawar Kupas</a></h4>
                        <p>Toast</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-dry">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('img/cakes/tiger-roll.jpg') }}" class="img-fluid" alt="">
                        <a href="{{ asset('img/cakes/tiger-roll.jpg') }}" class="link-preview venobox" data-gall="portfolioGallery" title="Roti"><i class="ion ion-eye"></i></a>
                        <a href="Rincian.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="Rincian.html">Tiger Roll</a></h4>
                        <p>Dry Cake</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->
@endsection