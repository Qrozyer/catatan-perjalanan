<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
</head>
<body>
    <h1>Input Data</h1>
        <form action="/input-store" method="post">
            @csrf
            <label for="tanggal">Tanggal</label><br>
            <input type="date" name="tanggal" id="tanggal"><br>
            <label for="waktu">Waktu</label><br>
            <input type="time" name="waktu" id="waktu"><br>
            <label for="lokasi">Lokasi</label><br>
            <input type="text" name="lokasi" id="lokasi"><br>
            <label for="suhu_tubuh">Suhu Tubuh</label><br>
            <input type="text" name="suhu_tubuh" id="suhu_tubuh"><br>
            <button type="submit">Submit</button><br><br>
        </form>
</body>
</html>
