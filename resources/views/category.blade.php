@extends('layouts.app')

@section('content')
<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        @include('partial.breadcrumb')
        @include('partial.filter')
        <div class="col-lg-9">
          @if ($categories)
          <div class="box">
            <h1>{{ $categories->first()->name }}</h1>
            <p>{{ $categories->first()->body }}</p>
          </div>
          @endif
          <div class="box info-bar">
            <div class="row">
              <div class="col-md-12 col-lg-4 products-showing">Εμφανιση
                @if ($products )
                <strong>{{ count($products) }}</strong> Απο
                @else
                <strong>0</strong> Απο
                @endif
                <strong>25</strong> Προιοντα</div>
              <div class="col-md-12 col-lg-7 products-number-sort">
                <div class=" d-block d-lg-flex justify-content-between flex-column flex-md-row">
                  <div class="products-number"><strong>Εμφανιση</strong><a href="#"
                      class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a
                      href="#" class="btn btn-outline-secondary btn-sm">Ολα</a><span>Προιοντα</span>
                  </div>
                  <div class="dropdown show ">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ταξινόμηση κατά
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="{{ route('home.filter', [request()->id,'sort=price']) }}"> Φθινουσα
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
            @if ($products )
            @foreach($products as $product)
            @if(request()->exists("include"))
            @php
            $product = $product->first();
            @endphp
            @endif
            <div class="col-lg-4 col-md-6">
              <div class="product ">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="{{ $product->image->url }}" alt=""
                          class="img-fluid"></a></div>
                    <div class="back"><a href="detail.html"><img src="{{ $product->image->url }}" alt=""
                          class="img-fluid"></a></div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="{{ $product->image->url }}" alt=""
                    class="img-fluid"></a>
                <div class="text d-flex flex-column align-items-center ">
                  <h3>{{ $product->name }}</h3>
                  <h3><a href="detail.html">{{ $product->details }} </a></h3>
                  <p class="price">
                    <del></del>${{ $product->price }}
                  </p>

                  <p class="buttons"><a href="{{ route('home.show',$product->id) }}"
                      class="btn btn-outline-secondary">Ριξε μια ματια</a>
                    @if (\Auth::check())
                    @include('cart.partial.add-product')
                    @endif
                  </p>
                </div>
                <!-- /.text-->
              </div>
              <!-- /.product            -->
            </div>
            @endforeach
            @endif
            <!-- /.products-->
          </div>
          <div class="pages">
            <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i>Εμφανισε
                Περισσοτερα</a></p>
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

@endsection