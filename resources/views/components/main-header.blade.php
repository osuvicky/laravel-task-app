<!-- Header Area wrapper Starts -->
<header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
            </button>
            <a href="index-2.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index-2.html">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="category.html">
                  Categories
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Listings
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
                  <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
                  <a class="dropdown-item" href="ads-details.html">Listing Detail</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages 
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="about.html">About Us</a>
                  <a class="dropdown-item" href="services.html">Services</a>
                  <a class="dropdown-item" href="ads-details.html">Ads Details</a>
                  <a class="dropdown-item" href="post-ads.html">Ads Post</a>
                  <a class="dropdown-item" href="pricing.html">Packages</a>
                  <a class="dropdown-item" href="testimonial.html">Testimonial</a>
                  <a class="dropdown-item" href="faq.html">FAQ</a>
                  <a class="dropdown-item" href="404.html">404</a>
                </div>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Blog 
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a>
                  <a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                  <a class="dropdown-item" href="blog-grid-full-width.html"> Blog full width </a>
                  <a class="dropdown-item" href="single-post.html">Blog Details</a>
                </div>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="contact.html">
                  Contact
                </a>
              </li>
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                  Login
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                  Signup
                </a>
              </li>
              @endguest
            </ul>
            @auth
            <ul class="sign-in">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a>
                  <a class="dropdown-item" href="account-myads.html"><i class="lni-wallet"></i> My Ads</a>
                  <a class="dropdown-item" href="account-favourite-ads.html"><i class="lni-heart"></i> Favourite ads</a>
                  <a class="dropdown-item" href="account-archived-ads.html"><i class="lni-folder"></i> Archived</a>
                  <a class="dropdown-item" href="login.html"><i class="lni-lock"></i> Log In</a>
                  <a class="dropdown-item" href="signup.html"><i class="lni-user"></i> Signup</a>
                  <a class="dropdown-item" href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a>
                  <a class="dropdown-item" href="account-close.html"><i class="lni-close"></i>Account close</a>
                </div>
              </li>
            </ul>
            @endauth
            <a class="tg-btn" href="post-ads.html">
              <i class="lni-pencil-alt"></i> Post An Ad
            </a>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a href="index-2.html">Home</a>
          </li>
          <li>
            <a href="category.html">Categories</a>
          </li>
          <li>
            <a href="#">
            Listings
            </a>
            <ul class="dropdown">
              <li><a href="adlistinggrid.html">Ad Grid</a></li>
              <li><a href="adlistinglist.html">Ad Listing</a></li>
              <li><a href="ads-details.html">Listing Detail</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="#">Pages</a>
            <ul class="dropdown">
              <li><a class="active" href="about.html">About Us</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="ads-details.html">Ads Details</a></li>
              <li><a href="post-ads.html">Ads Post</a></li>
              <li><a href="pricing.html">Packages</a></li>
              <li><a href="testimonial.html">Testimonial</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404</a></li>
            </ul>
          </li>
          <!-- <li>
            <a href="#">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - Right Sidebar</a></li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
              <li><a href="blog-grid-full-width.html"> Blog full width </a></li>
              <li><a href="single-post.html">Blog Details</a></li>
            </ul>
          </li> -->
          <li>
            <a href="contact.html">Contact Us</a>
          </li>
          @guest
          <li>
            <a href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">
              Signup
            </a>
            </li>
          @endguest
          @auth
          <li>
            <a>My Account</a>
            <ul class="dropdown">
              <li><a href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a></li>
              <li><a href="account-myads.html"><i class="lni-wallet"></i> My Ads</a></li>
              <li><a href="account-favourite-ads.html"><i class="lni-heart"></i> Favourite ads</a></li>
              <li><a href="account-archived-ads.html"><i class="lni-folder"></i> Archived</a></li>
              <li><a href="login.html"><i class="lni-lock"></i> Log In</a></li>
              <li><a href="signup.html"><i class="lni-user"></i> Signup</a></li>
              <li><a href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a></li>
              <li><a href="account-close.html"><i class="lni-close"></i>Account close</a></li>
            </ul>
          </li>
          @endauth
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->