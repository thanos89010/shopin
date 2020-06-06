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
                    <th>Προιοντα</th>
                    @endif
                    <th>Ονομα</th>
                    <th>Ποσοτητα</th>
                    <th>Τιμη</th>
                    @if (\Agent::isDesktop())
                    <th>Εκπτωση</th>
                    @endif
                    <th>Συνολικο</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( Cart::getContent() as $product)
                  {!! Form::open(["method"=>"post","action"=>"CartController@update"]) !!}
                  {!! Form::hidden("id", $product->id) !!}
                  <tr>
                    @if (\Agent::isDesktop())
                    <td><img height="50"
                        src="{{$product->attributes->url? $product->attributes->url: 'http://placehold.it/400x400'}}">
                    </td>
                    @endif
                    <td><a href="#">{{ $product->name }}</a></td>
                    <td>
                      {!! Form::number("quantity", $product->quantity, ["class"=>"form-control"]) !!}
                    </td>
                    <td>{{ $product->price }}</td>
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
                    <th colspan="5">Συνολο</th>
                    @endif
                    @if (\Agent::isMobile())
                    <th>Συνολο</th>
                    @endif
                    <th colspan="2">{{ Cart::getTotal()}}</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.table-responsive-->
            <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
              <div class="left"><a href="{{ route('home.categories') }}" class="btn btn-outline-secondary"><i
                    class="fa fa-chevron-left"></i>Συνεχιστε τις αγορες</a></div>
              <div class="right d-flex">
                {!! Form::open(["method"=>"post","action"=>"CartController@clear",\Cart::getContent()]) !!}
                <button class="btn btn-outline-secondary mr-2"><i class="fa fa-refresh"></i>Αδειασμα Καλαθιου</button>
                {!! Form::close() !!}
                <a href="{{ route('checkout.index') }}" type="submit" class="btn btn-primary">Προχωρήσετε στα στοιχεια
                  <i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /.box-->
          @include('partial.mightalso')
        </div>
        <!-- /.col-lg-9-->
        @include('cart.partial.summary-coupon')
        <!-- /.col-md-3-->
      </div>
    </div>
  </div>
</div>
@endsection