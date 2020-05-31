{!! Form::open(["method"=>"post","action"=>"CheckoutController@store"]) !!}
<h1>Checkout </h1>
<div class="nav flex-column flex-md-row nav-pills text-center">
  <a href="checkout1.html" class="nav-link flex-sm-fill text-sm-center active">
    <i class="fa fa-map-marker"></i>
    Address</a>
</div>
<div class="content py-3">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label("first_name", "Ονομα") !!}
        {!! Form::text("first_name", Auth::user()->first_name, ["class"=>"form-control"]) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label("last_name", "Επίθετο") !!}
        {!! Form::text("last_name", Auth::user()->last_name, ["class"=>"form-control"]) !!}
      </div>
    </div>
  </div>
  <!-- /.row-->
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label("country", "Χώρα") !!}
        {!! Form::text("country", "Ελλαδα", ["class"=>"form-control"]) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label("address", "Διεύθυνση ") !!}
        {!! Form::text("address", null, ["class"=>"form-control"]) !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label("city", "Πόλη") !!}
        {!! Form::text("city", null, ["class"=>"form-control"]) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label("email", "E-mail ") !!}
        {!! Form::text("email", Auth::user()->email, ["class"=>"form-control"]) !!}
      </div>
    </div>
  </div>
  <!-- /.row-->
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="form-group">
        {!! Form::label("phone_number", "Τηλέφωνο ") !!}
        {!! Form::number("phone_number", null, ["class"=>"form-control"]) !!}
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="form-group">
        {!! Form::label("post_code", "Τ.Κ") !!}
        {!! Form::number("post_code", null, ["class"=>"form-control"]) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label("notes", "Πληροφορίες") !!}
        {!! Form::textarea("notes", null, ["class"=>"form-control","rows"=>"5"]) !!}
      </div>
    </div>
    {!! Form::hidden("user_id", Auth::user()->id) !!}
    {!! Form::hidden("total", Cart::getTotal()) !!}
    {!! Form::hidden("item_count", Cart::getTotalQuantity()) !!}


  </div>
  <!-- /.row-->
</div>
<div class="box-footer d-flex justify-content-between"><a href="{{ route('cart.index') }}"
    class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Επιστροφη στο καλαθι</a>
  <button type="submit" class="btn btn-primary">Παραγγελία<i class="fa fa-chevron-right"></i></button>
</div>
{!! Form::close() !!}