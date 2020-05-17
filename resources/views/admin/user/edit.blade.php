@extends('layouts.admin')



@section('content')
<h1 class="font-weight-bold">Edit Users</h1>

{!! Form::model($user,["method"=>"patch","action"=>["UserController@update",$user->id]]) !!}
<div class="form-group">
  {!! Form::label("first_name", "First Name") !!}
  {!! Form::text("first_name", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("user_name", "User Name") !!}
  {!! Form::text("user_name", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("last_name", "Last Name") !!}
  {!! Form::text("last_name", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("email", "Email") !!}
  {!! Form::email("email", null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::label("password", "Password") !!}
  {!! Form::password("password", ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
  {!! Form::submit("Create User", ["class"=>"btn btn-info"]) !!}
</div>

{!! Form::close() !!}

@endsection