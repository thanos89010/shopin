@extends('layouts.admin')

@section('style')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/productStyle.css') }}"">
<script src="//code.jquery.com/jquery-1.11.1.min.js"> </script> @endsection @section('content') <div class="container">
<div class="card">
  <div class="container-fliud">
    <div class="wrapper row">
      <div class="preview col-md-6">
        <div class="preview-pic tab-content">
          <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
        </div>
      </div>
      <div class="details col-md-6">
        <h3 class="product-title">{{ $product->name }}</h3>
        <div class="rating">
          <span class="review-no"><strong>{{ $product->quantity }}</strong> Pieces </span>
        </div>
        <p class="product-description">{{$product->description}}</p>
        <h4 class="price">current price: <span>${{ $product->price }}</span></h4>
        <p class="vote">{{ $product->details }}</p>
        <h5 class="sizes">{{$product->shipping_cost }}</h5><span> Shipping Cost </span>
        <div class="action my-4">
          <button class="add-to-cart btn btn-default" type="button">Edit Product</button>
          <button class="like btn btn-default" type="button">Delete Product</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection