
     <section class="section-box">
      <div class="container">
        <div class="">
          <h4 class="section-title mb-10 wow animate__animated animate__fadeInUp">Feature</h4>
          <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest , updates
            and tips</p>
        </div>
      </div>
      <div class="container">
        <div class="mt-50">
          <div class="box-swiper style-nav-top">
            <div class="swiper-container swiper-group-3 swiper">
              <div class="swiper-wrapper pb-70 pt-5">
                    @foreach ($feature_news as $news)
                        <div class="swiper-slide">
                            <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                <div class="text-center card-grid-3-image">
                                    <a href="{{ route('view.news.detail', $news->slug) }}">
                                        <figure><img alt="{{ $news->title }}" src="{{ asset('storage/' . $news->image) }}"></figure>
                                    </a>
                                </div>
                                <div class="card-block-info">
                                    <h5><a href="{{ route('view.news.detail', $news->slug) }}">{{ $news->title }}</a></h5>
                                    <p class="mt-10 color-text-paragraph font-sm">{{ Str::limit(strip_tags($news->content), 100) }}</p>
                                    <div class="card-2-bottom mt-20">
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="d-flex">
                                                    <div class="info-right-img">
                                                        <span class="font-xs color-text-paragraph-2">{{ $news->created_at->format('d M Y') }} </span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
               </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </section>
