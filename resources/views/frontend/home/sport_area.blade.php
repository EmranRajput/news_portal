<style>
        .sports-item {
    transition: opacity 0.5s ease-in-out;
}
    </style>
    <section class="section-box mt-10">
      <div class="container">
        <div class="">
          <h4 class="section-title mb-10 wow animate__animated animate__fadeInUp">Sport</h4>
          <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp"> Stay updated with the latest sports news, scores, and highlights</p>
       </div>
      </div>
      <div class="post-loop-grid">
        <div class="container">
          <div class="row mt-30">
            <div class="col-lg-9">
              <div class="row">
                {{-- ........main section .......... --}}
                  <div class="col-lg-12 mb-30 img_pdding">
                    <div class="card-grid-3 hover-up">
                        <div class="row align-items-stretch" id="trending-news-wrapper">
                        @foreach ($trending_sports_news->take(5) as $index => $news)
                            <div class="row align-items-stretch sports-item" style="{{ $index !== 0 ? 'display: none;' : '' }}">
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
                    @foreach ($sports_news as $index => $news)
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
                                        <a href="{{ route('view.news.detail', $news->slug) }}">{{ Str::limit(strip_tags($news->title),60) }}</a>
                                    </h6>

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
            </div>

{{-- ,,,,,,,,,,,,,,,right side main section ,,,,,,,,,,,,,,,,,,,,,, --}}
            <div class="col-lg-3 col-md-12 col-sm-12 col-12  pl-lg-15 mt-lg-30">
                <div class="col-lg-12 mb-30">
                  <div class="card-grid-3 hover-up">
                    <div class="text-center card-grid-3-image"><a href="blog-details.html">
                        <figure><img alt="joblist" src="{{ asset('frontend/imgs/page/homepage1/img-news6.png') }}"></figure>
                      </a>
                    </div>
                    {{-- <div class="card-block-info">
                      <h6><a href="blog-details.html">Job Interview Tips: How To Make a Great Impression</a></h6>
                    </div> --}}
                  </div>
                </div>



{{-- ...............trending section ................. --}}
            <div class="sidebar-shadow sidebar-news-small">
                <div class="post-list-small">
                    @foreach ($trending_sports_news as $index => $news)
                  <div class="post-list-small-item d-flex align-items-center">
                    <div class="content">
                    <a href="{{ route('view.news.detail', $news->slug) }}">
                      <h5>{{ Str::limit(strip_tags($news->title), 80) }}</h5>
                    </a>
                    </div>
                  </div>
                    @endforeach
                </div>
              </div>

{{-- ............ --}}
            </div>
          </div>
        </div>
      </div>
    </section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const items = document.querySelectorAll('.sports-item');
  let index = 0;

  setInterval(() => {
    items[index].style.display = 'none';
    index = (index + 1) % items.length;
    items[index].style.display = 'flex'; // Important: keeps row flexbox layout
  }, 10000);
});
</script>
