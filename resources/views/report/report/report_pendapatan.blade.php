@extends('main')
@include('layouts._sidebar')
    

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Booking List</h2>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div style="min-height: 400px;" class="responsive">
                                  <div class="body">
                                      <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                           data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                                           data-offset="90" data-width="100%" data-height="150px" data-line-Width="2" data-line-Color="rgb(0, 188, 212)"
                                           data-fill-Color="rgba(0, 188, 212, 0.3)">
                                          6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- #END# CPU Usage -->
        </div>
    </section>


<script type="text/javascript">

</script>
  
