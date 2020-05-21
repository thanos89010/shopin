@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
  <h1 class="display-4 mb-4">Σας ευχαριστούμε για την παραγγελία</h1>
  <p class="lead"><strong>Παρακαλω ελέγξτε το email </strong> σας εχει σταλει ειμαι με πληροφορίες για την παραγγελία σας</p>
  <hr>
  <p>
    Αντιμετωπιζετε προβλημα? <a href="">επικοινωνηστε μαζι μας</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{ route('home') }}" role="button">συνεχεια στο Shopin</a>
  </p>
</div>
    
@endsection