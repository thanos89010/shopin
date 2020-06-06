<!--
    *** FOOTER ***
    _________________________________________________________
    -->
<div id="footer">
    <div class="container">
        <div class="row">
            @guest
            <div class="col-lg-3 col-md-6">
                <hr>
                <h4 class="mb-3">User section</h4>
                <ul class="list-unstyled">
                    <li><a href="{{ route('login') }}" data-toggle="modal" data-target="#login-modal">Login</a></li>
                    <li><a href="{{ route('register') }}">Regiter</a></li>
                </ul>

            </div>
            @endguest
            @auth
            <div class="col-lg-3 col-md-6">
                <h3>Καλώς ορίσατε</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="background: none">
                        <a id="my-account " href="{{ route('home.account') }}" role="button">
                            <span class="text-dark">Ο λογαριασμος μου</span>
                        </a>
                    </li>
                    <li class="list-group-item" style="background: none">
                        <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-3">Κατηγοριες</h4>
                @foreach (App\Category::whereNull('parent_id')->get() as $category)
                <ul class="list-unstyled">
                    <h5>{{ $category->name }}</h5>
                    @foreach ($category->children as $children)
                    <li><a href="category.html">{{ $children->name }}</a></li>
                    @endforeach
                </ul>
                @endforeach
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-2 col-md-6">
                <h4 class="mb-3">Βρειτε μας </h4>
                <p><strong>Μουσων 84</strong><br>Ευοσμος<br>Θεσσαλονικη<br>
                    56 121<br>Ελλαδα<br></p><a href="{{ route('home.contact') }}">Επικοινωνια</a>
                <hr class="d-block d-md-none">
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-4 col-md-6">
                @include('partial.newslatter')
                <hr>
                <h4 class="mb-3">Mεινε Συντονισμενος</h4>
                <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#"
                        class="twitter external"><i class="fa fa-twitter"></i></a><a href="#"
                        class="instagram external"><i class="fa fa-instagram"></i></a><a href="#"
                        class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#"
                        class="email external"><i class="fa fa-envelope"></i></a></p>
            </div>
            <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
    </div>
    <!-- /.container-->
</div>
<!-- /#footer-->
<!-- *** FOOTER END ***-->


<!--
  *** COPYRIGHT ***
  _________________________________________________________
  -->
<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-2 mb-lg-0">
                <p class="text-center text-lg-left">©2020 Shopin</p>
            </div>
            <div class="col-lg-6">
                <p class="text-center text-lg-right">Template design by <a href="">Ταλαριδης Αθανασιος</a>
                    <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
                </p>
            </div>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END ***-->