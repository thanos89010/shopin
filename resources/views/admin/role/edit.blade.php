@extends('layouts.admin')

@section('content')

<div class="my-4">
  <div class="row">
    <div class="col-md-6 ">
      <h1 class="font-weight-bold">Edit roles</h1>
      <div class=" form-group pl-5">
        {!! Form::model($role,["method"=>"patch", "action"=>["RoleController@update",$role->id]]) !!}
        {!! Form::label("name", "Name:") !!}
        {!! Form::text("name", null, ["class"=>"form-control"]) !!}

      </div>
      <div class="form-group pl-5 ">
        {!! Form::submit("Update Role", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>





@endsection