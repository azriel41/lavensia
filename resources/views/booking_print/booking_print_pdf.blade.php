<table class="table table-bordered intinerary" border="1px" style="width: 100%;vertical-align: middle;">
    <tr>
        <td height="100" width="30%" style="padding-left: 10px;">Flight Detail</td>
        @foreach ($flight as $f)
        <td>{{ $f->fd_nomor }} | {{ date('d-M',strtotime($f->fd_tanggal)) }} | {{ $f->fd_route }} | {{ $f->fd_time }}</td>
        @endforeach

    </tr> 
</table>
<br>

<table class="table table-bordered intinerary" border="1px" style="width: 100%;vertical-align: middle;" >
        <tr style="vertical-align: middle; border: 1px solid black">
            <th class="center row2">No</th>
            <th class="center row2">Passenger Name</th>
            <th class="center row2">Passport</th>
            <th class="center row2" colspan="4">Pembagian Kamar</th>
        </tr>
        @php
            $temp = 0;
        @endphp
        @if ($id == null)
            <tr>
                <td colspan="10" style="vertical-align: middle !important; text-align: center">TIDAK ADA DATA</td>
            </tr>
        @endif
        @foreach ($id as $i=>$awal)
            @foreach ($room[$i] as $a=>$awal1)
                <tr class="bor-top">
                    <td align="center">
                        @foreach ($passenger as $akhir)
                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                @if ($akhir->dp_status_person == 'child')
                                    <label style="padding-left: 10px !important">{{ $temp +=1 }}</label><span class="dot" ></span><br>
                                @elseif($akhir->dp_status_person == 'baby')
                                    <label style="padding-left: 10px !important">{{ $temp +=1 }}</label><span class="dot1" ></span><br>
                                @else
                                    <label>{{ $temp +=1 }}</label><span class=""></span><br>
                                @endif
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($passenger as $akhir)
                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)

                                <label class="kena_dot">{{ $akhir->dp_name }}</label><br>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($passenger as $akhir)
                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                <label class="kena_dot">{{ $akhir->dp_passport }}</label><br>
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @php
                            $temp1 = 0;
                        @endphp
                        @foreach ($passenger as $akhir)
                            @if ($id[$i] == $akhir->dp_booking_id and $room[$i][$a] == $akhir->dp_room)
                                @if ($temp1 == 0)
                                    @if ($bed[$i][$a] == 'doubletwin&cnb')
                                    <label class="kena_dot">double/twin + child no bed</label><br>
                                    @elseif ($bed[$i][$a] == 'doubletwin&cwb')
                                    <label class="kena_dot">double/twin + child with bed</label><br>
                                    @else
                                    <label class="kena_dot">{{ $bed[$i][$a] }}</label><br>
                                    @endif
                                    @php
                                        $temp1 = 1;
                                    @endphp
                                @endif
                            @endif
                        @endforeach
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    
                </tr>
            @endforeach
        @endforeach
        <tr>
            
        </tr>
    </table>