<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> @yield('title') | P-Media Link</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('/backend/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/backend/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('/backend/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/backend/modules/weather-icon/css/weather-icons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/backend/modules/weather-icon/css/weather-icons-wind.min.css')}}">
  <link rel="stylesheet" href="{{asset('/backend/modules/summernote/summernote-bs4.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('/backend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/backend/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

{{-- .............start navbar.......... --}}
         @include('backend.body.navbar')

{{-- .............start sidebar.......... --}}

    @include('backend.body.sidebar')



{{-- .............end sidebar.......... --}}


      <!-- Main Content -->
        @yield('home')



     {{-- .............start footer.......... --}}

    @include('backend.body.footer')
    @include('backend.notification.notification_alert')

    </div>
  </div>
      @include('backend.body.js_script')

  <!-- General JS Scripts -->
  <script src="{{asset('/backend/modules/jquery.min.js')}}"></script>
  <script src="{{asset('/backend/modules/popper.js')}}"></script>
  <script src="{{asset('/backend/modules/tooltip.js')}}"></script>
  <script src="{{asset('/backend/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/backend/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('/backend/modules/moment.min.js')}}"></script>
  <script src="{{asset('/backend/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{asset('/backend/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
  <script src="{{asset('/backend/modules/chart.min.js')}}"></script>
  <script src="{{asset('/backend/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('/backend/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{asset('/backend/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('/backend/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('/backend/js/page/index-0.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{asset('/backend/js/scripts.js')}}"></script>
  <script src="{{asset('/backend/js/custom.js')}}"></script>
</body>
</html>
