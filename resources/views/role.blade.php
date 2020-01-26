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
                    CRUD Data Role
                </div>
                <div class="card-body">
                    <a href="/role/tambah" class="btn btn-primary">Input Role Baru</a>
                    <a href="/role/trash" class="btn btn-primary">Tong Sampah</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Role</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $s)
                            <tr>
                                <td>{{ $s->nama }}</td>
                                <td>
                                    @foreach($s->role as $r)
                                        {{ $r->nama_role }},
                                    @endforeach
                                </td>
                                <td>
                                    {{ $s->role->count() }}
                                </td>
                                <td>
                                    <a href="/role/edit/{{ $r->id_role }}" class="btn btn-warning">Edit</a>
                                    <a href="/role/hapus/{{ $r->id_role }}" class="btn btn-danger">Hapus</a>
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