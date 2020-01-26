<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Web Siswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Siswa
                </div>
                <div class="card-body">
                    <a href="/siswa/tambah" class="btn btn-primary">Input Siswa Baru</a>
                    <a href="/siswa/trash" class="btn btn-primary">Tong Sampah</a>
                    <br/>
                    <br/>
                    <a href="/siswa/kembalikan_semua" class="btn btn-primary">Kembalikan Semua</a>
                    <a href="/siswa/hapuspermanen_semua" class="btn btn-primary">Hapus Permanen Semua</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $s)
                            <tr>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->alamat }}</td>
                                <td>
                                    <a href="/siswa/kembalikan/{{ $s->id }}" class="btn btn-warning">Restore</a>
                                    <a href="/siswa/hapuspermanen/{{ $s->id }}" class="btn btn-danger">Hapus Permanen</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>