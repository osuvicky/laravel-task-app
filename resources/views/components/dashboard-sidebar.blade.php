<!-- Start Content -->
<div id="content" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
            <aside>
              <div class="sidebar-box">
                <div class="user">
                  <figure>
                    <a href="#"><img src="assets/img/author/img1.html" alt=""></a>
                  </figure>
                  <div class="usercontent">
                    <h3>{{ Auth::user()->name }}</h3>
                    <h4>{{ Auth::user()->email }}</h4>
                  </div>
                </div>
                <nav class="navdashboard">
                  <ul>
                    <li>
                      <a class="active" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="lni-dashboard"></i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('profile.show') }}">
                        <i class="lni-cog"></i>
                        <span>Profile Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="account-myads.html">
                        <i class="lni-layers"></i>
                        <span>My Ads</span>
                      </a>
                    </li>
                    <li>
                      <a href="offermessages.html">
                        <i class="lni-envelope"></i>
                        <span>Offers/Messages</span>
                      </a>
                    </li>
                    <li>
                      <a href="payments.html">
                        <i class="lni-wallet"></i>
                        <span>Payments</span>
                      </a>
                    </li>
                    <li>
                      <a href="account-favourite-ads.html">
                        <i class="lni-heart"></i>
                        <span>My Favourites</span>
                      </a>
                    </li>
                    <li>
                      <a href="privacy-setting.html">
                        <i class="lni-star"></i>
                        <span>Privacy Settings</span>
                      </a>
                    </li>
                    <li>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                      <a href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        <i class="lni-enter"></i>
                        <span>Logout</span>
                      </a>
                      </form>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="widget">
                <h4 class="widget-title">Advertisement</h4>
                <div class="add-box">
                  <img class="img-fluid" src="assets/img/img1.html" alt="">
                </div>
              </div>
            </aside>
          </div>