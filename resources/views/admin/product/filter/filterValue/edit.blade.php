@extends('layouts.admin')

@section('content')

<div class="my-4">
  <div class="row">
    <div class="col-md-6">
      <h1 class="font-weight-bold">Create Filter</h1>
      {!! Form::model($filter,["method"=>"patch", "action"=>["FilterController@update",$filter->id]]) !!}
      <div class=" form-group pl-5">
        {!! Form::label("type", "Type:") !!}
        {!! Form::text("type", null, ["class"=>"form-control"]) !!}
      </div>

      <div class="form-group pl-5">
        {!! Form::submit("Update Filter", ["class"=>"btn btn-primary"]) !!}
      </div>
      {!! Form::close() !!}
    </div>



  </div>
</div>





@endsection