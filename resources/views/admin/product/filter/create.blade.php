@extends('layouts.admin')

@section('content')

<div class="my-4">
  <div class="row">
    <div class="col-md-6 ">
      <h1 class="font-weight-bold">Create Filter</h1>
      {!! Form::open(["method"=>"post", "action"=>"FilterController@store"]) !!}
      <div class=" form-group pl-5">
        {!! Form::label("type", "Type:") !!}
        {!! Form::text("type", null, ["class"=>"form-control"]) !!}
      </div>

      <div class="form-group pl-5">
        {!! Form::submit("Create", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>
    <div class="col-md-4">
      <h1 class="font-weight-bold mb-4">View Filter</h1>
      <ol>
        @foreach ($filters as $filter)
        <li class="ml-4 h3 d-xl-flex  d-block ">
          <span class="d-flex flex-fill">
            {{ $filter->type }}
          </span>
          <div class="d-flex ">
            <a class=" btn btn-success mr-2" href="{{ route('filterValue.create',$filter->id) }}">Create filter
              Value</a>
            <a class=" btn btn-info mr-2" href="{{ route('filter.edit',$filter->id) }}">Edit filter</a>
            {!! Form::open(["method"=>"delete","action"=>["FilterController@destroy",$filter->id]]) !!}
            <a class="btn btn-danger" href="{{ route('filter.destroy',$filter->id) }}">Delete filter</a>
            {!! Form::close() !!}
          </div>
        </li>

        @endforeach
      </ol>



    </div>


  </div>
</div>





@endsection