<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $data->ProductName }}</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>{{ $data->UnitPrice }}</td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>{{ $data->CategoryID }}</td>
        </tr>
    </table>
</body>
</html>