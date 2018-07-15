@extends('main')
@include('layouts._sidebar')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        @include('layouts.task')
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li><i class="material-icons"></i>Master Intinerary</li>
                <li class="active"><i class="material-icons"></i>Create Intinerary</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h4>Create Intinerary</h4>
                        <div class="pull-right">
                            <a href="{{ route('master_intinerary_create') }}" title=""></a>
                        </div>
                    </div>
                    <div class="body">
                        <form action="" method="get" accept-charset="utf-8" style="background: ">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="intinerary">Name Intinerary</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="intinerary" id="intinerary" class="form-control" placeholder="Field Required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="highlight">Highlight</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" id="highlight" name="highlight" class="form-control no-resize" placeholder="Field Required"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="caption_by">Caption By</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="caption_by" id="caption_by" class="form-control" placeholder="Field Required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="start">Start</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="start" id="start" class="form-control" placeholder="Field Required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                    <label for="end">End</label>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="end" id="end" class="form-control" placeholder="Field Required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    
</script>
  
