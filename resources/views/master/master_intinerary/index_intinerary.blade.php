@extends('main')
@include('layouts._sidebar')
<style type="text/css" media="screen">
    .inline-block{
        display: inline-block;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        @include('layouts.task')
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li class="active"><i class="material-icons"></i>Master Intinerary</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h4 class="inline-block">
                            Master Intinerary
                        </h4>
                        <div class="pull-right">
                            <a href="{{ route('master_intinerary_create') }}">
                                <button type="button" class="btn bg-blue waves-effect"><i class="material-icons">add</i> Add Data</button>
                            </a>
                        </div>
                    </div>
                    <div class="body">
                        <table class="table table-bordered dataTable">
                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">Tour Name</th>
                                    <th class="center">Periode</th>
                                    <th class="center">Price</th>
                                    <th class="center">Total Seat</th>
                                    <th class="center">Seat Remain</th>
                                    <th class="center">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">1</td>
                                    <td>Travel to Mardakaripura</td>
                                    <td>17 agustus 1945</td>
                                    <td align="right">Rp. 3.500.000</td>
                                    <td>60</td>
                                    <td>30</td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">settings</i>
                                                Manage <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    
</script>
  
