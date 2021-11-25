@extends("header")

@section('content')



    <!--   search bar popup start   -->
    <div class="search-popup">
        <form class="search-form" action="#">
            <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
        </form>
        <div class="search-popup-overlay" id="searchOverlay"></div>
        <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
    </div>
    <!--   search bar popup end   -->


    <!--  breadcrumb start  -->
    <div class="breadcrumb-area blog-breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumb-txt">
                        <span>Latest Blog</span>
                        <h1>FROM THE LATEST NEWS AND BLOG</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-overlay"></div>
    </div>
    <!--  breadcrumb end  -->


    <!--    blog lists start   -->
    <div class="blog-lists">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach ($allpost as $post)
                                <div class="single-blog">
                                    <div class="blog-img-wrapper">
                                        <img src="{{ $post->image }}" alt="">
                                    </div>
                                    <div class="blog-txt">
                                        <p class="date">{{ $post->created_at }} - BY {{ $post->author }}</p>
                                        <h3 class="blog-title"><a href="blog-details.html">{{ $post->title }}</a></h3>
                                        {{-- <p class="blog-summary">To satisfy customer-specific wishes, we supplements its own
                                        ultra-modern fleet and network with an extensive network of subcontractors and
                                        partners who work under the responsibility and control of our company. They are
                                        monitored by the forward management system developed by in house, fixed.</p> --}}
                                        <a href="blogdetails/{{$post->id}}" class="readmore">Read More</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                            {{ $allpost->links('vendor.pagination.bootstrap-4') }}

                        </div>
                    </div>
                </div>
                <!--    blog sidebar section start   -->
                <div class="col-xl-4 offset-xl-1 col-lg-4">
                    <div class="sidebar">
                        <div class="blog-sidebar-widgets">
                            <div class="searchbar-form-section">
                                <form action="https://kreativdev.com/transpix/transpix/blogs.html">
                                    <div class="searchbar">
                                        <input name="term" type="text" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="blog-sidebar-widgets post-widget">
                            <div class="popular-posts-lists">
                                <h4>Popular Posts</h4>
                                <div class="single-popular-post">
                                    <div class="popular-post-img-wrapper">
                                        <img src="assets/img/blog/blog_sidebar_1.jpg" alt="">
                                    </div>
                                    <div class="popular-post-txt">
                                        <h5 class="popular-post-title"><a href="blog-details.html">Make a great business
                                                community...</a></h5>
                                        <small class="time">2 days ago</small>
                                    </div>
                                </div>
                                <div class="single-popular-post">
                                    <div class="popular-post-img-wrapper">
                                        <img src="assets/img/blog/blog_sidebar_2.jpg" alt="">
                                    </div>
                                    <div class="popular-post-txt">
                                        <h5 class="popular-post-title"><a href="blog-details.html">Glorius business career
                                                for you... </a>
                                        </h5>
                                        <small class="time">2 days ago</small>
                                    </div>
                                </div>
                                <div class="single-popular-post">
                                    <div class="popular-post-img-wrapper">
                                        <img src="assets/img/blog/blog_sidebar_3.jpg" alt="">
                                    </div>
                                    <div class="popular-post-txt">
                                        <h5 class="popular-post-title"><a href="blog-details.html">Make big shipping
                                                industries as business...</a></h5>
                                        <small class="time">2 days ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="blog-sidebar-widgets category-widget">
                                <div class="category-lists">
                                   <h4>Categories</h4>
                                   <ul>
                                      <li class="single-category"><a href="blogs.html">Cargo</a></li>
                                      <li class="single-category"><a href="blogs.html">Delivery service</a></li>
                                      <li class="single-category"><a href="blogs.html">Freight</a></li>
                                      <li class="single-category"><a href="blogs.html">Logistic</a></li>
                                      <li class="single-category"><a href="blogs.html">Shipping</a></li>
                                   </ul>
                                </div>
                             </div> -->
                        <!-- <div class="subscribe-section">
                                <span>SUBSCRIBE</span>
                                <h3>SUBSCRIBE FOR NEWSLETTER</h3>
                                <form class="subscribe-form" action="https://kreativdev.com/transpix/transpix/blogs.html">
                                   <div class="form-element"><input type="email" placeholder="Email"></div>
                                   <div class="form-element"><button type="submit"><span>Subscribe</span></button></div>
                                </form>
                             </div> -->
                    </div>
                </div>
                <!--    blog sidebar section end   -->
            </div>
        </div>
    </div>



@endsection
