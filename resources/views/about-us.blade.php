

  

    @extends ("header")

    @section("content")
    <!--   search bar popup start   -->
    <div class="search-popup">
      <form class="search-form" action="#">
        <div class="form-element">
          <input type="text" placeholder="Type your search keyword" />
        </div>
      </form>
      <div class="search-popup-overlay" id="searchOverlay"></div>
      <button class="search-close-btn" id="searchCloseBtn">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <!--   search bar popup end   -->

    <!--  breadcrumb start  -->
    <div class="breadcrumb-area about-breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="breadcrumb-txt">
              <span>about us</span>
              <h1>
                we bring you contents and handle your parcel just the way you
                would!
              </h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    About us
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="breadcrumb-overlay"></div>
    </div>
    <!--  breadcrumb end  -->

    <!--  about section start  -->
    <div class="about-section about">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-6">
            <div class="outer">
              <div class="inner">
                <div class="about-txt">
                  <span class="title">about us</span>
                  <h2 class="subtitle">{{$aboutFromDb["weAre"]}}</h2>
                  <p>
                   {{$aboutFromDb->first}}
                  </p>
                  <p>
                  {{$aboutFromDb["second"]}}
                  </p>
                  <img src="assets/img/signature-2.png" alt="" />
                  <h5>{{$aboutFromDb->founder}}</h5>
                  <span>Founder & CEO</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 offset-xl-1 col-lg-6">
            <div class="about-right-bg"></div>
          </div>
        </div>
        <div class="targets">
          <div class="row">
            <div class="col-lg-6">
              <div class="box wow fadeInUp" data-wow-duration="1s">
                <div class="icon-wrapper">
                  <i
                    class="
                      flaticon-external-link-square-with-an-arrow-in-right-diagonal
                    "
                  ></i>
                </div>
                <div class="box-details">
                  <h4>Our mission</h4>
                  <p>
                    We offer a host of logistic management services and supply
                    chain solutions. We provide innovative solutions with the
                    best.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div
                class="box wow fadeInUp"
                data-wow-duration="1s"
                data-wow-delay=".2s"
              >
                <div class="icon-wrapper"><i class="flaticon-check"></i></div>
                <div class="box-details">
                  <h4>Our Vision</h4>
                  <p>
                    Our vision is to be the number one parcel handler company
                    and make you always feel relaxed when you use our services.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  about section end  -->

    <!--  features section start  -->
    <div class="features-section home-2 border-top">
      <div class="container">
        <div class="row feature-content">
          <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 pr-0">
            <div class="features">
              <span class="title">Features</span>
              <h2 class="subtitle">WHY CHOOSE US?</h2>
              <div class="feature-lists">
                <div class="single-feature wow fadeInUp" data-wow-duration="1s">
                  <div class="icon-wrapper">
                    <i class="flaticon-customer-service"></i>
                  </div>
                  <div class="feature-details">
                    <h4>24/7 support</h4>
                    <p>
                      Even though our working days are Monday to Saturday, we
                      offer 24/7 support. cool right?, Yes.
                    </p>
                  </div>
                </div>
                <div
                  class="single-feature wow fadeInUp"
                  data-wow-duration="1s"
                  data-wow-delay=".2s"
                >
                  <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                  <div class="feature-details">
                    <h4>On time delivery</h4>
                    <p>
                     We make seemless delivery to your preffered location today, tomorrow and always!.
                    </p>
                  </div>
                </div>
                <div
                  class="single-feature wow fadeInUp"
                  data-wow-duration="1s"
                  data-wow-delay=".4s"
                >
                  <div class="icon-wrapper">
                    <i class="flaticon-worldwide"></i>
                  </div>
                  <div class="feature-details">
                    <h4>global news</h4>
                    <p>
                      We offer you the latest gists around the globe and you will never run out of gists!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  features section end  -->


    <!--  service section start  -->
    <div class="service-section">
      <div class="container">
        <span class="title">Our Services</span>
        <h2 class="subtitle">WHAT WE PROVIDE</h2>
        <div class="service-carousel owl-carousel owl-theme">
          <div class="single-service">
            <div class="img-wrapper">
              <img src="assets/img/services/service_1.jpg" alt="" />
            </div>
            <div class="service-txt">
              <h4 class="service-title">Air Freight</h4>
              <p class="service-para">
                We offers a host of logistic management services and supply
                chain solutions. consectetur adipiscing elit.
              </p>
              <a href="service-details.html" class="readmore">Read More</a>
            </div>
          </div>
          <div class="single-service">
            <div class="img-wrapper">
              <img src="assets/img/services/service_2.jpg" alt="" />
            </div>
            <div class="service-txt">
              <h4 class="service-title">Road Freight</h4>
              <p class="service-para">
                We offers a host of logistic management services and supply
                chain solutions. consectetur adipiscing elit.
              </p>
              <a href="service-details.html" class="readmore">Read More</a>
            </div>
          </div>
          <div class="single-service">
            <div class="img-wrapper">
              <img src="assets/img/services/service_3.jpg" alt="" />
            </div>
            <div class="service-txt">
              <h4 class="service-title">Ocean Freight</h4>
              <p class="service-para">
                We offers a host of logistic management services and supply
                chain solutions. consectetur adipiscing elit.
              </p>
              <a href="service-details.html" class="readmore">Read More</a>
            </div>
          </div>
          <div class="single-service">
            <div class="img-wrapper">
              <img src="assets/img/services/service_4.jpg" alt="" />
            </div>
            <div class="service-txt">
              <h4 class="service-title">Air Freight</h4>
              <p class="service-para">
                We offers a host of logistic management services and supply
                chain solutions. consectetur adipiscing elit.
              </p>
              <a href="service-details.html" class="readmore">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  service section end  -->

 

  @endsection

    <!-- preloader section start -->
    <div class="loader-container">
      <span class="loader">
        <span class="loader-inner"></span>
      </span>
    </div>
    <!-- preloader section end -->

    <!-- back to top area start -->
    <div class="back-to-top">
      <i class="fas fa-chevron-up"></i>
    </div>
    <!-- back to top area end -->

    <!-- popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- slicknav js -->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
  

  

