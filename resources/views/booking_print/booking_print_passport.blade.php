<!DOCTYPE html>
<html>
<head>
    <title></title>
    @include('layouts._head')
    <style type="text/css">
        

    </style>
</head>
<body>
        @foreach ($data as $index => $e)
            <img src="{{ url('/storage/app/'.$e->dp_image) }}" width="345px" height="230px">
        @endforeach

</body>
</html>