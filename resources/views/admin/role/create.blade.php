@extends('layouts.admin')

@section('content')

<div class="my-4">
  <div class="row">
    <div class="col-md-6 ">
      <h1>Create roles</h1>
      <div class="form-group pl-5">
        {!! Form::open(["method"=>"post", "action"=>"RoleController@store"]) !!}
        {!! Form::label("name", "Name:") !!}
        {!! Form::text("name", null, ["class"=>"form-control"]) !!}

      </div>
      <div class="form-group pl-5">
        {!! Form::submit("Create Role", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>
    <div class="col-md-6">
      <h1>View Roles</h1>

      @foreach ($roles as $role)
      <h3 class="pl-5 my-5">{{ $role->name }}</h3>
      @endforeach


    </div>


  </div>
</div>





@endsection