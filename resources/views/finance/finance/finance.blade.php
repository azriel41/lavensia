<!DOCTYPE html>
<html>
        @include('layouts._head')
<head>
    <title>OKE-TRIP.COM</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets_frontend/img/favicon.png') }}"/>
</head>
<style type="text/css">
    @media print
    {
        body {background-color: white !important;}
        nav{
            display: none;
        }
        #printArea{
            margin-left: 0px;
            margin-top: 0px !important;
        }
    }
    
    .transparency{
        opacity: 0.7;
    }
    .logo{
        width: 30px;
        height: 30px;
        margin-bottom: 4px;
    }
    th{
        text-align: center;
    }
    .nopad{
        padding: 0px;
    }
    .nav-ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    .nav-ul li{
        float: right;
    }

    .fa-sliders{
        margin-right: 40px;
    }

    label{
        font-size: 12px;
    }
    .bg-secondary{
        background-color: #9999 !important;
    }
    th{
        border:1px solid grey;
    }
    option{
        display: block;
    }
    .overflow{
        overflow-y: scroll;
    }
    

    @media screen and (max-width: 600px) {
        body {
            background-color: olive;
        }
        .col-md-8{
            width: 60%
        }
        .nav-text{
            display: none;
        }
        .col-md-4{
            width: 40%
        }
        .navbar-brand{
            margin-top: 0px !important;
        }
    }
    .body-jurnal{
        margin-left: 0px;
        margin-right: 0px;
    }
</style>

<body style="background-color: grey;">
    <nav class="navbar navbar-inverse transparency">
        <div class="container">
            <div class="col-md-8  nopad">
                <a class="navbar-brand" href="{{ url('/') }}" style="margin-top: 10px;">
                </a>
                <a class="navbar-brand nav-text" href="{{ url('/') }}">
                    <h5>OKE-TRIP.COM</h5>
                </a>
            </div>
            <div class="col-md-4 ">
                <button onclick="openModal()" class="btn btn-warning waves-effect pull-right" style="margin-top: 15px">Filter</button>
            </div>
        </div>
    </nav>
    <div class="container" id="printArea" style="margin-top: 100px;background-color: white">
        <div class="row col-sm-12 body-jurnal" >
            <div class="col-sm-12" style="margin-top: 20px" >
                <h2 class="black"><b>LAPORAN PENDAPATAN</b></h2>
                <h5 class="black">OKE-TRIP.COM</h5>
                <hr class="black" style="border-bottom: 2px solid black">
            </div>
            <div class="col-sm-12 table-responsive" style="font-size: 10px">
                @if (($awal != '') && ($akhir != ''))
                    <label>Periode Transaksi : {{ $awal }} - {{ $akhir }}</label>
                @endif
                <table class="table table-bordered overflow">
                    @php
                        $total_semua = 0;
                    @endphp
                    @foreach ($data as $i=>$d)
                        <tr class="bg-secondary">
                            <td colspan="2"><b>{{ strtoupper($d->user->name) }} | {{ $d->detail_itin->md_nota }} | {{ $d->db_kode_transaksi }}</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table class="table">
                                    <thead class="bg-secondary">
                                        <th>Jenis Pendapatan</th>
                                        <th>Netto/Pax</th>
                                        <th>Agent Com/Pax</th>
                                        <th>Pax Terjual</th>
                                        <th>Harga Jual/Pax</th>
                                        <th>Pendapatan</th>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total_hasil = 0;
                                        @endphp
                                        @if ($d->db_total_adult != 0)
                                            <tr>
                                                <td>Penjualan Tiket Dewasa</td>
                                                <td align="right">{{ number_format($d->detail_itin->intinerary->mi_netto_adult,0,',','.')}}</td>
                                                <td align="right">{{ number_format($d->detail_itin->intinerary->mi_agent_com_adult,0,',','.')}}</td>
                                                <td align="right">{{ $d->db_total_adult }}</td>
                                                <td align="right">{{ number_format($d->detail_itin->md_adult_price,0,',','.')}}</td>
                                                <td align="right">
                                                    @php
                                                        $net = ($d->detail_itin->intinerary->mi_netto_adult + $d->detail_itin->intinerary->mi_agent_com_adult) * $d->db_total_adult;
                                                        $jual = $d->detail_itin->md_adult_price * $d->db_total_adult;
                                                        $hasil = $jual - $net;
                                                        $total_hasil = $total_hasil + $hasil;
                                                        $total_semua = $total_semua + $total_hasil;
                                                        echo number_format($hasil,0,',','.');
                                                    @endphp
                                                </td>
                                            </tr>
                                        @endif
                                        @php
                                            $cwb = 0;
                                            $cnb = 0;
                                            foreach ($d->party_name as $i1 => $p) {
                                                if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cwb') {
                                                    $cwb += 1;
                                                }elseif ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cnb'){
                                                    $cnb += 1;
                                                }
                                            }
                                        @endphp
                                        @if ($cwb != 0)
                                            <tr>
                                                <td>Penjualan Tiket Anak Dengan Kasur</td>
                                                <td align="right">{{ number_format($d->detail_itin->intinerary->mi_netto_cwb,0,',','.')}}</td>
                                                <td align="right">{{ number_format($d->detail_itin->intinerary->mi_agent_com_cwb,0,',','.')}}</td>
                                                <td align="right">{{ $cwb}}</td>
                                                <td align="right">{{ number_format($d->detail_itin->md_child_w_price,0,',','.')}}</td>
                                                <td align="right">
                                                    @php
                                                        $net = ($d->detail_itin->intinerary->mi_netto_cwb + $d->detail_itin->intinerary->mi_agent_com_cwb) * $cwb;
                                                        $jual = $d->detail_itin->md_child_w_price * $cwb;
                                                        $hasil = $jual - $net;
                                                        $total_hasil = $total_hasil + $hasil;
                                                        $total_semua = $total_semua + $total_hasil;
                                                        echo number_format($hasil,0,',','.');
                                                    @endphp
                                                </td>
                                            </tr>
                                        @endif
                                        @if ($cnb != 0)
                                            <tr>
                                                <td>Penjualan Tiket Anak Tanpa Kasur</td>
                                                <td align="right">{{ number_format($d->detail_itin->intinerary->mi_netto_cnb,0,',','.')}}</td>
                                                <td align="right">{{ number_format($d->detail_itin->intinerary->mi_agent_com_cnb,0,',','.')}}</td>
                                                <td align="right">{{ $cnb }}</td>
                                                <td align="right">{{ number_format($d->detail_itin->md_child_price,0,',','.')}}</td>
                                                <td align="right">
                                                    @php
                                                        $net = ($d->detail_itin->intinerary->mi_netto_cnb + $d->detail_itin->intinerary->mi_agent_com_cnb) * $cnb;
                                                        $jual = $d->detail_itin->md_child_price * $cnb;
                                                        $hasil = $jual - $net;
                                                        $total_hasil = $total_hasil + $hasil;
                                                        $total_semua = $total_semua + $total_hasil;
                                                        echo number_format($hasil,0,',','.');
                                                    @endphp
                                                </td>
                                            </tr>
                                        @endif
                                        @if ($d->db_total_infant != 0)
                                            <tr>
                                                <td>Penjualan Tiket Bayi</td>
                                                <td align="right">{{ number_format($d->detail_itin->intinerary->mi_netto_infant,0,',','.')}}</td>
                                                <td align="right">{{ number_format($d->detail_itin->intinerary->mi_agent_com_infant,0,',','.')}}</td>
                                                <td align="right">{{ $d->db_total_infant }}</td>
                                                <td align="right">{{ number_format($d->detail_itin->md_infant_price,0,',','.')}}</td>
                                                <td align="right">
                                                    @php
                                                        $net = ($d->detail_itin->intinerary->mi_netto_infant + $d->detail_itin->intinerary->mi_agent_com_infant) * $d->db_total_infant;
                                                        $jual = $d->detail_itin->md_infant_price * $d->db_total_infant;
                                                        $hasil = $jual - $net;
                                                        $total_hasil = $total_hasil + $hasil;
                                                        $total_semua = $total_semua + $total_hasil;
                                                        echo number_format($hasil,0,',','.');
                                                    @endphp
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="bg-secondary">
                            <td width="80%" align="right">Total Pendapatan </td>
                            <td align="right">{{ number_format($total_hasil,0,',','.')}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-cyan">
                <h3 class="modal-title" id="largeModalLabel">Filter</h3>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                        <label class="form-control-label" for="end">Bulan Awal</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <div class="form-line req" style="position:relative">
                                <input type="text" id="start" class="form-control datenormal " 
                      
                                placeholder="DD/MM/YYYY">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                        <label class="form-control-label" for="end">Bulan Akhir</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <div class="form-line req" style="position:relative">
                                <input type="text" id="end" 
                       
                                class="form-control datenormal " placeholder="DD/MM/YYYY">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
                <button type="button" class="btn btn-success waves-effect" onclick="cari()" data-dismiss="modal">FILTER</button>
            </div>
        </div>
    </div>
</div>
@include('layouts._scripts')
<script type="text/javascript">
    // window.print();
</script>
</html>
    
<script type="text/javascript">
    function openModal(argument) {
        $('#exampleModal').modal('show');
    }

    function cari() {
        location.href = '{{ url('/finance/finance') }}?start='+$('#start').val()+'&end='+$('#end').val();
    }
</script>