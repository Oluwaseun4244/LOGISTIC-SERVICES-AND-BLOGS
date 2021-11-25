@extends("header")
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

    <!--  hero area start  -->
    <div class="hero-area hero-bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-8">
            <div class="hero-txt">
              <span class="wow fadeInDown" data-wow-duration="1.5s"
                >We are de-claxik</span
              >
              <h1 class="wow fadeInUp" data-wow-duration="1.5s">
                home of blog and logistics
              </h1>
              <a
                class="wow fadeInUp boxed-btn"
                data-wow-duration="1.5s"
                href="services.html"
                ><span>SEE SERVICES</span></a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="hero-overlay"></div>
    </div>
    <!--  hero area end  -->

    <!--  features section start  -->
    <div class="features-section">
      <div class="container">
        <div class="row feature-bg feature-content">
          <div class="col-lg-7 offset-lg-5 pr-0">
            <div class="features">
              <span class="title">Features</span>
              <h2 class="subtitle">WHY CHOOSE US</h2>
              <div class="feature-lists">
                <div class="single-feature wow fadeInUp" data-wow-duration="1s">
                  <div class="icon-wrapper">
                    <i class="flaticon-customer-service"></i>
                  </div>
                  <div class="feature-details">
                    <h4>24/7 support</h4>
                    <p>
                      We offers logistic management services and supply chain
                      perspiciatis unde omnis iste natus error sit voluptat.
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
                      We offers logistic management services and supply chain
                      perspiciatis unde omnis iste natus error sit voluptat.
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
                    <h4>global service</h4>
                    <p>
                      We offers logistic management services and supply chain
                      perspiciatis unde omnis iste natus error sit voluptat.
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
              <h4 class="service-title">Warhousing</h4>
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

    <!--  about section start  -->
    <div class="about-section about-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <img class="ceo-pic" src="assets/img/ceo.png" alt="" />
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="comment-content">
              <span class="title">About Us</span>
              <h2 class="subtitle">WE ARE TRANSFIX</h2>
              <p class="comment">
                We offers a host of logistic management services and supply
                chain solutions. We provide innovative solutions with the best.
                Incididunt dolor sit amet, consectetur adipiscing elit, sed
                dolore magna Incididunt dolor sit amet, consectetur adipiscing
                elit, sed dolore magna.
              </p>
              <div class="ceo-details">
                <img src="assets/img/signature.png" alt="" />
                <h5>DAVID ANDERSON</h5>
                <span>Founder & CEO</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about-overlay"></div>
    </div>
    <!--  about section end  -->

    <!--  Testimonial section start  -->
    <div class="testimonial-section">
      <div class="container">
        <div class="testimonial-container">
          <div class="row">
            <div class="col-lg-5">
              <div class="testimonial">
                <span class="title">Testimonial</span>
                <h2 class="subtitle">WHAT THEY SAY</h2>
                <div class="testimonial-carousel owl-carousel owl-theme">
                  <div class="single-testimonial">
                    <p>
                      They offers a host of logistic management services and
                      supply chain . We provide innovative solutions with the
                      best. tempor incididunt ut labore et dolor empor tempor
                      incididunt
                    </p>
                    <h5>Jonathon Doe</h5>
                    <span>Directer, art media</span>
                  </div>
                  <div class="single-testimonial">
                    <p>
                      They offers a host of logistic management services and
                      supply chain . We provide innovative solutions with the
                      best. tempor incididunt ut labore et dolor empor tempor
                      incididunt
                    </p>
                    <h5>Jonathon Doe</h5>
                    <span>Directer, art media</span>
                  </div>
                  <div class="single-testimonial">
                    <p>
                      They offers a host of logistic management services and
                      supply chain . We provide innovative solutions with the
                      best. tempor incididunt ut labore et dolor empor tempor
                      incididunt
                    </p>
                    <h5>Jonathon Doe</h5>
                    <span>Directer, art media</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="free-space"></div>
            </div>
          </div>
          <div class="quote-icon">
            <i class="flaticon-quote-left"></i>
          </div>
        </div>
      </div>
    </div>
    <!--  Testimonial section end  -->

    <!--   partner section start    -->
    <div class="partner-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div
              class="
                partner-carousel
                owl-carousel owl-theme
                border-bottom border-top-lg-0 border-top
              "
            >
              <div class="single-partner-item">
                <div class="outer">
                  <div class="inner">
                    <img src="assets/img/partner-1.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="single-partner-item">
                <div class="outer">
                  <div class="inner">
                    <img src="assets/img/partner-2.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="single-partner-item">
                <div class="outer">
                  <div class="inner">
                    <img src="assets/img/partner-3.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="single-partner-item">
                <div class="outer">
                  <div class="inner">
                    <img src="assets/img/partner-4.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="single-partner-item">
                <div class="outer">
                  <div class="inner">
                    <img src="assets/img/partner-5.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   partner section end    -->

    <!--   faq section start    -->
    <div class="faq-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7">
            <div class="targets">
              <div class="box wow fadeInUp" data-wow-duration="1.5s">
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
                    We offers a host of logistic management services and supply
                    chain solutions. consectetur adipiscing elit. Sed ut
                    perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium
                  </p>
                </div>
              </div>
              <div
                class="box wow fadeInUp"
                data-wow-duration="1.5s"
                data-wow-delay=".2s"
              >
                <div class="icon-wrapper"><i class="flaticon-check"></i></div>
                <div class="box-details">
                  <h4>Our Vision</h4>
                  <p>
                    We offers a host of logistic management services and supply
                    chain solutions. consectetur adipiscing elit. Sed ut
                    perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-xl-1 col-xl-5 col-lg-5 faqs">
            <span class="title">FAQS</span>
            <h2 class="subtitle">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="accordion" id="accordionExample">
              <div class="card wow fadeInUp" data-wow-duration="1s">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button
                      class="btn btn-link collapsed btn-block text-left"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseOne"
                      aria-expanded="false"
                      aria-controls="collapseOne"
                    >
                      Why choose this?
                    </button>
                  </h2>
                </div>
                <div
                  id="collapseOne"
                  class="collapse"
                  aria-labelledby="headingOne"
                  data-parent="#accordionExample"
                >
                  <div class="card-body">
                    They offers a host of logistic management services and
                    supply chain . We provide innovative solutions with the
                    best. tempor incididunt ut labore et dolor empor tempor
                    incididunt innovative solutions
                  </div>
                </div>
              </div>
              <div
                class="card wow fadeInUp"
                data-wow-duration="1s"
                data-wow-delay=".2s"
              >
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button
                      class="btn btn-link collapsed btn-block text-left"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      Is it costly?
                    </button>
                  </h2>
                </div>
                <div
                  id="collapseTwo"
                  class="collapse"
                  aria-labelledby="headingTwo"
                  data-parent="#accordionExample"
                >
                  <div class="card-body">
                    They offers a host of logistic management services and
                    supply chain . We provide innovative solutions with the
                    best. tempor incididunt ut labore et dolor empor tempor
                    incididunt innovative solutions
                  </div>
                </div>
              </div>
              <div
                class="card wow fadeInUp"
                data-wow-duration="1s"
                data-wow-delay=".4s"
              >
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button
                      class="btn btn-link collapsed btn-block text-left"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      When usally product reach
                    </button>
                  </h2>
                </div>
                <div
                  id="collapseThree"
                  class="collapse"
                  aria-labelledby="headingThree"
                  data-parent="#accordionExample"
                >
                  <div class="card-body">
                    They offers a host of logistic management services and
                    supply chain . We provide innovative solutions with the
                    best. tempor incididunt ut labore et dolor empor tempor
                    incididunt innovative solutions
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   faq section end    -->

    <!--   quote section start    -->
    {{-- <div class="quote-section quote-bg">
      <div class="container">
        <div class="row">
          <div class="offset-lg-5 col-lg-7">
            <div class="quote-form-section">
              <span class="title">Quote</span>
              <h2 class="subtitle">Request a free qoute</h2>
              <form action="#">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-element">
                      <input name="name" type="text" placeholder="You name" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-element">
                      <div class="select-wrapper">
                        <select name="freight">
                          <option value="" selected disabled>
                            Select a Freight
                          </option>
                          <option value="">Air Freight</option>
                          <option value="">Ocean Freight</option>
                          <option value="">Road Freight</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-element">
                      <input name="email" type="email" placeholder="Email" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-element">
                      <input name="phone" type="text" placeholder="Phone" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-element mb-0">
                      <button type="submit"><span>Submit</span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!--   quote section end    -->

    <!--   news section start    -->
    <div class="news-section">
      <div class="container">
        
            
       
        <span class="title">Latest blog</span>
        
        <h2 class="subtitle">Inside The News</h2>
        
        <div class="row">
          @foreach ($blogs as $blog)
          <div class="col-lg-4 col-md-6">
            <div class="single-news wow fadeInRight" data-wow-duration="1.5s">
              <img style="width:300px"src="{{$blog->image}}" alt="" />
              <div class="news-txt">
                <span class="date">{{$blog->created_at}} - {{$blog->author}}</span>
                <a href="blog-details.html" class="title">
                  <h3>
                    {{$blog->title}}...
                  </h3>
                </a>
                <a class="readmore" href="blogdetails/{{$blog->id}}">Read More</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        {{ $blogs->links('vendor.pagination.bootstrap-4') }}
      </div>
    </div>
    <!--   news section end    -->

    <!--   cta section start    -->

    <!--   cta section end    -->

    <!--   footer section start    -->
   

    <!-- preloader section start -->

  @endsection
