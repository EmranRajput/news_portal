 <style>
.header li.has-children a {
  color: white !important;
  border-color: white !important; /* if buttons have borders */
}

.header .main-menu > li > a:hover {
  background-color: rgb(163, 166, 179) !important;
  color: #05264E !important; /* Or any color you want on hover */
  border-radius: 4px; /* Optional: makes the hover effect smooth */
  transition: 0.3s;
  padding: 5px 10px !important; /* Adjust values as needed */
}

.dropdwnabc li a{
      color: black !important; /* optional for hover effect */

}
.header .main-menu > li {
    padding: 5px 10px !important; /* Adjust values as needed */
    margin: 0 !important;
}
/* Reduce padding for mobile menu items */
.mobile-menu > li {
    padding: 5px 10px !important;
}
.sticky-bar{
    padding: 0px !important;
}


 </style>

 <header class="header sticky-bar" style="background-color: #05264E;">
    <div class="container">
      <div class="main-header">
        <div class="header-left">
          <div class="header-logo">
            <a class="d-flex" href="index.html">
                <img alt="logo" src="assets/imgs/template/logo.png">
            </a>
          </div>
        </div>

        <div class="header-nav">
          <nav class="nav-main-menu">
            <ul class="main-menu">
              <li class="has-children"><a class="active" href="{{ route('home.news') }}">Home</a></li>
              <li class="has-children"><a href="jobs-list.html">International</a></li>
              <li class="has-children"><a href="companies-grid.html">Local</a></li>
              <li class="has-children"><a href="candidates-grid.html">Sport</a></li>
              <li class="has-children"><a href="blog-grid.html">Business</a>
              <li class="has-children"><a href="blog-grid.html">Science & Technology</a>
              <li class="has-children"><a href="blog-grid.html">Entertainment</a>
              <li class="has-children"><a href="blog-grid.html">Articals</a>
              <li class="has-children"><a href="blog-grid.html">Video</a>


                {{-- <ul class="sub-menu">
                  <li><a href="page-about.html">About Us</a></li>
                  <li><a href="page-pricing.html">Pricing Plan</a></li>
                  <li><a href="page-contact.html">Contact Us</a></li>
                  <li><a href="page-register.html">Register</a></li>
                  <li><a href="page-signin.html">Signin</a></li>
                  <li><a href="page-reset-password.html">Reset Password</a></li>
                  <li><a href="blog-details.html">Blog Single</a></li>
                </ul> --}}
              </li>
            </ul>
          </nav>
          {{-- <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
              class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div> --}}
        </div>
        <div class="header-right">
          <div class="block-signin">
            <!-- <a class="text-link-bd-btom hover-up" href="page-register.html">Register</a> -->
            <a class="btn btn-default btn-shadow ml-40 hover-up" href="page-signin.html">Subscribe</a>
          </div>
        </div>
      </div>
    </div>
  </header>
{{-- ................................................. --}}


  <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
      <div class="mobile-header-content-area">
        <div class="perfect-scroll">
          <div class="mobile-search mobile-header-border mb-30">
            <form action="#">
              <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
            </form>
          </div>
          <div class="mobile-menu-wrap mobile-header-border">
            <!-- mobile menu start-->
            <nav>
              <ul class="mobile-menu font-heading">
                <li class="has-children"><a class="active" href="index.html">Home</a>
                  <ul class="sub-menu">
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="index-2.html">Home 2</a></li>
                    <li><a href="index-3.html">Home 3</a></li>
                    <li><a href="index-4.html">Home 4</a></li>
                    <li><a href="index-5.html">Home 5</a></li>
                    <li><a href="index-6.html">Home 6</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="jobs-grid.html">Find a Job</a>
                  <ul class="sub-menu">
                    <li><a href="jobs-grid.html">Jobs Grid</a></li>
                    <li><a href="jobs-list.html">Jobs List</a></li>
                    <li><a href="job-details.html">Jobs Details </a></li>
                    <li><a href="job-details-2.html">Jobs Details 2 </a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="companies-grid.html">Recruiters</a>
                  <ul class="sub-menu">
                    <li><a href="companies-grid.html">Recruiters</a></li>
                    <li><a href="company-details.html">Company Details</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="candidates-grid.html">Candidates</a>
                  <ul class="sub-menu">
                    <li><a href="candidates-grid.html">Candidates Grid</a></li>
                    <li><a href="candidate-details.html">Candidate Details</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="blog-grid.html">Pages</a>
                  <ul class="sub-menu dropdwnabc">
                    <li><a href="page-about.html">About Us</a></li>
                    <li><a href="page-pricing.html">Pricing Plan</a></li>
                    <li><a href="page-contact.html">Contact Us</a></li>
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-signin.html">Signin</a></li>
                    <li><a href="page-reset-password.html">Reset Password</a></li>
                    <li><a href="page-content-protected.html">Content Protected</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="blog-grid.html">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="blog-grid.html">Blog Grid</a></li>
                    <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                    <li><a href="blog-details.html">Blog Single</a></li>
                  </ul>
                </li>
                <li><a href="http://wp.alithemes.com/html/joblist/demos/dashboard" target="_blank">Dashboard</a></li>
              </ul>
            </nav>
          </div>
          <div class="mobile-account">
            <h6 class="mb-10">Your Account</h6>
            <ul class="mobile-menu font-heading">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Work Preferences</a></li>
              <li><a href="#">Account Settings</a></li>
              <li><a href="#">Go Pro</a></li>
              <li><a href="page-signin.html">Sign Out</a></li>
            </ul>
          </div>
          <div class="site-copyright">Copyright 2022 &copy; joblist. <br>Designed by AliThemes.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
      <div class="mobile-header-content-area">
        <div class="perfect-scroll">
          <div class="mobile-search mobile-header-border mb-30">
            <form action="#">
              <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
            </form>
          </div>
          <div class="mobile-menu-wrap mobile-header-border">
            <!-- mobile menu start-->
            <nav>
              <ul class="mobile-menu font-heading">
                <li class="has-children"><a class="active" href="index.html">Home</a>
                  <ul class="sub-menu">
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="index-2.html">Home 2</a></li>
                    <li><a href="index-3.html">Home 3</a></li>
                    <li><a href="index-4.html">Home 4</a></li>
                    <li><a href="index-5.html">Home 5</a></li>
                    <li><a href="index-6.html">Home 6</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="jobs-grid.html">Find a Job</a>
                  <ul class="sub-menu">
                    <li><a href="jobs-grid.html">Jobs Grid</a></li>
                    <li><a href="jobs-list.html">Jobs List</a></li>
                    <li><a href="job-details.html">Jobs Details </a></li>
                    <li><a href="job-details-2.html">Jobs Details 2 </a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="companies-grid.html">Recruiters</a>
                  <ul class="sub-menu">
                    <li><a href="companies-grid.html">Recruiters</a></li>
                    <li><a href="company-details.html">Company Details</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="candidates-grid.html">Candidates</a>
                  <ul class="sub-menu">
                    <li><a href="candidates-grid.html">Candidates Grid</a></li>
                    <li><a href="candidate-details.html">Candidate Details</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="blog-grid.html">Pages</a>
                  <ul class="sub-menu">
                    <li><a href="page-about.html">About Us</a></li>
                    <li><a href="page-pricing.html">Pricing Plan</a></li>
                    <li><a href="page-contact.html">Contact Us</a></li>
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-signin.html">Signin</a></li>
                    <li><a href="page-reset-password.html">Reset Password</a></li>
                    <li><a href="page-content-protected.html">Content Protected</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="blog-grid.html">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="blog-grid.html">Blog Grid</a></li>
                    <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                    <li><a href="blog-details.html">Blog Single</a></li>
                  </ul>
                </li>
                <li><a href="http://wp.alithemes.com/html/joblist/demos/dashboard" target="_blank">Dashboard</a></li>
              </ul>
            </nav>
          </div>
          <div class="mobile-account">
            <h6 class="mb-10">Your Account</h6>
            <ul class="mobile-menu font-heading">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Work Preferences</a></li>
              <li><a href="#">Account Settings</a></li>
              <li><a href="#">Go Pro</a></li>
              <li><a href="page-signin.html">Sign Out</a></li>
            </ul>
          </div>
          <div class="site-copyright">Copyright 2022 &copy; joblist. <br>Designed by AliThemes.</div>
        </div>
      </div>
    </div>
  </div>

