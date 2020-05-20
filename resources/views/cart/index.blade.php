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
              <li class="breadcrumb-item"><a href="{{ route("home") }}">Αρχική</a></li>
              <li aria-current="page" class="breadcrumb-item active">Καλάθι</li>
            </ol>
          </nav>
        </div>
        <div id="basket" class="col-lg-9">
          <div class="box">
            <h1>Καλάθι</h1>
            <p class="text-muted">Εχετε {{ Cart::getTotalQuantity() }} προϊόντα στο καλάθι σας </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    @if (\Agent::isDesktop())
                    <th>Product</th>
                    @endif
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                    @if (\Agent::isDesktop())
                    <th>Discount</th>
                    @endif

                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( Cart::getContent() as $product)
                  {!! Form::open(["method"=>"post","action"=>"CartController@update"]) !!}
                  {!! Form::hidden("id", $product->id) !!}
                  <tr>
                    @if (\Agent::isDesktop())
                    <td><a href="#"><img src="https://via.placeholder.com/100" alt="White Blouse Armani"></a></td>
                    @endif
                    <td><a href="#">{{ $product->name }}</a></td>
                    <td>
                      {!! Form::number("quantity", $product->quantity, ["class"=>"form-control"]) !!}
                    </td>
                    <td>${{ $product->price }}</td>
                    @if (\Agent::isDesktop())
                    <td>{{ $product->discount }}</td>
                    @endif
                    <td>{{ Cart::get($product->id)->getPriceSum() }}</td>
                    <td><button class="btn btn-outline-secondary btn-sm "><i class=" fa fa-refresh"></i></button></td>
                    {!! Form::close() !!}
                    {!! Form::open(["method"=>"post","action"=>["CartController@destroy",$product->id]]) !!}
                    <td><button class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash-o"></i></button></td>
                    {!! Form::close() !!}
                  </tr>

                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    @if (\Agent::isDesktop())
                    <th colspan="5">Total</th>
                    @endif
                    @if (\Agent::isMobile())
                    <th>Total</th>
                    @endif
                    <th colspan="2">${{ Cart::getTotal()}}</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.table-responsive-->
            <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
              <div class="left"><a href="category.html" class="btn btn-outline-secondary"><i
                    class="fa fa-chevron-left"></i> Continue shopping</a></div>
              <div class="right d-flex">
                {!! Form::open(["method"=>"post","action"=>"CartController@clear",\Cart::getContent()]) !!}
                <button class="btn btn-outline-secondary mr-2"><i class="fa fa-refresh"></i> clear cart</button>
                {!! Form::close() !!}
                <a href="{{ route('checkout.index') }}" type="submit" class="btn btn-primary">Proceed to checkout <i
                    class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.box-->
          <div class="row same-height-row">
            <div class="col-lg-3 col-md-6">
              <div class="box same-height">
                <h3>You may also like these products</h3>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="product same-height">
                <div class="flip-container">
                  <div class="flipper">
                    <div class="front"><a href="detail.html"><img src="" alt="" class="img-fluid"></a>
                    </div>
                    <div class="back"><a href="detail.html"><img src="" alt="" class="img-fluid"></a>
                    </div>
                  </div>
                </div><a href="detail.html" class="invisible"><img src="" alt="" class="img-fluid"></a>
                <div class="text">
                  <h3>Fur coat</h3>
                  <p class="price">$143</p>
                </div>
              </div>
              <!-- /.product-->
            </div>
          </div>
        </div>
        <!-- /.col-lg-9-->
        @include('cart.summary-coupon')
        <!-- /.col-md-3-->
      </div>
    </div>
  </div>
</div>
@endsection