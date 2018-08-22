<!DOCTYPE html>
<html>
<head>
    <title></title>
    @include('layouts._head')
    <style type="text/css">
        

    </style>
</head>
<body>

    <table class="table table-bordered">
        <tr>
            <th height="150px" align="center">Flight Detail</th>
            <th align="center" colspan="6">Flight Detail</th>
        </tr>
        <tr align="center">
            <th>No</th>
            <th>Name Of Passenger</th>
            <th>No Passport</th>
            <th colspan="4">Pembagian Kamar</th>
        </tr>
        @foreach ($data as $index => $e)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $e->dp_name }}</td>
                <td>{{ $e->dp_passport }}</td>
                <td>{{ $e->dp_bed }}</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        @endforeach
    </table>

    <div>
        
        <table class="table">
        <tr>
            <th align="center">Twin</th>
            <td>: 1</td>
        </tr>
        <tr>
            <th>Double</th>
            <td>: 1</td>
        </tr>
    </table>

    </div>

</body>
</html>