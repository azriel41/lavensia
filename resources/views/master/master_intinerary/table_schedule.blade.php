<table class="table">
	@foreach ($data->schedules as $i=> $data)
		<tr>
			<td width="200"><b>DAY-{{ $i+1 }} | {{ strtoupper($data->ms_caption) }}</td>
		</tr>
		<tr>
			<td>{{ $data->ms_description }}</td>
		</tr>
	@endforeach
</table>