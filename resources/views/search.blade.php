@extends('layouts.app')

@section('content')

<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="product-slider owl-carousel owl-theme">
          @foreach ($products as $product)
          <div class="item">
            <div class="product">
              <div class="flip-container">
                <div class="flipper">
                  <div class="front">
                    <a href="{{ route('home.show',$product->id) }}">
                      <img src="{{ $product->image->url }}" alt="" class="img-fluid">
                    </a>
                  </div>
                  <div class="back">
                    <a href="{{ route('home.show',$product->id) }}">
                      <img src="{{ $product->image->url }}" alt="" class="img-fluid">
                    </a>
                  </div>
                </div>
              </div>
              <a href="{{ route('home.show',$product->id) }}" class="invisible">
                <img src="{{ $product->image->url }}" alt="" class="img-fluid">
              </a>
              <div class="text d-flex justify-content-center  align-items-center flex-wrap flex-column">
                <h3>
                  <a href="{{ route('home.show',$product->id) }}">{{ $product->name }} </a>
                </h3>
                <p class="price">
                  <del>
                  </del>{{ $product->price }}€
                </p>
                <p class="buttons"><a href="{{ route('home.show',$product->id) }}"
                    class="btn btn-outline-secondary">Ριξε
                    μια ματια</a>
                </p>
              </div>
              <!-- /.product-->
            </div>
          </div>


          @endforeach
        </div>
      </div>
    </div>
  </div>


  @endsection