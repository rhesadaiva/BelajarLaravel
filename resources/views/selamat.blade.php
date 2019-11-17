<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BelajarLaravel</title>
</head>

<body>
    <h1>Selamat datang {{ $nama }}</h1>
    <p>Berikut nama pegawai di perusahaan:</p>
    <ul>
        @foreach ($pegawai as $data)
        <li>{{$data->nama_pegawai}}</li>
        @endforeach
    </ul>
</body>

</html>