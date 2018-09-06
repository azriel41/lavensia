<table class="table table-bordered intinerary" style="width: 100%;">
    <tr>
       <th align="left"> INVOICE </th>
       <th align="center" rowspan="3">ss</th>
       <th align="right">OKE-TRIP 2</th>
   </tr>
    <tr>
       <th align="left">Due Date :  </th>
       <th align="right">OKE-TRIP4</th>
   </tr>
    <tr>
       <th align="left">Printed : <?php echo date('d F, Y') ?></th>
       <th align="right">OKE-TRIP6</th>
   </tr>
</table>
<table class="table table-bordered intinerary" style="width: 100%;">
   <tr>
       <th align="center">OKE-TRIP Tour & Travel</th>
   </tr>
   <tr>
       <th align="center">Jl. Nginden Intan Raya no.7 Surabaya 60118</th>
   </tr>
</table>
<br>
<br>
<table boder="1" class="table table-bordered intinerary" style="width: 100%;">
   <tr style="background-color: #5bc0de">
       <th align="left" height="30px">Name</th>
       <th align="left">Description</th>
       <th align="left">Booking Code</th>
       <th align="left">Total</th>
   </tr>

   @foreach ($data as $i => $dt)
    @foreach ($add_book as $e => $ab)
   		@if ($dt->dp_name == $ab->da_name)
   			<tr>
		       <td align="left">{{ $dt->dp_name }}</td>
		       <td align="left">{{ $dt->dp_bed }}</td>
		       <td align="left">{{ $dt->db_kode_transaksi }}</td>
		       @if ($dt->dp_status_person == 'adult')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_adult_price,0,'','.') }}</th>
		       @elseif ($dt->dp_status_person == 'child')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_child_price,0,'','.') }}</th>
		       @elseif ($dt->dp_status_person == 'baby')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_infant_price,0,'','.') }}</th>
		       @endif
		   </tr>
		   <tr>
	   			<td style="border-bottom: 1px solid #ddd" colspan="4"></td>
	   	   </tr>
		   <tr>
		       <td align="left" style="padding-left: 20px;">{{ $ab->ma_name }}</td>
		       <td align="left">{{ $ab->ma_desc }}</td>
		       <td align="left"></td>
		       <th align="right"><span style="float: left">IDR </span>{{ number_format($ab->da_price,0,'','.') }}</th>
		   </tr>
		   @endif
		{{-- @if  ($dt->dp_name != $ab->da_name)
			<tr>
		       <td align="left">{{ $dt->dp_name }}</td>
		       <td align="left">{{ $dt->dp_bed }}</td>
		       <td align="left">{{ $dt->db_kode_transaksi }}</td>
		       @if ($dt->dp_status_person == 'adult')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_adult_price,0,'','.') }}</th>
		       @elseif ($dt->dp_status_person == 'child')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_child_price,0,'','.') }}</th>
		       @elseif ($dt->dp_status_person == 'baby')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_infant_price,0,'','.') }}</th>
		       @endif
		   </tr>
   		@endif --}}
	   {{-- <tr>
	   		<th style="border-bottom: 1px solid #ddd" colspan="4"></th>
	   </tr> --}}
    @endforeach
   @endforeach
</table>
<br>

<table class="table table-bordered intinerary" style="width: 100%;vertical-align: middle;" >
   <tr style="background-color: #5bc0de">
       <th align="left" width="65%">Terbilang </th>
       <th align="center">Additional</th>
       <th align="right"><span style="float: left">IDR </span>{{ number_format($total_add ,0,'','.') }}</th>
   </tr>
    <tr style="background-color: #5bc0de">
       <th align="left" style="background-color: white"></th>
       <th align="left">total</th>
       <th align="right"><span style="float: left">IDR </span>{{ number_format($total_pax ,0,'','.') }}</th>
   </tr>
   <tr style="background-color: #5bc0de">
       <th align="left" style="background-color: white"></th>
       <th align="left">Grand total</th>
       <th align="right"><span style="float: left">IDR </span>{{ number_format($grand_total ,0,'','.') }}</th>
   </tr>
</table>
<br>
<table class="table table-bordered intinerary"style="width: 100%;vertical-align: middle;font-size: 13px" >
   <tr>
       <th align="left" width="90%">Pembayaran Ke</th>
       <td align="center" rowspan="3" valign="top">Terima kasih</td>
   </tr>
   <tr>
       <td align="left">Rek IDR: Bank BCA Cabang Darmo No.0881573163 a/n Thereescia Irawan</td>
   </tr>
   <tr>
       <td align="left">Rek IDR: Bank BCA No.0885120020 a/n Thereescia Irawan</td>
   </tr>
   <tr>
       <td align="left">Solution For Your Vacation</td>
       <td align="center">Ms.indah</td>
   </tr>
</table>

