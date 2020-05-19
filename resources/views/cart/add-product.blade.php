{!! Form::open(["method"=>"post","action"=>"CartController@store"]) !!}
{!! Form::hidden("id", $product->id ) !!}
{!! Form::hidden("name", $product->name ) !!}
{!! Form::hidden("details", $product->details ) !!}
{!! Form::hidden("description", $product->description ) !!}
{!! Form::hidden("price", $product->price ) !!}
{!! Form::hidden("discount_price", $product->discount_price) !!}
{!! Form::hidden("shipping_cost", $product->shipping_cost ) !!}
{!! Form::hidden("quantity", 1 )!!}
<button class="btn btn-secondary">
  <i class="fa fa-shopping-cart"></i>
  <span>add to cart</span>
</button>
{!! Form::close() !!}