@extends('layouts.app')

@section('content')
<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        @include('partial.breadcrumb')
        @include('partial.filter')
        <div class="col-lg-9 order-1 order-lg-2">
          <div id="productMain" class="row">
            <div class="col-md-6">
              <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                <div class="item"> <img src="{{ $product->image->url }}" alt="" class="img-fluid"></div>
                {{-- <div class="item"> <img src="{{ $product->image->url }}" alt="" class="img-fluid">
              </div>
              <div class="item"> <img src="{{ $product->image->url }}" alt="" class="img-fluid"></div> --}}
            </div>
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
          </div>
          <div class="col-md-6">
            <div class="box">
              <h1 class="text-center">{{ $product->name}}</h1>
              <p class="goToDescription"><a href="#details" class="scroll-to">Μεταβείτε στα χαρακτηριστικά</a></p>
              <p class="price">{{ $product->price}}€ <span class="lead">({{ $product->shipping_cost }}€
                  μεταφορικα)</span>
              </p>
              <p class="text-center buttons">
                @include('cart.partial.add-product')
                <a href="#" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add wishlist</a>
              </p>
            </div>
            <div data-slider-id="1" class="owl-thumbs">
              <button class="owl-thumb-item"><img src="img/detailsquare.jpg" alt="" class="img-fluid"></button>
              <button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="img-fluid"></button>
              <button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="img-fluid"></button>
            </div>
          </div>
        </div>
        <div id="details" class="box">
          <p></p>
          <h4>Χαρακτηριστικά</h4>
          <p>{{ $product->details}}</p>

          <h4>Περιγραφη</h4>
          <blockquote>
            <p><em>{{ $product->description}}</em></p>
          </blockquote>
          <hr>
          <div class="social">
            <h4>Show it to your friends</h4>
            <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#"
                class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i
                  class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
          </div>
        </div>
        @include('partial.mightalso')
        {{-- <div class="row same-height-row">
          <div class="col-md-3 col-sm-6">
            <div class="box same-height">
              <h3>Products viewed recently</h3>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="product same-height">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front"><a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                  </div>
                  <div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a>
                  </div>
                </div>
              </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
              <div class="text">
                <h3>Fur coat</h3>
                <p class="price">$143</p>
              </div>
            </div>
            <!-- /.product-->
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="product same-height">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                  </div>
                  <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a>
                  </div>
                </div>
              </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
              <div class="text">
                <h3>Fur coat</h3>
                <p class="price">$143</p>
              </div>
            </div>
            <!-- /.product-->
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="product same-height">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front"><a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                  </div>
                  <div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a>
                  </div>
                </div>
              </div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
              <div class="text">
                <h3>Fur coat</h3>
                <p class="price">$143</p>
              </div>
            </div>
            <!-- /.product-->
          </div>
        </div> --}}
      </div>
      <!-- /.col-md-9-->
    </div>
  </div>
</div>
</div>


@endsection