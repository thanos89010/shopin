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
              <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material
                  &amp; care and sizing</a></p>
              <p class="price">{{ $product->price}}</p>
              <p class="text-center buttons"><a href="basket.html" class="btn btn-primary"><i
                    class="fa fa-shopping-cart"></i> Add to cart</a><a href="basket.html"
                  class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
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
          <h4>Product details</h4>
          <p>{{ $product->details}}</p>
          <h4>Material &amp; care</h4>
          <ul>
            <li>Polyester</li>
            <li>Machine wash</li>
          </ul>
          <h4>Size &amp; Fit</h4>
          <ul>
            <li>Regular fit</li>
            <li>The model (height 5'8" and chest 33") is wearing a size S</li>
          </ul>
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
        <div class="row same-height-row">
          <div class="col-md-3 col-sm-6">
            <div class="box same-height">
              <h3>You may also like these products</h3>
            </div>
          </div>
          @include('partial.mightalso')
        </div>
        <div class="row same-height-row">
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
        </div>
      </div>
      <!-- /.col-md-9-->
    </div>
  </div>
</div>
</div>


@endsection