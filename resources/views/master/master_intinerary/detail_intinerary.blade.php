@extends('main')
@include('layouts._sidebar')
<style type="text/css" media="screen">
    .inline-block{
        display: inline-block;
    }
    .row2{
        padding-top: 30px !important;
    }
    .bor-right{
        border-right: 1px solid black;
    }

    .bor-left{
        border-left: 1px solid black;
    }
    .bor-top{
        border-top: 1px solid black;
    }
    .bor-bottom{
        border-bottom: 1px solid black;
    }
    td{
        font-size: 12px !important;
    }
</style>

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>
    @include('layouts.task')
    <div class="header">
        <ol class="breadcrumb breadcrumb-bg-pink">
            <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
            <li class=""><i class="material-icons"></i>Master Intinerary</li>
            <li class="active"><i class="material-icons"></i>Rooming List & Passport List</li>
        </ol>
    </div>
    <div class="row clearfix ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header bg-cyan">
                    <h4 class="inline-block">
                        Rooming List & Passport List
                    </h4>
                </div>
                <div class="body table-responsive">
                    <table class="table table-bordered intinerary" style="width: 100%;vertical-align: middle;" >
                        <tr style="vertical-align: middle; border: 1px solid black">
                            <th class="center row2" rowspan="2">No</th>
                            <th class="center row2" rowspan="2">Passenger Name</th>
                            <th class="center row2" rowspan="2">Gender</th>
                            <th class="center row2" rowspan="2">Room Type</th>
                            <th class="center" colspan="3">Passport</th>
                            <th class="center" colspan="2">Birth</th>
                            <th class="center row2" rowspan="2">Remark</th>
                        </tr>
                        <tr style="border: 1px solid black">
                            <th class="center">Passport Number</th>
                            <th class="center">Issued</th>
                            <th class="center">Expired</th>
                            <th class="center">Place</th>
                            <th class="center">Date</th>
                        </tr>
                        @foreach ($passenger as $akhir)
                            
                        @endforeach
                        @php
                            $temp = 0;
                        @endphp
                        @foreach ($id as $i=>$awal)
                            @foreach ($room[$i] as $a=>$awal1)
                                <tr class="bor-top">
                                    <td align="center">
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ $temp +=1 }}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ $akhir->dp_name }}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ $akhir->dp_gender }}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ $akhir->dp_bed }}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ $akhir->dp_passport }}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ $akhir->dp_issuing }}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ carbon\carbon::parse($akhir->dp_expired)->format('d/m/Y')}}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ $akhir->dp_birth_place}}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ carbon\carbon::parse($akhir->dp_birth_date)->format('d/m/Y')}}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($passenger as $akhir)
                                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                                {{ $akhir->dp_reference}}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                        <tr>
                            
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extra_scripts')
<script>

</script>
@endsection
  
