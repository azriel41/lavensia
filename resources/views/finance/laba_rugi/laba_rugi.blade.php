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
    .over-x{
        overflow-x: scroll;
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
        <div class="col-sm-12" style="margin-top: 20px" >
            <h2 class="black"><b>LAPORAN LABA RUGI</b></h2>
            <h5 class="black">OKE-TRIP.COM</h5>
            <hr class="black" style="border-bottom: 2px solid black">
             @if (isset($awal) or isset($akhir))
                <label>Periode Transaksi : {{ $awal }} - {{ $akhir }}</label>
            @endif
        </div>
        <div class="row col-sm-12 body-jurnal" >
            <div class="col-sm-6 table-responsive nopad" style="font-size: 10px">
                <table class="table table-bordered">
                    <thead >
                        <th>
                            Nama Transaksi
                        </th>
                        <th>
                            Total
                        </th>
                        <th>
                            %
                        </th>
                    </thead>
                    <tbody>
                        @php
                            $total  = 0 ;
                            $total_dewasa  = 0 ;
                            $total_cwb  = 0 ;
                            $total_cnb  = 0 ;
                            $total_infant  = 0 ;

                            
                            $persen = 100 ;
                            $persen_dewasa =0;
                            $persen_cwb =0;
                            $persen_cnb =0;
                            $persen_infant =0;
                            foreach ($data as $i => $d) {
                                $total+= $d->db_total_room;
                                $jumlah_dewasa = 0;
                                $jumlah_cwb = 0;
                                $jumlah_cnb = 0;
                                $jumlah_infant = 0;

                                $jumlah_dewasa += $d->db_total_adult;
                                $jumlah_infant += $d->db_total_infant;
                                foreach ($d->party_name as $i1 => $p) {
                                    if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cwb') {
                                        $jumlah_cwb += 1;
                                    }

                                    if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cnb') {
                                        $jumlah_cnb += 1;
                                    }
                                }

                                $total_dewasa += ($jumlah_dewasa * $d->detail_itin->md_adult_price);
                                $total_cwb += ($jumlah_cwb * $d->detail_itin->md_child_w_price);
                                $total_cnb += ($jumlah_cnb * $d->detail_itin->md_child_price);
                                $total_infant += ($jumlah_infant * $d->detail_itin->md_infant_price);
                            }

                            $persen_dewasa = $total_dewasa / $total * 100;
                            $persen_cwb = $total_cwb / $total * 100;
                            $persen_cnb = $total_cnb / $total * 100;
                            $persen_infant = $total_infant / $total * 100;
                        @endphp
                        <tr>
                            <td align="left"><b>PENDAPATAN</b></td>
                            <td align="right">
                                <b>{{ number_format($total,0,',','.') }}</b>
                            </td>
                            <td align="center"><b>{{ $persen }} %</b></td>
                        </tr>
                        <tr>
                            <td align="left">Penjualan Tiket Dewasa</td>
                            <td align="right">{{ number_format($total_dewasa,0,',','.') }}</td>
                            <td align="center">{{ round($persen_dewasa,2) }} %</td>
                        </tr>
                        <tr>
                            <td align="left">Penjualan Tiket Anak Dengan Kasur</td>
                            <td align="right">{{ number_format($total_cwb,0,',','.') }}</td>
                            <td align="center">{{ round($persen_cwb,2) }} %</td>
                        </tr>
                        <tr>
                            <td align="left">Penjualan Tiket Anak Tanpa Kasur</td>
                            <td align="right">{{ number_format($total_cnb,0,',','.') }}</td>
                            <td align="center">{{ round($persen_cnb,2) }} %</td>
                        </tr>
                        <tr>
                            <td align="left">Penjualan Tiket Bayi</td>
                            <td align="right">{{ number_format($total_infant,0,',','.') }}</td>
                            <td align="center">{{ round($persen_infant,2) }} %</td>
                        </tr>
                        {{-- HARGA POKOK PENJUALAN --}}
                        @php
                            $total_hpp  = 0 ;
                            $total_dewasa_hpp  = 0 ;
                            $total_cwb_hpp  = 0 ;
                            $total_cnb_hpp  = 0 ;
                            $total_infant_hpp  = 0 ;

                            
                            $persen_hpp = 0 ;
                            $persen_dewasa_hpp =0;
                            $persen_cwb_hpp =0;
                            $persen_cnb_hpp =0;
                            $persen_infant_hpp =0;

                            foreach ($data as $i => $d) {
                                $jumlah_dewasa = 0;
                                $jumlah_cwb = 0;
                                $jumlah_cnb = 0;
                                $jumlah_infant = 0;

                                $jumlah_dewasa += $d->db_total_adult;
                                $jumlah_infant += $d->db_total_infant;

                                foreach ($d->party_name as $i1 => $p) {
                                    if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cwb') {
                                        $jumlah_cwb += 1;
                                    }

                                    if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cnb') {
                                        $jumlah_cnb += 1;
                                    }
                                }

                                $total_dewasa_hpp += ($d->detail_itin->intinerary->mi_netto_adult + $d->detail_itin->intinerary->mi_agent_com_adult) * $jumlah_dewasa;
                                $total_cwb_hpp += ($d->detail_itin->intinerary->mi_netto_cwb + $d->detail_itin->intinerary->mi_agent_com_cwb) * $jumlah_cwb;
                                $total_cnb_hpp += ($d->detail_itin->intinerary->mi_netto_cnb + $d->detail_itin->intinerary->mi_agent_com_cnb) * $jumlah_cnb;
                                $total_infant_hpp += ($d->detail_itin->intinerary->mi_netto_infant + $d->detail_itin->intinerary->mi_agent_com_infant) * $jumlah_infant;

                            }
                            $total_hpp = $total_dewasa_hpp + $total_cwb_hpp + $total_cnb_hpp + $total_infant_hpp;

                            $persen_hpp = $total_hpp/$total * $persen;
                            $persen_dewasa_hpp = $total_dewasa_hpp/$total_hpp * $persen_hpp;
                            $persen_cwb_hpp = $total_cwb_hpp/$total_hpp * $persen_hpp;
                            $persen_cnb_hpp = $total_cnb_hpp/$total_hpp * $persen_hpp;
                            $persen_infant_hpp = $total_infant_hpp/$total_hpp * $persen_hpp;

                          
                        @endphp
                        <tr>
                            <td align="left"><b>HARGA POKOK PENJUALAN (HPP)</b></td>
                            <td align="right">
                                <b>{{ number_format($total_hpp,0,',','.') }}</b>
                            </td>
                            <td align="center"><b>{{ round($persen_hpp,2) }} %</b></td>
                        </tr>
                        <tr>
                            <td align="left">HPP Tiket Dewasa</td>
                            <td align="right">{{ number_format($total_dewasa_hpp,0,',','.') }}</td>
                            <td align="center">{{ round($persen_dewasa_hpp,2) }} %</td>
                        </tr>
                        <tr>
                            <td align="left">HPP Tiket Anak Dengan Kasur</td>
                            <td align="right">{{ number_format($total_cwb_hpp,0,',','.') }}</td>
                            <td align="center">{{ round($persen_cwb_hpp,2) }} %</td>
                        </tr>
                        <tr>
                            <td align="left">HPP Tiket Anak Tanpa Kasur</td>
                            <td align="right">{{ number_format($total_cnb_hpp,0,',','.') }}</td>
                            <td align="center">{{ round($persen_cnb_hpp,2) }} %</td>
                        </tr>
                        <tr>
                            <td align="left">HPP Tiket Bayi</td>
                            <td align="right">{{ number_format($total_infant_hpp,0,',','.') }}</td>
                            <td align="center">{{ round($persen_infant_hpp,2) }} %</td>
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td><b>NETTO PROFIT</b></td>
                            <td align="right">
                                @php
                                    if (($total - $total_hpp) < 0 ) {
                                        echo '( '. number_format(($total - $total_hpp) * -1,0,',','.') .' )';
                                    }else{
                                        echo number_format($total - $total_hpp,0,',','.');
                                    }
                                @endphp
                            </td>
                            <td align="center">
                                @php
                                    if (($persen - $persen_hpp) < 0 ) {
                                        echo '( '. number_format(($persen - $persen_hpp) * -1,0,',','.') .' ) %';
                                    }else{
                                        echo  number_format($persen - $persen_hpp,0,',','.') .' %';
                                    }
                                @endphp
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <div class="col-sm-3 table-responsive nopad over-x" style="font-size: 10px;margin-left: 20px;">
                <table class="table table-bordered ">
                    <thead>
                        @foreach ($bulan['head'] as $i => $b)
                            <th>{{ $bulan['head'][$i] }}</th>
                        @endforeach
                    </thead>
                    <tbody>
                        @php
                            $total = [];
                            $total_dewasa = [];
                            $total_cwb = [];
                            $total_cnb = [];
                            $total_infant = [];
                            
                            $persen = [];
                            $persen_dewasa = [];
                            $persen_cwb = [];
                            $persen_cnb = [];
                            $persen_infant = [];

                            
                        @endphp
                        @foreach ($bulan['date'] as $c => $date)
                            @php
                                $total[$c]  = 0 ;
                                $total_dewasa[$c]  = 0 ;
                                $total_cwb[$c]  = 0 ;
                                $total_cnb[$c]  = 0 ;
                                $total_infant[$c]  = 0 ;

                                $persen[$c] = 100 ;
                                $persen_dewasa[$c] =0;
                                $persen_cwb[$c] =0;
                                $persen_cnb[$c] =0;
                                $persen_infant[$c] =0;
                                foreach ($data as $i => $d) {
                                    $tgl = carbon\carbon::parse($d->created_at)->format('m-Y');
                                    if ($tgl == $bulan['date'][$c]) {

                                        $jumlah_dewasa = [];
                                        $jumlah_cwb = [];
                                        $jumlah_cnb = [];
                                        $jumlah_infant = [];

                                        $total[$c]+= $d->db_total_room;

                                        $jumlah_dewasa[$c] = 0;
                                        $jumlah_cwb[$c] = 0;
                                        $jumlah_cnb[$c] = 0;
                                        $jumlah_infant[$c] = 0;

                                        $jumlah_dewasa[$c] += $d->db_total_adult;
                                        $jumlah_infant[$c] += $d->db_total_infant;
                                        foreach ($d->party_name as $i1 => $p) {
                                            if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cwb') {
                                                $jumlah_cwb[$c] += 1;
                                            }

                                            if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cnb') {
                                                $jumlah_cnb[$c] += 1;
                                            }
                                        }

                                        $total_dewasa[$c] += ($jumlah_dewasa[$c] * $d->detail_itin->md_adult_price);
                                        $total_cwb[$c] += ($jumlah_cwb[$c] * $d->detail_itin->md_child_w_price);
                                        $total_cnb[$c] += ($jumlah_cnb[$c] * $d->detail_itin->md_child_price);
                                        $total_infant[$c] += ($jumlah_infant[$c] * $d->detail_itin->md_infant_price);
                                    }
                                }

                                $persen_dewasa[$c] = $total_dewasa[$c] / $total[$c] * 100;
                                $persen_cwb[$c] = $total_cwb[$c] / $total[$c] * 100;
                                $persen_cnb[$c] = $total_cnb[$c] / $total[$c] * 100;
                                $persen_infant[$c] = $total_infant[$c] / $total[$c] * 100;
                            @endphp
                        @endforeach
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    <b>{{ number_format($total[$c],0,',','.') }}</b>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ number_format($total_dewasa[$c],0,',','.') }}
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ number_format($total_cwb[$c],0,',','.') }}
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ number_format($total_cnb[$c],0,',','.') }}
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ number_format($total_infant[$c],0,',','.') }}
                                </td>
                            @endforeach
                        </tr>
                        {{-- HARGA POKOK PENJUALAN --}}
                        @php
                            $total_hpp = [];
                            $total_dewasa_hpp = [];
                            $total_cwb_hpp = [];
                            $total_cnb_hpp = [];
                            $total_infant_hpp = [];
                            
                            $persen_hpp = [];
                            $persen_dewasa_hpp = [];
                            $persen_cwb_hpp = [];
                            $persen_cnb_hpp = [];
                            $persen_infant_hpp = [];
                            
                        @endphp

                        @foreach ($bulan['date'] as $c => $date)
                            @php
                                $total_hpp[$c]  = 0 ;
                                $total_dewasa_hpp[$c]  = 0 ;
                                $total_cwb_hpp[$c]  = 0 ;
                                $total_cnb_hpp[$c]  = 0 ;
                                $total_infant_hpp[$c]  = 0 ;

                                
                                $persen_hpp[$c] = 0 ;
                                $persen_dewasa_hpp[$c] =0;
                                $persen_cwb_hpp[$c] =0;
                                $persen_cnb_hpp[$c] =0;
                                $persen_infant_hpp[$c] =0;

                                foreach ($data as $i => $d) {
                                    $tgl = carbon\carbon::parse($d->created_at)->format('m-Y');
                                    if ($tgl == $bulan['date'][$c]) {
                                        $jumlah_dewasa = [];
                                        $jumlah_cwb = [];
                                        $jumlah_cnb = [];
                                        $jumlah_infant = [];

                                        $jumlah_dewasa[$c] = 0;
                                        $jumlah_cwb[$c] = 0;
                                        $jumlah_cnb[$c] = 0;
                                        $jumlah_infant[$c] = 0;

                                        $jumlah_dewasa[$c] += $d->db_total_adult;
                                        $jumlah_infant[$c] += $d->db_total_infant;

                                        foreach ($d->party_name as $i1 => $p) {
                                            if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cwb') {
                                                $jumlah_cwb[$c] += 1;
                                            }

                                            if ($p->dp_status_person == 'child' and $p->dp_bed == 'doubletwin&cnb') {
                                                $jumlah_cnb[$c] += 1;
                                            }
                                        }

                                        $total_dewasa_hpp[$c] += ($d->detail_itin->intinerary->mi_netto_adult + $d->detail_itin->intinerary->mi_agent_com_adult) * $jumlah_dewasa[$c];
                                        $total_cwb_hpp[$c] += ($d->detail_itin->intinerary->mi_netto_cwb + $d->detail_itin->intinerary->mi_agent_com_cwb) * $jumlah_cwb[$c];
                                        $total_cnb_hpp[$c] += ($d->detail_itin->intinerary->mi_netto_cnb + $d->detail_itin->intinerary->mi_agent_com_cnb) * $jumlah_cnb[$c];
                                        $total_infant_hpp[$c] += ($d->detail_itin->intinerary->mi_netto_infant + $d->detail_itin->intinerary->mi_agent_com_infant) * $jumlah_infant[$c];
                                    }

                                }
                                $total_hpp[$c] = $total_dewasa_hpp[$c] + $total_cwb_hpp[$c] + $total_cnb_hpp[$c] + $total_infant_hpp[$c];

                                $persen_hpp[$c] = $total_hpp[$c]/$total[$c] * $persen[$c];
                                $persen_dewasa_hpp[$c] = $total_dewasa_hpp[$c]/$total_hpp[$c] * $persen_hpp[$c];
                                $persen_cwb_hpp[$c] = $total_cwb_hpp[$c]/$total_hpp[$c] * $persen_hpp[$c];
                                $persen_cnb_hpp[$c] = $total_cnb_hpp[$c]/$total_hpp[$c] * $persen_hpp[$c];
                                $persen_infant_hpp[$c] = $total_infant_hpp[$c]/$total_hpp[$c] * $persen_hpp[$c];

                              
                            @endphp
                        @endforeach
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    <b>{{ number_format($total_hpp[$c],0,',','.') }}</b>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ number_format($total_dewasa_hpp[$c],0,',','.') }}
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ number_format($total_cwb_hpp[$c],0,',','.') }}
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ number_format($total_cnb_hpp[$c],0,',','.') }}
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ number_format($total_infant_hpp[$c],0,',','.') }}
                                </td>
                            @endforeach
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    <b>
                                        @php
                                            if (($total[$c] - $total_hpp[$c]) < 0 ) {
                                                echo '( '. number_format(($total[$c] - $total_hpp[$c]) * -1,0,',','.') .' )';
                                            }else{
                                                echo  number_format($total[$c] - $total_hpp[$c],0,',','.') ;
                                            }
                                        @endphp
                                    </b>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-2 table-responsive nopad over-x" style="font-size: 10px;margin-left: 20px;">
                <table class="table table-bordered">
                    <thead>
                        @foreach ($bulan['head'] as $i => $b)
                            <th>{{ $bulan['head'][$i] }}</th>
                        @endforeach
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    <b>{{ round($persen[$c],2) }} %</b>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ round($persen_dewasa[$c],2) }} %
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ round($persen_cwb[$c],2) }} %
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ round($persen_cnb[$c],2) }} %
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ round($persen_infant[$c],2) }} %
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    <b>{{ round($persen_hpp[$c],2)  }} %</b>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ round($persen_dewasa_hpp[$c],2)  }} %
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ round($persen_cwb_hpp[$c],2)  }} %
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ round($persen_cnb_hpp[$c],2)  }} %
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    {{ round($persen_infant_hpp[$c],2)  }} %
                                </td>
                            @endforeach
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            @foreach ($bulan['date'] as $c => $date)
                                <td align="right">
                                    <b>
                                        @php
                                            if (($persen[$c] - $persen_hpp[$c]) < 0 ) {
                                                echo '( '. number_format(($persen[$c] - $persen_hpp[$c]) * -1,0,',','.') .' ) %';
                                            }else{
                                                echo number_format($persen[$c] - $persen_hpp[$c],0,',','.') .' %';
                                            }
                                        @endphp 
                                    </b>
                                </td>
                            @endforeach
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                        </tr>
                    </tbody>
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
        location.href = '{{ url('/finance/laba_rugi') }}?start='+$('#start').val()+'&end='+$('#end').val();
    }
</script>