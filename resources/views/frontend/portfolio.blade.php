@extends('frontend.layouts.app')

@section('title', 'Portfolio')

@section('content')
    <!-- Start Hero Section -->
    <div class="mainHeroBanner">
      <div class="container">
        <div
          class="mainbannerhero"
          style="background-image: url('asset/images/banner/portfolio.svg')"
        ></div>
      </div>
    </div>
    <!-- /End Hero Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <div class="container">
        <div
          class="isotope-layout"
          data-default-filter="*"
          data-layout="masonry"
          data-sort="original-order"
        >
          <ul
            class="portfolio-filters isotope-filters"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".embrioderyDigitizing">Embriodery Digitizing</li>
            <li data-filter=".vectorArt">Vector Art</li>
          </ul>
          <!-- End Portfolio Filters -->

          <div
            class="row gy-4 isotope-container"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/Back-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/Back-Jacket-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item vectorArt"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/vector-conversation/original/Islanders-Racing-Team-Logo-Vector-Conversation.png"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/vector-conversation/edit/Islanders-Racing-Team-Logo-Vector-Conversation.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/BuzzLogo-FA- Sew-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/BuzzLogo-FA- Sew-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item vectorArt"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/vector-conversation/original/Midway-Motorsports-Vector-Conversation.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/vector-conversation/edit/Midway-Motorsports-Vector-Conversation.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/California-Pro-Sew-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/California-Pro-Sew-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item vectorArt"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/vector-conversation/original/MuleJump-Logo-Vector-Conversation.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/vector-conversation/edit/MuleJump-Logo-Vector-Conversation.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/Cap-Front-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/Cap-Front-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item vectorArt"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/vector-conversation/original/The-Cure-Logo-Vector-Conversation.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/vector-conversation/edit/The-Cure-Logo-Vector-Conversation.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/Cap-Right-Side-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/Cap-Right-Side-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/CityoFox -Ad-Sew-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/CityoFox -Ad-Sew-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/Evil-Camel-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/Evil-Camel-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/Friends-Of-NRA-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/Friends-Of-NRA-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/Greg-Ad-Sew-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/Greg-Ad-Sew-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/NFT-Visiting-Card-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/NFT-Visiting-Card-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/RMAC-Shootout-Am-Sew-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/RMAC-Shootout-Am-Sew-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/SevenClansCasinos-Sew-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/SevenClansCasinos-Sew-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item embrioderyDigitizing"
            >
              <div class="portfolio-content h-100">
                <a
                  href="asset/images/portfolio/embriodery-digitizing/original/Super-Stitch-Inc-The-Adventure-Contimies-Logo-Embriodery-Digitizing.jpg"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox"
                  ><img
                    src="asset/images/portfolio/embriodery-digitizing/edit/Super-Stitch-Inc-The-Adventure-Contimies-Logo-Embriodery-Digitizing.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <!-- End Portfolio Item -->
          </div>
          <!-- End Portfolio Container -->
        </div>
      </div>
    </section>
    <!-- /Portfolio Section -->
@endsection