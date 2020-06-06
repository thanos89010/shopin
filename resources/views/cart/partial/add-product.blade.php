{!! Form::open(["method"=>"post","action"=>"CartController@store" , "class"=>"d-inline-flex"]) !!}

{!! Form::hidden("id", $product->id ) !!}
{!! Form::hidden("name", $product->name ) !!}
{!! Form::hidden("url", $product->image->url ) !!}
{!! Form::hidden("details", $product->details ) !!}
{!! Form::hidden("description", $product->description ) !!}
{!! Form::hidden("price", $product->price ) !!}
{!! Form::hidden("discount_price", $product->discount_price) !!}
{!! Form::hidden("shipping_cost", $product->shipping_cost ) !!}
{!! Form::hidden("quantity", 1 )!!}

<button class="d-flex align-items-center btn btn-primary text-center">
  <i class="fa fa-shopping-cart mr-2"></i>
  <span>Προσθηκη</span>
</button>

{!! Form::close() !!}