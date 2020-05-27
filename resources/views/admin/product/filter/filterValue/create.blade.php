@extends('layouts.admin')

@section('content')

<div class="my-4">
  <div class="row">
    <div class="col-md-6 ">
      <h1 class="font-weight-bold">Create Filter value</h1>
      {!! Form::open(["method"=>"post", "action"=>"FilterValueController@store"]) !!}
      {!! Form::hidden("filter_id", $value ) !!}
      <div class=" form-group pl-5">
        {!! Form::label("value", "Value:") !!}
        {!! Form::text("value", null, ["class"=>"form-control"]) !!}
      </div>

      <div class="form-group pl-5">
        {!! Form::submit("Create", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>
    <div class="col-md-4">
      <h1 class="font-weight-bold mb-4">View Filter value</h1>
      <ul>
        @foreach ($filtersValue as $filterValue)
        <li class="ml-4 h3 d-xl-flex  d-block ">

          <span class="d-flex flex-fill">
            {{ $filterValue->value }}
          </span>
          <div class="d-flex ">
            <a class=" btn btn-info mr-2" href="{{ route('filterValue.edit',$filterValue->id) }}">Edit filter Value</a>
            {!! Form::open(["method"=>"delete","action"=>["FilterValueController@destroy",$filterValue->id]]) !!}
            <a class="btn btn-danger" href="{{ route('filterValue.destroy',$filterValue->id) }}">Delete filter Value</a>
            {!! Form::close() !!}
          </div>
        </li>

        @endforeach
      </ul>



    </div>


  </div>
</div>





@endsection