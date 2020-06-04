@extends('layouts.app')

@section('content')

<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          @include('partial.breadcrumb')
        </div>
        <div class="col-lg-3">
          <!--
          *** CUSTOMER MENU ***
          _________________________________________________________
          -->
          <div class="card sidebar-menu">
            <div class="card-header">
              <h3 class="h4 card-title">Customer section</h3>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills flex-column">.
                <a href="{{ route('home.account') }}" class="nav-link active"><i class="fa fa-list"></i> My orders</a>
                {{-- <a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a>
                <a href="customer-account.html" class="nav-link"><i class="fa fa-user"></i> My account</a>
                <a href="index.html" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a> --}}
              </ul>
            </div>
          </div>
          <!-- /.col-lg-3-->
          <!-- *** CUSTOMER MENU END ***-->
        </div>
        <div id="customer-orders" class="col-lg-9">
          <div class="box">
            <h1>Παραγγελίες</h1>
            <p class="lead">Οι παραγγελίες σας</p>
            <p class="text-muted">Εάν έχετε ερωτήσεις, μη διστάσετε να <a
                href="{{ route('home.contact') }}">επικοινωνήσετε</a> μαζί μας, το κέντρο
              εξυπηρέτησης πελατών μας λειτουργεί για σας 24/7</p>
            <hr>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>item</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                  <tr>
                    <th># {{ $order->id }}</th>
                    <td>{{ $order->created_at->format('d.m.Y') }}</td>
                    <td>{{$order->total}}&euro;</td>
                    <td><span class="badge badge-info h6">{{ $order->item_count }}</span></td>
                    <td><a href="{{ route('home.order',$order->id) }}" class="btn btn-primary btn-sm">View</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection