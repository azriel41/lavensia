<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-cyan">
                <h3 class="modal-title" id="largeModalLabel">Term & Condi   tion</h3>
            </div>
            <div class="modal-body">
                <p>
                    {{ $detail_intinerary->md_term }}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <li style="padding: 10px;" class="active"><a data-toggle="tab" href="#home">Room</a></li>
          <li style="padding: 10px;"><a data-toggle="tab" href="#menu1">Additional</a></li>
        </ul>
        <div class="tab-content"  >
          <div id="home" class="tab-pane active">
            <table width="100%" class="table table-striped table-hover table_room">
                <thead >
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Paspport No</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Room</th>
                        <th style="text-align: center;">Price</th>
                    </tr>
                </thead>
                <tbody class="append_invoice">
                </tbody>
            </table>
          </div>
          <div id="menu1" class="tab-pane" >
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
        <div class="col-sm-12" style="text-align: right;margin-top: 25px;">
            <form class="form_total" style="overflow-y: scroll; max-height: 200px">
                <div class="col-sm-8">
                    <h4 colspan="3">Room</h4>
                </div>
                <div class="col-sm-4">
                    <h4 class="total_room"></h4>
                    <input type="hidden" class="total_room_input" name="total_room_input">
                </div>
                <div class="col-sm-8">
                    <h4 colspan="3">Additional</h4>
                </div>
                <div class="col-sm-4">
                    <h4 class="total_additional"></h4>
                    <input type="hidden" class="total_additional_input" name="total_additional_input">
                </div>
                <div class="col-sm-8">
                    <h4 colspan="3">Tips</h4>
                </div>
                <div class="col-sm-4">
                    <h4 class="tips"></h4>
                    <input type="hidden" class="tips_input" name="tips_input">
                </div>
                <div class="col-sm-8">
                    <h4 colspan="3">Visa</h4>
                </div>
                <div class="col-sm-4">
                    <h4 class="visa"></h4>
                    <input type="hidden" class="visa_input" name="visa_input">
                </div>
                <div class="col-sm-8">
                    <h4 colspan="3">Apt Tax & Fuel Surcharge</h4>
                </div>
                <div class="col-sm-4">
                    <h4 class="tax"></h4>
                    <input type="hidden" class="tax_input" name="tax_input">
                </div>
                <div class="col-sm-8">
                    <h4 colspan="3">Total</h4>
                </div>
                <div class="col-sm-4">
                    <h4 class="total_harga"></h4>
                    <input type="hidden" class="total_harga_input" name="total_harga_input">
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
            <button type="button" class="btn btn-info waves-effect save" data-dismiss="modal" ><i class="fa fa-check"></i> SAVE AND HANDLE BOOKING</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="preview_pdf" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-cyan">
                <h3 class="modal-title" id="largeModalLabel">Preview PDF</h3>
            </div>
            <div class="modal-body">
                <div style="clear:both;top: 20px" class="col-sm-12" >
                   <iframe id="viewer" frameborder="0" scrolling="no" width="400" height="600"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
