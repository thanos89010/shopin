<!-- navbar-->
<header class="header mb-5">
  <!--
  *** TOPBAR ***
  _________________________________________________________
  -->
  <div id="top">
    <div class="container ">
      <div class="row">
        <div class="col-lg-7 offer mb-3 mb-lg-0">
          <h5 href="#" class="ml-1">Η σελιδα εχει δημιουργηθει καθαρα για εκπαιδευτικους σκοπους</η3>
            <p class="mt-1">Για περισσοτερες πληροφοριες για την λειτουργία του site μπειτε
              <u class="text-danger"> <a class="text-danger"
                  href="https://github.com/thanos89010/shopin"><strong>εδω</strong> </a>
                και διαβαστε το readme. </u>
            </p>
        </div>
        <div class="col-lg-5 text-center text-lg-right mt-2 ">
          <ul class="menu list-inline mb-0 ">
            @guest
            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Σύνδεση</a></li>
            @if (Route::has('register'))
            <li class="list-inline-item"><a href="{{ route('register') }}">Εγγραφή </a></li>
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
            <li class="list-inline-item">
              <a id="my-account" href="{{ route('home.account') }}" role="button">
                Ο λογαριασμος μου
              </a>
            </li>
            @endguest
            <li class="list-inline-item"><a href="{{ route('home.contact') }}">Επικοινωνία</a></li>
            <li class="list-inline-item"><a href="#">Σχετικα με εμας </a></li>
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
              <h5 class="modal-title">Φορμα Συνδεσης</h5>
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
                  {{ __('Συνδεση') }}
                </button>
              </p>
              <p class="text-center text-muted">Δεν ειστε γραμμενος?</p>
              <p class="text-center text-muted"><a href="register.html"><strong>Εγγραφη Τωρα </strong></a>
                <p class="text-center">Γράψου και δε θα χάσεις!</p>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- *** TOP BAR END ***-->


  </div>
  <nav class=" navbar navbar-expand-lg navbar-sticky-top">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand home">
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
            <a href="{{ route("home.categories") }}" data-toggle="dropdown" data-hover="dropdown" data-delay="200"
              class="dropdown-toggle nav-link">Προϊόντα<b class="caret"></b>
            </a>
            @include('header.nav-dropdown')
          </li>
        </ul>
        <div class="navbar-buttons d-flex justify-content-end">
          <!-- /.nav-collapse-->
          <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search"
            class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i
              class="fa fa-search"></i></a>
          @if (!\Cart::isEmpty())
          <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a
              href="{{ route('cart.index') }}" class="btn btn-primary navbar-btn"><i
                class="fa fa-shopping-cart"></i><span>{{ Cart::getTotalQuantity()}} Προιοντα στο καλαθι</span></a>
          </div>
          @endif

        </div>
      </div>
    </div>
  </nav>
  <div id="search" class="collapse">
    <div class="container d-flex">
      {!! Form::open(["method"=>"get","action"=>"HomeController@search","class"=>"ml-auto input-form"]) !!}
      <div class="input-group flex-column">
        <div class="d-flex">
          <input autocomplete="off" type="text" name="q" value="{{ request()->input("q") }}" id="Input-search"
            placeholder="Search" class="form-control">

          <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

        </div>
        {{-- test --}}


        <ul class="dropdown-menu" id="results"></ul>

        {{-- test --}}

      </div>
      {!! Form::close() !!}
      </form>
    </div>
  </div>
</header>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  $("#Input-search").on("input", function() {
				var key = $("#Input-search").val();
				if (key) {
					$("#results").load("/test?key="+ encodeURI(key));
					// $("#results").load("search.php?key=" + encodeURI(key));
					$("#search").addClass("open");
					$("#results").addClass("open");
				} else {
					$("#results").html("");
					$("#search").removeClass("open");
					$("#results").removeClass("open");
				}
			});
</script>