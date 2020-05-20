<div class="col-lg-3">
  <div id="order-summary" class="box">
    <div class="box-header">
      <h3 class="mb-0">Order summary</h3>
    </div>
    <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
    <div class="table-responsive">
      <table class="table">
        <tbody>
          <tr>
            <td>Order subtotal</td>
            <th>${{ Cart::getTotal()}}</th>
          </tr>
          <tr>
            <td>Shipping and handling</td>
            <th>$10.00</th>
          </tr>
          {{-- <tr>
            <td>Tax</td>
            <th>$0.00</th>
          </tr> --}}
          <tr class="total">
            <td>Total</td>
            <th>$456.00</th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="box">
    <div class="box-header">
      <h4 class="mb-0">Coupon code</h4>
    </div>
    <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
    <form>
      <div class="input-group">
        <input type="text" class="form-control"><span class="input-group-append">
          <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
      </div>
      <!-- /input-group-->
    </form>
  </div>
</div>