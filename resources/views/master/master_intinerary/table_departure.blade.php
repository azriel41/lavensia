<table class="table depart">
	<thead>
		<th>Code Tour</th>
		<th>Start</th>
		<th>End</th>
		<th>Adult Price</th>
		<th>Child Price</th>
		<th>Infant Price</th>
		<th>Seat</th>
	</thead>
	<tbody>
		@foreach ($data->detail_intinerarys as $data)
		<tr>
			<td>{{ $data->md_nota }}</td>
			<td>{{ Carbon\carbon::parse($data->md_start)->format('d-m-Y') }}</td>
			<td>{{ Carbon\carbon::parse($data->md_end)->format('d-m-Y') }}</td>
			<td>{{ number_format($data->md_adult_price, 2, ",", ".") }}</td>
			<td>{{ number_format($data->md_child_price, 2, ",", ".") }}</td>
			<td>{{ number_format($data->md_infant_price, 2, ",", ".") }}</td>
			<td>{{ $data->md_seat_remain }}/{{ $data->md_seat }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<script type="text/javascript">
	$('.depart').DataTable({
		// paging:false,
		searching:false,
	})
</script>