@extends('layouts.app')

@section('content')

<div id="all">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          @include('partial.breadcrumb')
        </div>
        <div class="col-lg-12">
          <div id="contact" class="box">
            <h1>Επικοινώνησε μαζί μας</h1>
            <p class="lead">Η Shopin, για να απαντήσει στα αιτήματα / ερωτήματά σου σχετικά με την παρακολούθηση της
              παραγγελίας σου, την ακύρωσής της, την αναζήτηση προϊόντος και την παροχή τεχνικής υποστήριξης, συλλέγει
              μόνο τα απολύτως απαραίτητα δεδομένα σου που καταχωρούνται στην ηλεκτρονική φόρμα «Επικοινώνησε μαζί μας»
              για την εξυπηρέτηση του ως άνω σκοπού.
            </p>

            <hr>
            <div class="row">
              <div class="col-md-4">
                <h3><i class="fa fa-map-marker"></i>Διεύθυνση</h3>
                <p>Μουσων 84 <br>Ευοσμος<br>56 121<br>Ελλάδα<br><strong>Θεσσαλονίκη</strong></p>
              </div>
              <!-- /.col-sm-4-->
              <div class="col-md-4 d-flex flex-column">
                <h3><i class="fa fa-phone"></i>Τηλέφωνα επικοινωνίας</h3>
                <span class="mb-2"><strong>2310 759-338</strong></span>
                <span><strong>698 456 9877</strong></span>
              </div>
              <!-- /.col-sm-4-->
              <div class="col-md-4">
                <h3><i class="fa fa-envelope"></i>Ηλεκτρονική υποστήριξη</h3>

                <ul>
                  <li><strong><a href="mailto:">shopin@gmail.com</a></strong></li>
                </ul>
              </div>
              <!-- /.col-sm-4-->
            </div>
            <!-- /.row-->
            <hr>
            <div id="map"></div>
            <hr>
            <h2>Φόρμα Επικοινωνίας</h2>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstname">Ονομα</label>
                    <input id="firstname" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lastname">Επιθετο</label>
                    <input id="lastname" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="subject">Θεμα</label>
                    <input id="subject" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="message">Μήνυμα</label>
                    <textarea id="message" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Αποστολη</button>
                </div>
              </div>
              <!-- /.row-->
            </form>
          </div>
        </div>
        <!-- /.col-md-9-->

      </div>
    </div>
  </div>
</div>

@endsection