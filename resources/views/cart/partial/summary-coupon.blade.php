<div class="col-lg-3">
  <div id="order-summary" class="box">
    <div class="box-header">
      <h3 class="mb-0">Συνολο Παραγγελίας</h3>
    </div>
    <p class="text-muted">Τα έξοδα αποστολής και τα επιπλέον έξοδα υπολογίζονται με βάση τις τιμές που έχετε εισαγάγει.
    </p>
    <div class="table-responsive">
      <table class="table">
        <tbody>
          <tr>
            <td>Υποσυνολο</td>
            <th>{{ Cart::getTotal()}}</th>
          </tr>
          <tr>
            <td>Μεταφορικα</td>
            <th>{{ $shipping }}</th>
          </tr>
          {{-- <tr>
            <td>Tax</td>
            <th>$0.00</th>
          </tr> --}}
          <tr class="total">
            <td>Συνολο</td>
            <th>{{ Cart::getTotal()+$shipping }}</th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h4 class="mb-0">Κουπονι Κωδικος</h4>
    </div>
    <p class="text-muted">Εάν διαθέτετε κωδικό κουπονιού, εισαγάγετέ τον στο παρακάτω πλαίσιο.</p>
    <form>
      <div class="input-group">
        <input type="text" class="form-control"><span class="input-group-append">
          <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
      </div>
      <!-- /input-group-->
    </form>
  </div>
</div>