<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">BOOKING</h4>
      </div>
      <div class="modal-body">
        <form action="#" id="contact-form">
          
          <div class="contact-form">
            <div class="input-group code-date">
                <div class="input-field">
                    <input type="text" name="code" id="code" placeholder="Code (Automatically Generate By System)" readonly="" class="form-control">
                </div>
                <div class="input-field">
                    <input type="email" name="date" id="date" placeholder="Date" class="form-control">
                </div>
            </div>

            <div class="input-group name-email">
                <div class="input-field">
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                </div>
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                </div>
            </div>

            <div class="input-group">
                <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
            </div>

          </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>