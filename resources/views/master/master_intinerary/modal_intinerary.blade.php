<div class="modal fade" id="departure" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document"  style="width:1200px">
        <div class="modal-content">
            <div class="modal-header bg-pink">
                <h4 class="modal-title departure" id="largeModalLabel">Departure</h4>
            </div>
            <div class="modal-body departure_table">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect bg-cyan" data-dismiss="modal" style="color: white">CLOSE</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="schedule" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-cyan">
                <h4 class="modal-title" id="largeModalLabel">Schedule</h4>
            </div>
            <div class="modal-body schedule_table">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect bg-pink" data-dismiss="modal" style="color: white">CLOSE</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="approve" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="width: 1000px !important">
        <div class="modal-content">
            <div class="modal-header bg-cyan">
                <h4 class="modal-title" id="largeModalLabel">Approve Itinerary</h4>
            </div>
            <div class="modal-body approve_table">
                <form class="col-sm-12 table_approve">
                    <div class="col-sm-6">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                                <label class="form-control-label" for="caption_by">Netto Adult</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line page_1_req">
                                        <input type="text" name="mi_netto_adult" id="mi_netto_adult" class="form-control uppercase mi_netto_adult mask" placeholder="Field Required">
                                        <input type="hidden" name="mi_id" id="mi_id" class="form-control uppercase mi_id " placeholder="Field Required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                                <label class="form-control-label" for="caption_by">Netto Child With Bed</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line page_1_req">
                                        <input type="text" name="mi_netto_cwb" id="mi_netto_cwb" class="form-control uppercase mi_netto_cwb mask" placeholder="Field Required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                                <label class="form-control-label" for="caption_by">Netto Child No Bed</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line page_1_req">
                                        <input type="text" name="mi_netto_cnb" id="mi_netto_cnb" class="form-control uppercase mi_netto_cnb mask" placeholder="Field Required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                                <label class="form-control-label" for="caption_by">Netto Infant</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line page_1_req">
                                        <input type="text" name="mi_netto_infant" id="mi_netto_infant" class="form-control uppercase mi_netto_infant mask" placeholder="Field Required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                                <label class="form-control-label" for="caption_by">Agent Com Adult</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line page_1_req">
                                        <input type="text" name="mi_agent_com_adult" id="mi_agent_com_adult" class="form-control uppercase mi_agent_com_adult mask" placeholder="Field Required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                                <label class="form-control-label" for="caption_by">Agent Com Child With Bed</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line page_1_req">
                                        <input type="text" name="mi_agent_com_cwb" id="mi_agent_com_cwb" class="form-control uppercase mi_agent_com_cwb mask" placeholder="Field Required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                                <label class="form-control-label" for="caption_by">Agent Com Child No Bed</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line page_1_req">
                                        <input type="text" name="mi_agent_com_cnb" id="mi_agent_com_cnb" class="form-control uppercase mi_agent_com_cnb mask" placeholder="Field Required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                                <label class="form-control-label" for="caption_by">Agent Com Infant</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line page_1_req">
                                        <input type="text" name="mi_agent_com_infant" id="mi_agent_com_infant" class="form-control uppercase mi_agent_com_infant mask" placeholder="Field Required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect bg-cyan" data-dismiss="modal" onclick="save_approve()" style="color: white">Approve</button>
                <button type="button" class="btn btn-link waves-effect bg-pink" data-dismiss="modal" style="color: white">CLOSE</button>
            </div>
        </div>
    </div>
</div>