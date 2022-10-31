<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Absensiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <span>Absensi Siswa </span> 
                </div>
                <div class="card-body">
                    <a href="/siswa/tambah" class="btn btn-primary">Input Siswa baru</a>
                    <a href="/siswa/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
                    <a href="/dashboard" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($siswas as $p)
                            
                            <tr>
                                
                                <td>{{ $p->nis }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->kelas }}</td>
                                <td>{{ $p->jurusan }}</td>
                                <td>
                                    <a href="/siswa/hapus/{{$p->id}}" class="btn btn-warning">hapus</a>
                                </td>
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