    <style>
    .trending-item {
        transition: opacity 0.5s ease-in-out;
    }
    .img_pdding{
        padding-right:0px !important;
    }
    </style>

    <section class="section-box mt-20">
      <div class="post-loop-grid">
        <div class="container">
          <div class="row mt-30">
            <div class="col-lg-9">
              <div class="row">
                {{-- ........main section .......... --}}
                <div class="col-lg-12 mb-30 img_pdding">
                <div class="card-grid-3 hover-up">
                    <div class="row align-items-stretch" id="trending-news-wrapper">
                    @foreach ($top_trending_news->take(5) as $index => $news)
                        <div class="row align-items-stretch trending-item" style="{{ $index !== 0 ? 'display: none;' : '' }}">
                        {{-- Left Side: Title and Description --}}
                        <div class="col-lg-5 col-md-5 col-sm-12 d-flex">
                            <div class="card-block-info p-3 d-flex flex-column justify-content-between w-100">
                            <div>
                                <h6><a href="{{ route('view.news.detail', $news->slug) }}">{{ $news->title }}</a></h6>
                                <p class="mt-10 color-text-paragraph font-sm">
                                {{ Str::limit(strip_tags($news->content), 300) }}
                                </p>
                            </div>
                            <div class="card-2-bottom mt-3">
                                <div class="row">
                                <div class="col-6">
                                    <div class="info-right-img">
                                    <span class="font-sm font-bold color-brand-1 op-70">{{ $news->author ?? 'Admin' }}</span><br>
                                    <span class="font-xs color-text-paragraph-2">{{ $news->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="color-text-paragraph-2 font-xs">8 mins to read</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        {{-- Right Side: Image --}}
                        <div class="col-lg-7 col-md-7 col-sm-12 p-0">
                            <a href="{{ route('view.news.detail', $news->slug) }}">
                            <figure class="h-100 m-0">
                                <img
                                src="{{ asset('storage/' . $news->image) }}"
                                alt="{{ $news->title }}"
                                class="img-fluid w-100 h-100 object-cover"
                                style="object-fit: cover;">
                            </figure>
                            </a>
                        </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                </div>
                {{-- ........... end main section ........ --}}
              </div>

{{-- ..............section under main .................... --}}

         <div class="row">
            @foreach ($general_news as $index => $news)
                <div class="col-lg-3 mb-30">
                    <div class="card-grid-3 hover-up">
                        <div class="text-center card-grid-3-image">
                            <a href="{{ route('view.news.detail', $news->slug) }}">
                                <figure>
                                    <img alt="joblist" src="{{ asset('storage/' . $news->image) }}">
                                </figure>
                            </a>
                        </div>
                        <div class="card-block-info">
                            <h6>
                                <a href="{{ route('view.news.detail', $news->slug) }}">{{ Str::limit(strip_tags($news->title), 60) }}</a>
                            </h6>
                            <p class="mt-10 color-text-paragraph font-sm">
                                {{ Str::limit(strip_tags($news->content), 80) }}
                            </p>
                            <div class="card-2-bottom mt-20">
                                <div class="row">
                                    <div class="">8 mins to read | Asia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>




              {{-- ....Section without_image --}}
            <div class="row">
            @foreach ($more_general_news as $index => $news)
                <div class="col-lg-3 mb-30">
                    <div class="card-grid-3 hover-up">
                        <div class="card-block-info">
                            <h6><a href="{{ route('view.news.detail', $news->slug) }}">{{ Str::limit(strip_tags($news->title), 80) }}</a></h6>
                            <p class="mt-10 color-text-paragraph font-sm">{{ Str::limit(strip_tags($news->content), 50) }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
            </div>


              {{-- <div class="paginations">
                <ul class="pager">
                  <li><a class="pager-prev" href="#"><i class="fas fa-arrow-left"></i></a></li>
                  <li><a class="pager-number" href="#">1</a></li>
                  <li><a class="pager-number" href="#">2</a></li>
                  <li><a class="pager-number active" href="#">3</a></li>
                  <li><a class="pager-number" href="#">4</a></li>
                  <li><a class="pager-next" href="#"><i class="fas fa-arrow-right"></i></a></li>
                </ul>
              </div> --}}
            </div>

{{-- ,,,,,,,,,,,,,,,right side main section ,,,,,,,,,,,,,,,,,,,,,, --}}
            <div class="col-lg-3 col-md-12 col-sm-12 col-12  pl-lg-15 mt-lg-30">
                <div class="col-lg-12 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage2/img3.png') }}"></figure>
                      </a>
                    </div>
                    <div class="card-block-info">
                      <h6><a href="blog-details.html">Job Interview Tips: How To Make a Great Impression</a></h6>
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

{{-- ...............trending section ................. --}}
              <div class="sidebar-shadow sidebar-news-small">
                <h5 class="sidebar-title">Trending Now</h5>
                <div class="post-list-small">
        @foreach ($top_trending_news as $index => $news)

                  <div class="post-list-small-item d-flex align-items-center">
                    <figure class="thumb mr-15"><img src="{{ asset('storage/' . $news->image) }}" alt="news_image"></figure>
                    <div class="content">
                    <a href="{{ route('view.news.detail', $news->slug) }}">
                      <h5>{{ Str::limit(strip_tags($news->title), 30) }}</h5>
                    </a>
                      <div class="post-meta text-muted d-flex align-items-center mb-15">
                        <div class="author d-flex align-items-center mr-20"><span>Harding</span></div>
                        <div class="date"><span>{{ $news->published_at }}</span></div>
                      </div>
                    </div>
                  </div>
@endforeach
                </div>
              </div>

{{-- ...........Gallery section.............. --}}

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

<script>
document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.trending-item');
  let index = 0;

  setInterval(() => {
    items[index].style.display = 'none';
    index = (index + 1) % items.length;
    items[index].style.display = 'flex'; // Important: keeps row flexbox layout
  }, 10000);
});
</script>
