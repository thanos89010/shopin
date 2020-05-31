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
              <li class="breadcrumb-item"><a href="#">Αρχικη</a></li>
              <li aria-current="page" class="breadcrumb-item active">Checkout - Διεύθυνση</li>
            </ol>
          </nav>
        </div>
        <div id="checkout" class="col-lg-9">
          <div class="box">
            @include('cart.checkout.create')
          </div>
          <!-- /.box-->
        </div>
        <!-- /.col-lg-9-->
        @include('cart.partial.summary-coupon')
        <!-- /.col-lg-3-->
      </div>
    </div>
  </div>
</div>
<!-- /.all-->

@endsection