<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catatan Perjalanan</title>
</head>
<body>
    <h4>Catatan Perjalanan</h4>
    @foreach ($datas as $data)
        <p><?="$loop->iteration. Tanggal :    " . $data->tanggal ?></p>
        <p><?="Waktu   :    " . $data->waktu ?></p>
        <p><?="Lokasi  :    " . $data->lokasi ?></p>
        <p><?="Suhu tubuh : " . $data->suhu_tubuh ?></p>
        <a href="/home/{{ $data->id }}">Detail</a>
        <br>
    @endforeach
</body>
</html>
