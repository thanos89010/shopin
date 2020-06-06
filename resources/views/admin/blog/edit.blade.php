@extends('layouts.admin')

@section('content')
<h1>Edit Blog</h1>

{!! Form::model($blog,["method"=>"patch","action"=>["BlogController@update",$blog->id],"files"=>true]) !!}
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
  {!! Form::submit("Update", ["class"=>"btn btn-info btn-lg"]) !!}
</div>
@endsection