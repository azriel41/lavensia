<table class="table table-bordered intinerary" style="width: 100%;">
   <tr>
       <th align="left">INVOICE </th>
       <th align="center" rowspan="3">OKE-TRIP</th>
       <th align="right">OKE-TRIP</th>
   </tr>
    <tr>
       <th align="left">OKE-TRIP</th>
       <th align="right">OKE-TRIP</th>
   </tr>
    <tr>
       <th align="left">OKE-TRIP</th>
       <th align="right">OKE-TRIP</th>
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
   <tr style="background-color: red;">
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
		       		<th align="right"><span style="float: left">Rp. </span>{{ number_format($dt->md_adult_price,0,'','.') }}</th>
		       @elseif ($dt->dp_status_person == 'child')
		       		<th align="right"><span style="float: left">Rp. </span>{{ number_format($dt->md_child_price,0,'','.') }}</th>
		       @elseif ($dt->dp_status_person == 'baby')
		       		<th align="right"><span style="float: left">Rp. </span>{{ number_format($dt->md_infant_price,0,'','.') }}</th>
		       @endif
		   </tr>
		   <tr>
	   			<td style="border-bottom: 1px solid red" colspan="4"></td>
	   	   </tr>
		   <tr>
		       <td align="left" style="padding-left: 20px;">{{ $ab->ma_name }}</td>
		       <td align="left">{{ $ab->ma_desc }}</td>
		       <td align="left"></td>
		       <th align="right"><span style="float: left">Rp. </span>{{ number_format($ab->da_price,0,'','.') }}</th>
		   </tr>
		@else 
			<tr>
		       <td align="left">{{ $dt->dp_name }}</td>
		       <td align="left">{{ $dt->dp_bed }}</td>
		       <td align="left">{{ $dt->db_kode_transaksi }}</td>
		       @if ($dt->dp_status_person == 'adult')
		       		<th align="right"><span style="float: left">Rp. </span>{{ number_format($dt->md_adult_price,0,'','.') }}</th>
		       @elseif ($dt->dp_status_person == 'child')
		       		<th align="right"><span style="float: left">Rp. </span>{{ number_format($dt->md_child_price,0,'','.') }}</th>
		       @elseif ($dt->dp_status_person == 'baby')
		       		<th align="right"><span style="float: left">Rp. </span>{{ number_format($dt->md_infant_price,0,'','.') }}</th>
		       @endif
		   </tr>
   		@endif
	   <tr>
	   		<th style="border-bottom: 1px solid red" colspan="4"></th>
	   </tr>
   	@endforeach
   @endforeach
   
</table>
<br>

<table class="table table-bordered intinerary" style="width: 100%;vertical-align: middle;" >
      
            
</table>