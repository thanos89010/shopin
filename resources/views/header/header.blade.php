<!-- navbar-->
<header class="header mb-5">
  <!--
  *** TOPBAR ***
  _________________________________________________________
  -->
  <div id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a
            href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div>
        <div class="col-lg-6 text-center text-lg-right">
          <ul class="menu list-inline mb-0">
            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
            <li class="list-inline-item"><a href="register.html">Register</a></li>
            <li class="list-inline-item"><a href="contact.html">Contact</a></li>
            <li class="list-inline-item"><a href="#">Recently viewed</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Customer login</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email-modal" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password-modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and
              done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** TOP BAR END ***-->


  </div>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a href="index.html" class="navbar-brand home">
        <img height="80" src="{{ asset('images/index/logo.jpg') }}" alt="Obaju logo" class="d-none d-md-inline-block">
        <img height="50" src="{{ asset('images/index/logo.jpg') }}" alt="Obaju logo" class="d-inline-block d-md-none">
        <span class="sr-only">Shop in - go to homepage</span>
      </a>
      <div class="navbar-buttons">
        <button type="button" data-toggle="collapse" data-target="#navigation"
          class="btn btn-outline-secondary navbar-toggler">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-align-justify"></i>
        </button>
        <button type="button" data-toggle="collapse" data-target="#search"
          class="btn btn-outline-secondary navbar-toggler">
          <span class="sr-only">Toggle search</span>
          <i class="fa fa-search"></i>
        </button>
        <a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
      </div>
      <div id="navigation" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="#" class="nav-link active">Αρχική</a></li>
          {{-- <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown"
              data-delay="200" class="dropdown-toggle nav-link">Men<b class="caret"></b></a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                  <div class="col-md-6 col-lg-3">
                    <h5>Clothing</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <h5>Shoes</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <h5>Accessories</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <h5>Featured</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                    </ul>
                    <h5>Looks and trends</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </li> --}}
          <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown"
              data-delay="200" class="dropdown-toggle nav-link">Προϊόντα<b class="caret"></b></a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                  @foreach ($categories as $category)
                  <div class="col-md-6 col-lg-3">
                    <h5>{{ $category->name }}</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html"
                          class="nav-link">{{ $category->getParentsNames() }}</a></li>
                    </ul>
                  </div>

                  @endforeach

                  {{-- <div class="col-md-6 col-lg-3">
                    <h5>Shoes</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-3">
                    <h5>Accessories</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                    </ul>
                    <h5>Looks and trends</h5>
                    <ul class="list-unstyled mb-3">
                      <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                      <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                    </ul>
                  </div> --}}
                  {{-- <div class="col-md-6 col-lg-3">
                    <div class="banner"><a href="#"><img src="img/banner.jpg" alt="" class="img img-fluid"></a></div>
                    <div class="banner"><a href="#"><img src="img/banner2.jpg" alt="" class="img img-fluid"></a></div>
                  </div> --}}
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <div class="navbar-buttons d-flex justify-content-end">
          <!-- /.nav-collapse-->
          <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search"
            class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i
              class="fa fa-search"></i></a>
          <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.html"
              class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div id="search" class="collapse">
    <div class="container">
      <form role="search" class="ml-auto">
        <div class="input-group">
          <input type="text" placeholder="Search" class="form-control">
          <div class="input-group-append">
            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</header>