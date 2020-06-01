@extends('layouts.admin')

@section('content')

<div class="my-4">
  <div class="row">
    <div class="col-md-6 ">
      <h1 class="font-weight-bold">Create Category</h1>
      {!! Form::open(["method"=>"post", "action"=>"CategoryController@store"]) !!}
      <div class=" form-group pl-5">
        {!! Form::label("name", "Name:") !!}
        {!! Form::text("name", null, ["class"=>"form-control"]) !!}
      </div>
      <div class="form-group pl-5">
        {!! Form::label("body", "Body:") !!}
        {!! Form::textarea("body", null, ["class"=>"form-control","rows"=>4]) !!}
      </div>
      <div class="form-group pl-5">
        {!! Form::label("parent_id", "Sub Category:") !!}
        {!! Form::select("parent_id", [""=>"Choose Category"] + $parentCategories, null, ["class"=>"form-control"])
        !!}
      </div>
      <div class="form-group pl-5">
        {!! Form::submit("Create Role", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>
    <div class="col-md-4">
      <h1 class="font-weight-bold mb-4">View Category</h1>
      <ol>
        @foreach ($categories as $category)
        <li class="ml-4 h3 d-xl-flex  d-block ">
          <span class="d-flex flex-fill">
            {{ $category->name }}
          </span>
          <div class="d-flex ">
            <a class=" btn btn-info mr-2" href="{{ route('category.edit',$category->id) }}">Edit category</a>
            {!! Form::open(["method"=>"delete","action"=>["CategoryController@destroy",$category->id]]) !!}
            <a class="btn btn-danger" href="{{ route('category.destroy',$category->id) }}">Delete category</a>
            {!! Form::close() !!}
          </div>
        </li>

        @endforeach
      </ol>



    </div>


  </div>
</div>





@endsection