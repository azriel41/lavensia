<style type="text/css">
  
  table td{
    font-size: 11px;
  }
  table th {
    font-size: 12px;
  }
  
  p{
    margin: 0px 0px 0px 0px;
  }

</style>
<table class="table table-bordered intinerary" style="width: 100%;">
    <tr>
       <th align="left" width="40%"> INVOICE </th>
       <th align="center" rowspan="3" ><img src="{{ asset('assets_frontend_2/img/logo.png') }}" style="
    width: 120px;
"></th>
       <th align="right">CC : {{ $data[0]->co_name }}</th>
   </tr>
    <tr>
       <th align="left">Due Date :  {{ $data[0]->md_start }}</th>
       <th align="right">Phone : {{ $data[0]->co_phone }}</th>
   </tr>
    <tr>
       <th align="left">Printed : <?php echo date('d F, Y') ?></th>
       <th align="right">Address : {{ $data[0]->co_address }}</th>
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
  <thead>
   <tr style="background-color: #5bc0de">
       <th align="left" width="30px">Name</th>
       <th align="left">Description</th>
       <th align="left">Booking Code</th>
       <th align="left">Total</th>
   </tr>
   </thead>
   @foreach ($data as $i => $dt)
   			<tr @if ((($i+1)/5) == 1) style="page-break-after:always;" @endif>
             <td  align="left" style="padding-left: 20px;">
                <p>{{ $dt->dp_name }}<br>
                @foreach ($add_book as $e => $ab)
                  @if ($dt->dp_name == $ab->da_name)
                  {{ $ab->ma_name }}
                  @endif
                @endforeach
                </p>
            </td>
            <td align="left" style="padding-left: 20px;">
                {{ $dt->dp_bed }}<br>
            </td>
		       <td align="left">{{ $dt->db_kode_transaksi }}</td>
		       @if ($dt->dp_status_person == 'adult')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_adult_price,0,'','.') }}
              <br>
                 @foreach ($add_book as $e => $ab)
                  @if ($dt->dp_name == $ab->da_name)
                  <span style="float: left">IDR </span>{{ number_format($ab->da_price,0,'','.') }}<br>
                  @endif
                @endforeach
              </th>
		       @elseif ($dt->dp_status_person == 'child')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_child_price,0,'','.') }}
                <br>
                 @foreach ($add_book as $e => $ab)
                  @if ($dt->dp_name == $ab->da_name)
                  <span style="float: left">IDR </span>{{ number_format($ab->da_price,0,'','.') }}<br>
                  @endif
                @endforeach
              </th>
		       @elseif ($dt->dp_status_person == 'baby')
		       		<th align="right"><span style="float: left">IDR </span>{{ number_format($dt->md_infant_price,0,'','.') }}
                <br>
                 @foreach ($add_book as $e => $ab)
                  @if ($dt->dp_name == $ab->da_name)
                  <span style="float: left">IDR </span>{{ number_format($ab->da_price,0,'','.') }}<br>
                  @endif
                @endforeach
              </th>
		       @endif
		   </tr>
		   <tr>
	   			<td style="border-bottom: 1px solid #ddd" colspan="4"></td>
   	   </tr>
   
   @endforeach
   <tfoot>
       <tr style="background-color: #5bc0de">
           <th align="left" width="50%" colspan="2">Terbilang </th>
           <th align="center" >Additional</th>
           <th align="right"><span style="float: left">IDR </span>{{ number_format($total_add ,0,'','.') }}</th>
       </tr>
        <tr style="background-color: #5bc0de">
           <th align="left" style="background-color: white" colspan="2"></th>
           <th align="left">total</th>
           <th align="right"><span style="float: left">IDR </span>{{ number_format($total_pax ,0,'','.') }}</th>
       </tr>
       <tr style="background-color: #5bc0de">
           <th align="left" style="background-color: white" colspan="2"></th>
           <th align="left">Tips</th>
           <th align="right"><span style="float: left">IDR </span>{{ number_format($tips ,0,'','.') }}</th>
       </tr>
       <tr style="background-color: #5bc0de">
           <th align="left" style="background-color: white" colspan="2"></th>
           <th align="left">Agent Com</th>
           <th align="right"><span style="float: left">IDR </span>{{ number_format($agen_com ,0,'','.') }}</th>
       </tr>
       <tr style="background-color: #5bc0de">
           <th align="left" style="background-color: white" colspan="2"></th>
           <th align="left">Tax</th>
           <th align="right"><span style="float: left">IDR </span>{{ number_format($tax ,0,'','.') }}</th>
       </tr>
       <tr style="background-color: #5bc0de">
           <th align="left" style="background-color: white" colspan="2"></th>
           <th align="left">Visa</th>
           <th align="right"><span style="float: left">IDR </span>{{ number_format($visa ,0,'','.') }}</th>
       </tr>
       <tr style="background-color: #5bc0de">
           <th align="left" style="background-color: white" colspan="2"></th>
           <th align="left">Grand total</th>
           <th align="right"><span style="float: left">IDR </span>{{ number_format($grand_total ,0,'','.') }}</th>
       </tr>
   </tfoot>
</table>
<br>

<table class="table table-bordered intinerary" style="width: 100%;vertical-align: middle;" >
  
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

