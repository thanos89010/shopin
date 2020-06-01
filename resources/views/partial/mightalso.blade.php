<div class="col-md-12">
  <div class="box same-height">
    <h3>Μπορει να σας αρεσει επισης </h3>
  </div>
</div>
<div class="row same-height-row">

  @foreach ($mightAlsoLike as $product)
  <div class="col-md-3 col-sm-6">
    <div class="product same-height d-flex flex-column align-items-center ">
      <div class="flip-container">
        <div class="flipper ">
          <div class="front"><a href="{{ route('home.show',$product->id) }}"><img src="{{ $product->image->url }}"
                alt="" class="img-fluid"></a>
          </div>
          <div class="back"><a href="{{ route('home.show',$product->id) }}"><img src="{{ $product->image->url }}" alt=""
                class="img-fluid"></a>
          </div>
        </div>
      </div><a href="{{ route('home.show',$product->id) }}" class="invisible"><img src="{{ $product->image->url }}"
          alt="" class="img-fluid"></a>
      <div class="text">
        <h3>{{ $product->name }}</h3>
        <p class="price">{{ $product->price }}</p>
      </div>
      @include('cart.partial.add-product')
    </div>
    <!-- /.product-->
  </div>
  @endforeach
</div>