<!DOCTYPE html>
<html>
<head>
    <title></title>
    @include('layouts._head')
    <style type="text/css">
        
	
    </style>
</head>
<body>
		@if ($img_leader != null)
	        <img src="{{ url('/storage/app/'.$img_leader) }}" width="340px" height="210px">
		@endif

        @foreach ($data as $index => $e)
            <img src="{{ url('/storage/app/'.$e->dp_image) }}" width="340px" height="210px">
        @endforeach

</body>
</html>