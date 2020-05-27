@extends('layouts.app')

@section('content')
<div id="main">
    <div id="content">
        <div class="container-fruid">
            <div class="row">
                <div class="col-md-12">
                    <div id="main-slider" class="owl-carousel owl-theme">
                        <div class="item"><img src="{{ asset('images/slide1.jpg') }}" alt="" class="img-fluid"></div>
                        <div class="item"><img src="{{ asset('images/slide2.jpg') }}" alt="" class="img-fluid"></div>
                        <div class="item"><img src="{{ asset('images/slide3.jpg') }}" alt="" class="img-fluid"></div>
                        <div class="item"><img src="{{ asset('images/slide4.jpg') }}" alt="" class="img-fluid"></div>
                    </div>
                    <!-- /#main-slider-->
                </div>
            </div>
        </div>
        <!--
    *** ADVANTAGES HOMEPAGE ***
    _________________________________________________________
    -->
        <div id="advantages">
            <div class="container">
                <div class="row mb-4 ">
                    <div class="col-md-4">
                        <div class="box clickable d-flex flex-column justify-content-between mb-0 h-100">
                            <div>
                                <img width="70" height="70" src="{{ asset('images/shop.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <h3 class="home-box"><a href="#">Δωρεάν υποστήριξη!</a></h3>
                            <p class="mb-0 home-box-bottom">Εξειδικευμένοι συνεργάτες μας προσφέρουν άμεση υποστήριξη
                                μέσω του Live Chat
                                στο shopin.gr!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                            <div> <img width="70" height="70" src="{{ asset('images/free-delivery.png') }}" alt=""
                                    class="img-fluid"> </div>
                            <h3 class="home-box mt-3"><a href="#">Δωρεάν παράδοση σε χιλιάδες προϊόντα</a></h3>
                            <p class="mb-0 home-box-bottom">Απόλαυσε δωρεάν παράδοση των προϊόντων σου για κάθε
                                παραγγελία άνω των 35€.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                            <div> <img width="70" height="70" src="{{ asset('images/free-phone-support.png') }}" alt=""
                                    class="img-thumbnail"> </div>
                            <h3 class="home-box  mt-3"><a href="#">Δωρεάν παραλαβή από κατάστημα</a></h3>
                            <p class="mb-0 home-box-bottom">Παράλαβε τα προϊόντα σου, τη μέρα και την ώρα που σε
                                βολεύει, σε ένα από τα
                                24 καταστήματά μας.</p>
                        </div>
                    </div>
                </div>
                <!-- /.row-->
            </div>
            <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
    *** HOT PRODUCT SLIDESHOW ***
    _________________________________________________________
    -->
        <div id="hot">
            <div class="box py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-0">Hot this week</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="product-slider owl-carousel owl-theme">
                    @foreach ($products as $product)
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="detail.html">
                                            <img height="80" src="{{ $product->image->url }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="detail.html">
                                            <img height="80" src="{{ $product->image->url }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="detail.html" class="invisible">
                                <img src="{{ $product->image->url }}" alt="" class="img-fluid">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="{{ route('home.show',$product->id) }}">{{ $product->name }} </a>
                                </h3>
                                <p class="price">
                                    <del>
                                    </del>${{ $product->price }}
                                </p>
                                @include('cart.add-product')
                            </div>
                            <!-- /.text-->
                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                        </div>
                        <!-- /.product-->
                    </div>

                    @endforeach
                    {{-- <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="detail.html"><img src="img/product2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                    <div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                </div>
                            </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="detail.html">White Blouse Armani</a></h3>
                                <p class="price">
                                    <del>$280</del>$143.00
                                </p>
                            </div>
                            <!-- /.text-->
                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                        </div>
                        <!-- /.product-->
                    </div>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="detail.html"><img src="img/product3.jpg" alt=""
                                                class="img-fluid"></a></div>
                                    <div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                </div>
                            </div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                <p class="price">
                                    <del></del>$143.00
                                </p>
                            </div>
                            <!-- /.text-->
                        </div>
                        <!-- /.product-->
                    </div>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="detail.html"><img src="img/product3.jpg" alt=""
                                                class="img-fluid"></a></div>
                                    <div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                </div>
                            </div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                <p class="price">
                                    <del></del>$143.00
                                </p>
                            </div>
                            <!-- /.text-->
                        </div>
                        <!-- /.product-->
                    </div>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="detail.html"><img src="img/product2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                    <div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                </div>
                            </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="detail.html">White Blouse Versace</a></h3>
                                <p class="price">
                                    <del></del>$143.00
                                </p>
                            </div>
                            <!-- /.text-->
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                        </div>
                        <!-- /.product-->
                    </div>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt=""
                                                class="img-fluid"></a></div>
                                    <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                </div>
                            </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="detail.html">Fur coat</a></h3>
                                <p class="price">
                                    <del></del>$143.00
                                </p>
                            </div>
                            <!-- /.text-->
                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                        </div>
                        <!-- /.product-->
                    </div>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="detail.html"><img src="img/product2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                    <div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                </div>
                            </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="detail.html">White Blouse Armani</a></h3>
                                <p class="price">
                                    <del>$280</del>$143.00
                                </p>
                            </div>
                            <!-- /.text-->
                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                            <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon-->
                        </div>
                        <!-- /.product-->
                    </div>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front"><a href="detail.html"><img src="img/product3.jpg" alt=""
                                                class="img-fluid"></a></div>
                                    <div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt=""
                                                class="img-fluid"></a></div>
                                </div>
                            </div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="text">
                                <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                <p class="price">
                                    <del></del>$143.00
                                </p>
                            </div>
                            <!-- /.text-->
                        </div>
                        <!-- /.product-->
                    </div> --}}
                    <!-- /.product-slider-->
                </div>
                <!-- /.container-->
            </div>
            <!-- /#hot-->
            <!-- *** HOT END ***-->
        </div>
        <!--
    *** GET INSPIRED ***
    _________________________________________________________
    -->
        <div class="container">
            <div class="row">
                <ul class="d-flex list-group list-group-horizontal ">
                    <div class="col-md-3 p-0 m-0 col-sm-6">
                        <li class="home-photo">
                            <a href="">
                                <span class="home-title">Top Επιλογες</span>
                                <img src="{{ asset('images/box1.jpg') }}" alt="Get inspired" class="img-fluid">
                                <span class="home-description">Τα πιο hot προϊόντα σε περιμένουν</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3 p-0 m-0 col-sm-6">
                        <li class="home-photo">
                            <a href="">
                                <span class="home-title">Top Επιλογες</span>
                                <img src="{{ asset('images/box2.jpg') }}" alt="Get inspired" class="img-fluid">
                                <span class="home-description">Τα πιο hot προϊόντα σε περιμένουν</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3 p-0 m-0 col-sm-6">
                        <li class="home-photo">
                            <a href="">
                                <span class="home-title">Top Επιλογες</span>
                                <img src="{{ asset('images/box3.jpg') }}" alt="Get inspired" class="img-fluid">
                                <span class="home-description">Τα πιο hot προϊόντα σε περιμένουν</span>
                            </a>
                        </li>
                    </div>
                    <div class="col-md-3 p-0 m-0 col-sm-6">
                        <li class="home-photo">
                            <a href="">
                                <span class="home-title">Top Επιλογες</span>
                                <img src="{{ asset('images/box4.jpg') }}" alt="Get inspired" class="img-fluid">
                                <span class="home-description">Τα πιο hot προϊόντα σε περιμένουν</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <!-- *** GET INSPIRED END ***-->
    <!--
    *** BLOG HOMEPAGE ***
    _________________________________________________________
    -->
    <div class="box text-center">
        <div class="container">
            <div class="col-md-12">
                <h3 class="text-uppercase">From our blog</h3>
                <p class="lead mb-0">What's new in the world of fashion? <a href="blog.html">Check our blog!</a>
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div id="blog-homepage" class="row">
                <div class="col-sm-6">
                    <div class="post">
                        <h4><a href="post.html">Fashion now</a></h4>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and
                                style</a></p>
                        <hr>
                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                            tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                            ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="post">
                        <h4><a href="post.html">Who is who - example blog post</a></h4>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                        </p>
                        <hr>
                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                            tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                            ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /#blog-homepage-->
        </div>
    </div>
    <!-- /.container-->
    <!-- *** BLOG HOMEPAGE END ***-->
</div>
</div>
@endsection