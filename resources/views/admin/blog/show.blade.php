@extends('layouts.admin')

@section('style')

<link rel="stylesheet" href="{{ asset('/css/productStyle.css') }}"">


@endsection 


@section('content')
<h1>View Blog</h1>
<div style=" height: 300px" class="d-flex align-items-center">
<div class=" container p-4">
  <div class="row ">
    <div class="col-lg-5">
      <div class="images">
        <img class=" ml-5" src="{{ $blog->image->url }}" />
      </div>
    </div>
    <div class="col-lg-7">
      <div class="product">
        <p class="desc  mt-5 text-danger">Author {{ $blog->user->first_name }}</p>
        <h1>{{ $blog->title }}</h1>
        <p class="desc text-dark my-4">{{$blog->body}}</p>
        <div class="d-flex justify-content-around">
          <p class="h5">Create:{{ $blog->created_at->diffForHumans() }}</p>
          <p class="h5">Update:{{ $blog->updated_at->diffForHumans() }}</p>
        </div>
        <div class=" buttons my-5">
          {{-- <a href="{{ route('product.edit',$product->id) }}" class=" mb-3 add-button bg-info">Edit Product</a>
          {!! Form::open(["method"=>"delete","action"=>["ProductController@destroy",$product->id]]) !!}
          <a href="{{ route('product.destroy',$product->id) }}" class="like add-button bg-danger text-white">Delete
            Product</a>
          {!! Form::close() !!} --}}
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection