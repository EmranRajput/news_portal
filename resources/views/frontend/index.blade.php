 @extends('frontend.master')
 @section('title')
    Home
 @endsection
 @section('home')

  <main class="main mt-75">

    {{-- <section class="section-box">
      <div class="breacrumb-cover">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <h2 class="mb-20">Blog</h2>
              <ul class="breadcrumbs">
                <li><a class="home-icon" href="index.html">Home</a></li>
                <li>Blog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> --}}


    <section class="section-box mt-20">
      <div class="post-loop-grid">
        <div class="container">
          <div class="row mt-30">
            <div class="col-lg-8">
              <div class="row">
                {{-- ........main section .......... --}}
                <div class="col-lg-12 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a></div>
                    <div class="card-block-info">
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&rsquo;s most
                        sustainable healthcare company.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi
                                  Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins
                              to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- ........... end main section ........ --}}
                </div>

                <div class="row">
                <div class="col-lg-4 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a></div>
                    <div class="card-block-info">
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&rsquo;s most
                        sustainable healthcare company.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi
                                  Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins
                              to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-4 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a></div>
                    <div class="card-block-info">
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&rsquo;s most
                        sustainable healthcare company.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi
                                  Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins
                              to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-4 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a></div>
                    <div class="card-block-info">
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&rsquo;s most
                        sustainable healthcare company.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi
                                  Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins
                              to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-4 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a></div>
                    <div class="card-block-info">
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&rsquo;s most
                        sustainable healthcare company.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi
                                  Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins
                              to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-4 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a></div>
                    <div class="card-block-info">
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&rsquo;s most
                        sustainable healthcare company.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi
                                  Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins
                              to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="col-lg-4 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a></div>
                    <div class="card-block-info">
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                      <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&rsquo;s most
                        sustainable healthcare company.</p>
                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex">
                              <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Azumi
                                  Rose</span><br><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins
                              to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="paginations">
                <ul class="pager">
                  <li><a class="pager-prev" href="#"><i class="fas fa-arrow-left"></i></a></li>
                  <li><a class="pager-number" href="#">1</a></li>
                  <li><a class="pager-number" href="#">2</a></li>
                  <li><a class="pager-number active" href="#">3</a></li>
                  <li><a class="pager-number" href="#">4</a></li>
                  <li><a class="pager-next" href="#"><i class="fas fa-arrow-right"></i></a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">

                <div class="col-lg-12 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a></div>
                    <div class="card-block-info">
                      <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>

                      <div class="card-2-bottom mt-20">
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <div class="d-flex">
                              <div class="info-right-img"><span class="font-xs color-text-paragraph-2">25 April 2022</span></div>
                            </div>
                          </div>
                          <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins
                              to read</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              {{-- <div class="widget_search mb-40">
                <div class="search-form">
                  <form action="#">
                    <input type="text" placeholder="Search…">
                    <button type="submit"><i class="fi-rr-search"></i></button>
                  </form>
                </div>
              </div> --}}


              <div class="sidebar-shadow sidebar-news-small">
                <h5 class="sidebar-title">Trending Now</h5>
                <div class="post-list-small">
                  <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15"><img src="{{ asset('frontend/imgs/page/blog/img-trending.png')}}" alt="joblist">
                    </figure>
                    <div class="content">
                      <h5>How to get better agents in New York, USA</h5>
                      <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20"><span>Sugar Rosie</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15"><img src="{{ asset('frontend/imgs/page/blog/gallery1.png')}}" alt=""></figure>
                    <div class="content">
                      <h5>How To Create a Resume for a Job in Social</h5>
                      <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20"><span>Harding</span></div>
                        <div class="date"><span>17 Sep</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15"><img src="{{ asset('frontend/imgs/page/blog/gallery2.png')}}" alt=""></figure>
                    <div class="content">
                      <h5>10 Ways to Avoid a Referee Disaster Zone</h5>
                      <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20"><span>Steven</span></div>
                        <div class="date"><span>23 Sep</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15"><img src="{{ asset('frontend/imgs/page/blog/gallery4.png')}}" alt=""></figure>
                    <div class="content">
                      <h5>How To Set Work-Life Boundaries From Any Location</h5>
                      <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20"><span>Merias</span></div>
                        <div class="date"><span>14 Sep</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15"><img src="{{ asset('frontend/imgs/page/blog/gallery5.png')}}" alt=""></figure>
                    <div class="content">
                      <h5>How to Land Your Dream Marketing Job</h5>
                      <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20"><span>Rosie</span></div>
                        <div class="date"><span>12 Sep</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar-shadow sidebar-news-small">
                <h5 class="sidebar-title">Gallery</h5>
                <div class="post-list-small">
                  <ul class="gallery-3">
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery1.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery2.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery3.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery4.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery5.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery6.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery7.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery8.png')}}"></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/imgs/page/blog/gallery9.png')}}"></a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

  </main>

  <section class="section-box subscription_box mt-120" style="background-color: #05264E;">
    <div class="container" >
      <div class="box-newsletter" >
        <div class="newsletter_textarea" >
          <div class="row">
            <div class="col-lg-6">
              <h2 class="text-md-newsletter">Subscribe our newsletter</h2>
            </div>
            <div class="col-lg-6">
              <div class="box-form-newsletter">
                <form class="form-newsletter">
                  <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                  <button class="btn btn-default font-heading">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection



