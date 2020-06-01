@extends('layouts.admin')

@section('content')

<h1 class="font-weight-bold">Create Products</h1>
{!! Form::open(["method"=>"POST","action"=>"ProductController@store","files"=>true]) !!}
{!! Form::hidden("parent_id") !!}
<div class="form-group">
  {!! Form::label("name", "Name:") !!}
  {!! Form::text("name", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("details", "Details:") !!}
  {!! Form::text("details", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("price", "Price:") !!}
  {!! Form::number("price", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("shipping_cost", "Shipping:") !!}
  {!! Form::number("shipping_cost", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("quantity", "Quantity:") !!}
  {!! Form::number("quantity", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("category_id", "Category") !!}
  {!! Form::select("category_id", [""=>"Choose Category"] + $categories, null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("url", "Photo:") !!}
  {!! Form::file("url", ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("description", "Description:") !!}
  {!! Form::textarea("description", null, ["class"=>"form-control","rows"=>4]) !!}
</div>
<div class="form-group">
  {!! Form::submit("Create", ["class"=>"btn btn-info"]) !!}
</div>


{!! Form::close() !!}

@endsection