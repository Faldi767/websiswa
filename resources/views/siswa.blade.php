<!DOCTYPE html>
<html>
    <head>
        <title>Web Siswa</title>
    </head>
    <body>

    <h1>Data Siswa</h1>

    <ul>
        @foreach($siswa as $s)
            <li>{{ "Nama : ". $s->nama . ' | Alamat : ' . $s->alamat }}</li>
        @endforeach
    </ul>

    </body>
</html>