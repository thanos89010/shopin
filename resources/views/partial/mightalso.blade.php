@foreach ($mightAlsoLike as $product)
<div class="col-md-3 col-sm-6">
  <div class="product same-height">
    <div class="flip-container">
      <div class="flipper">
        <div class="front"><a href="detail.html"><img src="{{ $product->image->url }}" alt="" class="img-fluid"></a>
        </div>
        <div class="back"><a href="detail.html"><img src="{{ $product->image->url }}" alt="" class="img-fluid"></a>
        </div>
      </div>
    </div><a href="detail.html" class="invisible"><img src="{{ $product->image->url }}" alt="" class="img-fluid"></a>
    <div class="text">
      <h3>{{ $product->name }}</h3>
      <p class="price">{{ $product->price }}</p>
    </div>
  </div>
  <!-- /.product-->
</div>
@endforeach