@extends('layouts.app')

@section('content')
<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li aria-current="page" class="breadcrumb-item active">
                {{ $categories ? $categories->first()->name : "ss"  }}
              </li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-3">
          <!--
          *** MENUS AND FILTERS ***
          _________________________________________________________
          -->
          <div class="card sidebar-menu mb-4">
            <div class="card-header">
              <h3 class="h4 card-title">Categories</h3>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills flex-column category-menu">
                @foreach ($categoriesMenu as $category)
                @if (!$category->parent_id)
                <li><a href="{{ route('home.categories',$category->id) }}" class="nav-link">{{ $category->name }} <span
                      class="badge badge-secondary">42</span></a>
                  @endif
                  <ul class="list-unstyled">
                    @foreach ($category->children as $children)
                    <li><a href="{{ route('home.categories' ,$children->id) }}"
                        class="nav-link">{{ $children->name }}</a></li>
                    @endforeach
                  </ul>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          @foreach (App\Filter::all() as $filter)
          <div class="card sidebar-menu mb-4">
            <div class="card-header">
              <h3 class="h4 card-title">Brands <a href="#" class="btn btn-sm btn-danger pull-right"><i
                    class="fa fa-times-circle"></i> Clear</a></h3>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                @foreach (App\FilterValue::whereFilterId($filter->id)->get() as $values)

                <li class="list-group-item"><a
                    href="{{ route('home.filterRam',['include=productFilters',"filter[product_filters.id]=$values->id"]) }}"
                    type="checkbox">
                    {{ $values->value }}</a> (10)</li>
                @endforeach
              </ul>
            </div>
          </div>
          @endforeach
          <!-- *** MENUS AND FILTERS END ***-->
          <div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
        </div>
        <div class="col-lg-9">
          @if ($categories)
          <div class="box">
            <h1>{{ $categories->first()->name }}</h1>
            <p>{{ $categories->first()->body }}</p>
          </div>
          @endif
          <div class="box info-bar">
            <div class="row">
              <div class="col-md-12 col-lg-4 products-showing">Showing <strong>{{ count($products) }}</strong> of
                <strong>25</strong> products</div>
              <div class="col-md-12 col-lg-7 products-number-sort">
                <div class=" d-block d-lg-flex justify-content-between flex-column flex-md-row">
                  <div class="products-number"><strong>Show</strong><a href="#" class="btn btn-sm btn-primary">12</a><a
                      href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#"
                      class="btn btn-outline-secondary btn-sm">All</a><span>products</span>
                  </div>
                  <div class="dropdown show ">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Order by
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="{{ route('home.filter',[request()->id,'sort=price']) }}"> Φθινουσα
                        Σειρα</a>
                      <a class="dropdown-item" href="{{ route('home.filter',[request()->id,'sort=-price']) }}">Aυξουσα
                        Σειρα</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row products">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6">
              <div class="product">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ $product->image->url }}" alt=""
                          class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ $product->image->url }}" alt=""
                          class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ $product->image->url }}" alt=""
                    class="img-fluid"></a>
                <div class="text">
                  <h3><a href="detail.html">{{ $product->details }} </a></h3>
                  <p class="price">
                    <del></del>${{ $product->price }}
                  </p>
                  <p class="buttons"><a href="detail.html" class="btn btn-outline-secondary">View detail</a>
                    @include('cart.add-product')
                  </p>
                </div>
                <!-- /.text-->
              </div>
              <!-- /.product            -->
            </div>
            @endforeach
            <!-- /.products-->
          </div>
          <div class="pages">
            <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load
                more</a></p>
            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
              <ul class="pagination">
                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span
                      aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span
                      aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /.col-lg-9-->
      </div>
    </div>
  </div>
</div>
<!--
*** FOOTER ***
_________________________________________________________
-->
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <h4 class="mb-3">Pages</h4>
        <ul class="list-unstyled">
          <li><a href="text.html">About us</a></li>
          <li><a href="text.html">Terms and conditions</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="contact.html">Contact us</a></li>
        </ul>
        <hr>
        <h4 class="mb-3">User section</h4>
        <ul class="list-unstyled">
          <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
          <li><a href="register.html">Regiter</a></li>
        </ul>
      </div>
      <!-- /.col-lg-3-->
      <div class="col-lg-3 col-md-6">
        <h4 class="mb-3">Top categories</h4>
        <h5>Men</h5>
        <ul class="list-unstyled">
          <li><a href="category.html">T-shirts</a></li>
          <li><a href="category.html">Shirts</a></li>
          <li><a href="category.html">Accessories</a></li>
        </ul>
        <h5>Ladies</h5>
        <ul class="list-unstyled">
          <li><a href="category.html">T-shirts</a></li>
          <li><a href="category.html">Skirts</a></li>
          <li><a href="category.html">Pants</a></li>
          <li><a href="category.html">Accessories</a></li>
        </ul>
      </div>
      <!-- /.col-lg-3-->
      <div class="col-lg-3 col-md-6">
        <h4 class="mb-3">Where to find us</h4>
        <p><strong>Obaju Ltd.</strong><br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great
            Britain</strong></p><a href="contact.html">Go to contact page</a>
        <hr class="d-block d-md-none">
      </div>
      <!-- /.col-lg-3-->
      <div class="col-lg-3 col-md-6">
        <h4 class="mb-3">Get the news</h4>
        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
          egestas.</p>
        <form>
          <div class="input-group">
            <input type="text" class="form-control"><span class="input-group-append">
              <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
          </div>
          <!-- /input-group-->
        </form>
        <hr>
        <h4 class="mb-3">Stay in touch</h4>
        <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#"
            class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i
              class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a
            href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
      </div>
      <!-- /.col-lg-3-->
    </div>
    <!-- /.row-->
  </div>
  <!-- /.container-->
</div>

@endsection