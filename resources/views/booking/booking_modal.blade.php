<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-cyan">
                <h3 class="modal-title" id="largeModalLabel">Term & Condition</h3>
            </div>
            <div class="modal-body">
                <p>
                    {{ $detail_intinerary->md_term }}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
                <button type="button" class="btn btn-info waves-effect save" data-dismiss="modal" ><i class="fa fa-money"></i> SAVE BOOK AND GO TO PAYMENT PAGE</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><b>INVOICE</b></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " style="text-align: left">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Room</a></li>
          <li><a data-toggle="tab" href="#menu1">Additional</a></li>
        </ul>
        <div class="tab-content"  >
          <div id="home" class="tab-pane fade in active">
            <table width="100%" class="table table-striped table-hover table_room">
                <thead >
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Family Name</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Room</th>
                        <th style="text-align: center;">Price</th>
                    </tr>
                </thead>
                <tbody class="append_invoice">
                </tbody>
            </table>
          </div>
          <div id="menu1" class="tab-pane fade" >
            <div>
                <table width="100%" class="table table-striped table-hover table_addition">
                    <thead >
                        <tr>
                            <th style="text-align: center;">Name</th>
                            <th style="text-align: center;">Additional</th>
                            <th style="text-align: center;">Price</th>
                        </tr>
                    </thead>
                    <tbody class="append_additional">
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        <div class="col-sm-12" style="text-align: right">
            <form class="form_total">
                <div class="col-sm-8">
                    <h3 colspan="3">Room</h3>
                </div>
                <div class="col-sm-4">
                    <h3 class="total_room"></h3>
                    <input type="hidden" class="total_room_input" name="total_room_input">
                </div>
                <div class="col-sm-8">
                    <h3 colspan="3">Additional</h3>
                </div>
                <div class="col-sm-4">
                    <h3 class="total_additional"></h3>
                    <input type="hidden" class="total_additional_input" name="total_additional_input">
                </div>
                <div class="col-sm-8">
                    <h3 colspan="3">Total</h3>
                </div>
                <div class="col-sm-4">
                    <h3 class="total_harga"></h3>
                    <input type="hidden" class="total_harga_input" name="total_harga_input">
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
            <button type="button" class="btn btn-info waves-effect save" data-dismiss="modal" ><i class="fa fa-money"></i> SAVE BOOK AND GO TO PAYMENT PAGE</button>
      </div>
    </div>
  </div>
</div>