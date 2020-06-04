@extends('layouts.app')

@section("content")
<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li aria-current="page" class="breadcrumb-item"><a href="#">My orders</a></li>
              <li aria-current="page" class="breadcrumb-item active">Order # 1735</li>
            </ol>
          </nav>
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
              <ul class="nav nav-pills flex-column"><a href="{{ route('home.account') }}" class="nav-link active"><i
                    class="fa fa-list"></i> My orders</a>

            </div>
          </div>
          <!-- /.col-lg-3-->
          <!-- *** CUSTOMER MENU END ***-->
        </div>
        <div id="customer-order" class="col-lg-9">
          <div class="box">
            <h1>Order #{{ $order->id }}</h1>
            <p class="lead">Η Παραγγελία #{{ $order->id }} εγινε
              <strong>{{ $order->created_at->format('d.m.Y') }}</strong>
              και αυτή τη στιγμή <strong> προετοιμάζεται..</strong></p>
            <p class="text-muted">Εάν έχετε ερωτήσεις, μη διστάσετε να <a
                href="{{ route('home.contact') }}">επικοινωνήσετε</a> μαζί μας, το κέντρο
              εξυπηρέτησης πελατών μας λειτουργεί για σας 24/7</p>
            <hr>
            <div class="table-responsive mb-4">
              <table class="table">
                <thead>
                  @php
                  $total = 0;
                  $shipping = 0 ;
                  @endphp
                  @foreach ($ordersItem as $orderItem)
                  <tr>
                    <th colspan="2">Προϊόν</th>
                    <th>Ποσότητα</th>
                    <th>Τιμη</th>
                    @if ($orderItem->product->discount_price)
                    <th>Εκπτωση</th>
                    @endif
                    <th>Συνολο</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#"><img height="60" src="{{ $orderItem->product->image->url }}"
                          alt="White Blouse Armani"></a></td>
                    <td><a href="#">{{ $orderItem->product->name }}</a></td>
                    <td>{{ $orderItem->quantity }}</td>
                    <td>{{ $orderItem->product->price }} €</td>
                    @if ($orderItem->product->discount_price) €
                    <td>$0.00</td>
                    @endif
                    <td>{{$orderItem->price }} €</td>
                    @php
                    $total += $orderItem->price;
                    $shipping += $orderItem->product->shipping_cost;
                    @endphp
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="5" class="text-right">Υποσυνολο</th>
                    <th>{{ $total }}</th>
                  </tr>
                  <tr>
                    <th colspan="5" class="text-right">Μεταφορικα</th>
                    <th>{{ $shipping  }}</th>
                  </tr>
                  <tr>
                    <th colspan="5" class="text-right">Συνολο</th>
                    <th>{{ $total + $shipping   }}</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.table-responsive-->
            <div class="row addresses">
              <div class="col-lg-12">
                <h2>Διεύθυνση Αποστολής</h2>
                <p>
                  {{ $order->FullName}}<br>
                  {{ $order->phone_number }}<br>
                  {{ $order->address }}<br>
                  {{ $order->post_code }}<br>
                  {{ $order->city }}<br>
                  {{ $order->country }}<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection