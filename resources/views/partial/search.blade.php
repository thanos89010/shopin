@foreach ($products as $product)
<a class="nav-link" href="{{ route('home.show',$product->id) }}">
  <li class="">

    <img height="80" src="{{ $product->image->url}}" />
    <h2 class="title">{{ $product->name }}</h2>
  </li>
</a>
@endforeach