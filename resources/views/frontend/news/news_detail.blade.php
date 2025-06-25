 @extends('frontend.master')
 @section('title')
    Content
 @endsection
 @section('home')
 <style>
    .box-white{
        padding :0px !important;
    }
 </style>
  <main class="main mt-15">

    <section class="section-box">
      <div class="archive-header pt-40">
        <div class="container">
          <div class="box-white">
            <!-- <div class="max-width-single"><a class="btn btn-tag" href="#">Job Tips</a> -->
            <h2 class="mb-30 mt-20">{{ $news->title }}</h2>
            <div class="post-meta text-muted d-flex mx-auto">
              <div class="author d-flex mr-30"><span>Sarah
                  Harding</span></div>
              <div class="date"><span class="font-xs color-text-paragraph-2 mr-20 d-inline-block"><img
                    class="img-middle mr-5" src="assets/imgs/page/blog/calendar.svg">{{ $news->created_at }}</span></div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <div class="post-loop-grid">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="single-body">
              <figure><img src="{{ asset('storage/' . $news->image) }}" width="100%"></figure>
              <div class="">
                <div class="content-single">
                  <p></p>
                  <p>
                {{!! $news->content !!}}
                  </p>
                </div>
                <div class="single-apply-jobs mt-20">
                  <div class="row">
                    <div class="col-lg-7"><a class="btn btn-border-3 mr-10 hover-up" href="#"># Nature</a><a
                        class="btn btn-border-3 mr-10 hover-up" href="#"># Beauty</a><a
                        class="btn btn-border-3 hover-up" href="#"># Travel tips</a></div>
                    <div class="col-md-5 text-lg-end social-share">
                      <h6 class="color-text-paragraph-2 d-inline-block d-baseline mr-20 mt-10">Share</h6><a
                        class="mr-20 d-inline-block d-middle hover-up" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"><img alt="facebook"
                          src="{{ asset('frontend/imgs/page/blog/fb.svg')}}"></a><a class="mr-20 d-inline-block d-middle hover-up"
                        href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($news->title) }}"><img alt="twitter" src="{{ asset('frontend/imgs/page/blog/tw.svg')}}"></a><a
                        class="mr-0 d-inline-block d-middle hover-up" href="https://wa.me/?text={{ urlencode($news->title . ' - ' . request()->fullUrl()) }}"><img alt="whatsapp"
                          src="{{ asset('frontend/imgs/page/blog/whatsapp.png')}}"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
