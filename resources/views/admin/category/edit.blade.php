@extends('layouts.admin')

@section('content')

<div class="my-4">
  <div class="row">
    <div class="col-md-6 ">
      <h1 class="font-weight-bold">Edit Category</h1>
      {!! Form::model($category,["method"=>"patch", "action"=>["CategoryController@update",$category->id]]) !!}
      <div class=" form-group pl-5">
        {!! Form::label("name", "Name:") !!}
        {!! Form::text("name", null, ["class"=>"form-control"]) !!}
      </div>
      <div class="form-group pl-5">
        {!! Form::label("body", "Body:",) !!}
        {!! Form::textarea("body", null, ["class"=>"form-control","rows"=>4]) !!}
      </div>
      <div class="form-group pl-5">
        {!! Form::label("parent_id", "Sub Category:") !!}
        {!! Form::select("parent_id", [""=>"Choose Category"] + $parentCategories, null, ["class"=>"form-control"])
        !!}
      </div>
      <div class="form-group pl-5 ">
        {!! Form::submit("Update Category", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>





@endsection