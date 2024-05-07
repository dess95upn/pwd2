<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1px">
    @foreach($data as $d)
        <tr>
            <td>{{ $d->ProductID }}</td>
            <td><a href="/nwind/produkdetil/{{ $d->ProductID }}">{{ $d->ProductName }}</a></td>
            <td>{{ $d->UnitPrice }}</td>
        </tr>
    @endforeach

    </table>

</body>
</html>