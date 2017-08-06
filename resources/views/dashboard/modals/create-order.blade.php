<div class="modal fade" id="new-order-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="new-order-form">
        <div class="modal-header">
          <h5 class="modal-title">New Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="first_name" class="form-control" id="customer-first-name" placeholder="First name">
          </div>
          <div class="form-group">
            <input type="text" name="last_name" class="form-control" id="customer-last-name" placeholder="Last name">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="customer-email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" id="customer-phone" placeholder="Phone">
          </div>
          <div class="form-group">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="add-order-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Add Order Option
              </button>
              <div class="dropdown-menu add-order-option-dropdown" aria-labelledby="add-order-option">
                <a href="#" class="dropdown-item order-option" href="#">Whites</a>
                <a href="#" class="dropdown-item order-option" href="#">Colored</a>
                <a href="#" class="dropdown-item order-option" href="#">Comforter</a>
              </div>
            </div>  
          </div>
          <div class="form-group">
            <div id="order-options-list" class="row">
              <div class="col-md-12">
                <table class="table">
                  <tr>
                    <th width="40%">Order Option</th>
                    <th width="10%">Quantity</th>
                    <th width="40%">Price</th>
                  </tr>
                </table>
              </div>
            </div>
          </div>  
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      <form>
    </div>
  </div>
</div>