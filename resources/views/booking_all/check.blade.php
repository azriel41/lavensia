<table class="table">
	@foreach ($data->detail_history as $val)
		<tr>
			<td>
				<div class="col-sm-6">
					<img src="{{ asset('storage/app') }}/{{ $val->dhd_image }}?{{ time() }}" width="100%">
				</div>
				<div class="col-sm-6">
					<div class="col-sm-7">
					<h4>Bank</h4>
					<h4>Nama Rekening</h4>
					<h4>Nominal Transfer</h4>
					</div>
					<div class="col-sm-5">
						<h4>: {{ $val->dhd_bank }}</h4>
						<h4>: {{ $val->dhd_nama_rekening }}</h4>
						<h4>: {{ number_format($val->dhd_nominal, 0, ",", ".") }}</h4>
					</div>
					
				</div>
			</td>
			
		</tr>
	@endforeach
</table>