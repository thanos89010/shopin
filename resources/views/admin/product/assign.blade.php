@extends('layouts.admin')

@section('content')
<h1>Assign Filter</h1>
<div class="my-4">
  <div class="row">
    <div class="col-md-6 ">

      <div class="form-group">
        {!! Form::open(["method"=>"post","action"=>"ProductController@assignStore"]) !!}
        {!! Form::hidden("product_id", $product->id) !!}
        {{-- {!! Form::label("type", "Filter") !!}
        {!! Form::select("type", [""=>"Choose Filter"] + $filters, null, ["class"=>"form-control "]) !!} --}}
      </div>
      <div class="form-group">
        {!! Form::label("filter_value_id", "Value") !!}
        {!! Form::select("filter_value_id", [""=>"Choose Value"] + $filtersValue, null, ["class"=>"form-control "]) !!}
      </div>
      <div class="form-group pl-5">
        {!! Form::submit("Assign", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>

  </div>
</div>




@endsection