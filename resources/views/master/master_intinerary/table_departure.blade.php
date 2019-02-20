<table class="table depart">
	<thead>
		<th>Code Tour</th>
		<th>Start</th>
		<th>End</th>
		<th>Adult Price</th>
		<th>CnB Price</th>
		<th>CwB Price</th>
		<th>Infant Price</th>
		<th>Seat</th>
		<th>Seat Remain</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		@foreach ($data->detail_intinerarys->sortBy('md_start') as $data)
		<tr>
			<td><a onclick="" href="{{ route('intinerary_detail',['id'=>$data->md_id]) }}">{{ $data->md_nota }}</a></td>
			<td>{{ Carbon\carbon::parse($data->md_start)->format('d-m-Y') }}</td>
			<td>{{ Carbon\carbon::parse($data->md_end)->format('d-m-Y') }}</td>
			<td>{{ number_format($data->md_adult_price, 2, ",", ".") }}</td>
			<td>{{ number_format($data->md_child_price, 2, ",", ".") }}</td>
			<td>{{ number_format($data->md_child_w_price, 2, ",", ".") }}</td>
			<td>{{ number_format($data->md_infant_price, 2, ",", ".") }}</td>
			<td>{{ $data->md_seat }}</td>
			<td style="width: 10%">
				<input type="text" value="{{ $data->md_seat_remain }}" class="md_seat_remain form-control" name="md_seat_remain" style="width: 100%">
				<input type="hidden" value="{{ $data->md_nota }}" class="md_nota form-control" name="md_nota" style="width: 100%">
			</td>
			<td>
				<button type="button" class="waves-effect waves-block btn bg-cyan" onclick="rubahSeat(this)"><i class="material-icons">check</i></button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<script type="text/javascript">
	$('.depart').DataTable({
		// paging:false,
		ordering:false,
		searching:false,
	})

	function rubahSeat(child) {
		var par = $(child).parents('tr');
		var md_seat_remain = $(par).find('.md_seat_remain').val();
		var md_nota = $(par).find('.md_nota').val();
		$.ajax({
	        url:'{{ route('rubah_seat') }}',
	        data:{md_seat_remain,md_nota},
	        dataType:'json',
	        success:function(data){
	            iziToast.success({
                    message: 'Success Changing Data!',
                    position:'topRight',
                    iconText:'fa fa-warning'
                });
	        },
	        error:function(){
	        	rubahSeat(child);
	        }
	    })
	}
</script>