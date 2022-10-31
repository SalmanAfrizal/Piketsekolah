<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Form izin siswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Form izin siswa
                </div>
                <div class="card-body">
                    <a href="/izinsiswa/tambahsiswa" class="btn btn-primary">memasukan siswa</a>
                    <a href="/dashboard" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Kehadiran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($izins as $p)
                            <tr>
                                
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->kelas }}</td>
                                <td>{{ $p->jurusan }}</td>
                                <td>{{ $p->kehadiran }}</td>
                                <td>
                                    <a href="/penilaian/procces" class="btn btn-warning">process</a>
                                    <a href="/izinsiswa/hapus/{{$p->id}}" class="btn btn-danger">Hapus</a>
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