@extends('layouts.admin')

@section('style')

<link rel="stylesheet" href="{{ asset('/css/productStyle.css') }}"">


@endsection 


@section('content')
<h1>View Product</h1>
<div style=" height: 700px" class="d-flex align-items-center">
<div class=" container ">
  <div class="row ">
    <div class="col-lg-6">
      <div class="images">
        <img class=" ml-5" src="{{ $product->image->url }}" />
      </div>
      <div class=" slideshow-buttons">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
        <div class="four"></div>
      </div>
      <p class="desc m-5 ">{{ $product->details }}</p>
    </div>
    <div class="col-lg-6">
      <div class="product">
        <p class="desc  mt-5 text-danger">{{ $product->quantity }} pieces</p>
        <h1>{{ $product->name }}</h1>
        <h2 class="text-dark font-weight-bold my-4">${{ $product->price }} <span
            class="lead">(${{ $product->shipping_cost }}
            shipping)</span></h2>
        <p class="desc text-dark my-4">The Nike Epic React Flyknit foam cushioning is responsive yet light-weight,
          durable
          yet
          soft. This
          creates a sensation that not only enhances the feeling of moving forward, but makes running feel fun, too.</p>
        <div class=" buttons my-5">
          <a href="{{ route('product.edit',$product->id) }}" class=" mb-3 add-button bg-info">Edit Product</a>
          {!! Form::open(["method"=>"delete","action"=>["ProductController@destroy",$product->id]]) !!}
          <a href="{{ route('product.destroy',$product->id) }}" class="like add-button bg-danger text-white">Delete
            Product</a>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection