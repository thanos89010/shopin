@extends('layouts.admin')

@section('content')
<h1>Create Blog</h1>

{!! Form::open(["method"=>"post","action"=>"BlogController@store","files"=>true]) !!}
{!! Form::hidden("user_id", Auth::user()->id) !!}
<div class="form-group">
  {!! Form::label("title", "Title:") !!}
  {!! Form::text("title", null, ["class"=>"form-control"]) !!}
</div>

<div class="form-group">
  {!! Form::label("body", "Body:") !!}
  {!! Form::textarea("body", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("url", "Photo") !!}
  {!! Form::file("url", ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::submit("Create", ["class"=>"btn btn-info btn-lg"]) !!}
</div>
@endsection