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
            @guest
            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
            @if (Route::has('register'))
            <li class="list-inline-item"><a href="{{ route('register') }}">Register</a></li>
            @endif
            @else
            <li class="list-inline-item">
              <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->first_name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
            <li class="list-inline-item"><a href="contact.html">Contact</a></li>
            <li class="list-inline-item"><a href="#">Recently viewed</a></li>
          </ul>
          {{-- <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->first_name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
          </ul> --}}
        </div>
      </div>
    </div>
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Customer login</h5>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                  aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <p class="text-center">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>
              </p>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy
                and
                done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </form>
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
          <li class="nav-item dropdown menu-large">
            <a href="{{ route("home.categories") }}"  data-toggle="dropdown" data-hover="dropdown"
              data-delay="200" class="dropdown-toggle nav-link">Προϊόντα<b class="caret"></b>
            </a>
            @include('header.nav-dropdown')
          </li>
        </ul>
        <div class="navbar-buttons d-flex justify-content-end">
          <!-- /.nav-collapse-->
          <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search"
            class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i
              class="fa fa-search"></i></a>
          <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a
              href="{{ route('cart.index') }}" class="btn btn-primary navbar-btn"><i
                class="fa fa-shopping-cart"></i><span>{{ Cart::getTotalQuantity()}} items in cart</span></a>
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