<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Description</th>
		</tr>
		@foreach ($data as $in => $element)
		<tr>
			<td>Day{{ $in }}</td>
		</tr>
		@endforeach
		
	</table>
</body>
</html>