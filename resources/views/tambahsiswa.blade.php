<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Laporan Siswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    LaporanSiswa <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/izinsiswa" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/izinsiswa/store">
 
                        @csrf
 
                        

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama siswa ..">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Kelas</label>
                            <select name="kelas" class="form-control" placeholder="masukan kelasmu ..">
                                <option>X</option>
                                <option>IX</option>
                                <option>IIX</option>
                            </select>
 
                             @if($errors->has('kelas'))
                                <div class="text-danger">
                                    {{ $errors->first('kelas')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Jurusan</label>
                            <select name="jurusan" class="form-control">
                                <option>Rekayasa perangkat lunak</option>
                                <option>MultiMedia</option>
                            </select>
 
                             @if($errors->has('jurusan'))
                                <div class="text-danger">
                                    {{ $errors->first('jurusan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Kehadiran</label>
                            <select name="kehadiran" class="form-control">
                                <option>Masuk</option>
                                <option>Sakit</option>
                                <option>Alpa</option>
                            </select>
 
                             @if($errors->has('kehadiran'))
                                <div class="text-danger">
                                    {{ $errors->first('kehadiran')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>


