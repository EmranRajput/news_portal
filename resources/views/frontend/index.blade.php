 @extends('frontend.master')
 @section('title')
    Home
 @endsection
 @section('home')
<style>
    .card-block-info{
        padding: 10px !important;
    }
    .sidebar-news-small{
    padding: 10px !important;

    }

</style>

<main class="main mt-20">
    {{-- .............top area............. --}}
   @include('frontend.home.top_area',[
    'top_trending_news' => $top_trending_news,
    'general_news'=> $general_news,
    'more_general_news'=> $more_general_news,
    'feature_news'=> $feature_news
    ])
    {{-- .............end top area............. --}}
    {{-- .........Featured Section ............ --}}
   @include('frontend.home.feature_area', [ 'feature_news' => $feature_news])
    {{-- ..................sports Section.............................. --}}
   @include('frontend.home.sport_area',['trending_sports_news' => $trending_sports_news, 'sports_news'=>$sports_news ])
    {{-- ..................video Section.............................. --}}
   @include('frontend.home.video_area')
    {{-- ...............Blog section .................. --}}
   @include('frontend.home.blog_area')
  </main>

  <section class="section-box subscription_box mt-10" style="background-color: #05264E;">
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const items = document.querySelectorAll('.trending-item');
        let index = 0;

        setInterval(() => {
            items[index].style.display = 'none';
            index = (index + 1) % items.length;
            items[index].style.display = 'block';
        }, 10000); // 10000 ms = 10 seconds
    });
</script>


