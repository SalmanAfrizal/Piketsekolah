<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data siswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data siswa <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/dashboard" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/siswa/store">
 
                        @csrf

                        <div class="form-group">
                            <label>Nis</label>
                            <input type="text" name="nis" class="form-control" placeholder="Nismu ..">
 
                            @if($errors->has('nis'))
                                <div class="text-danger">
                                    {{ $errors->first('nis')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Namamu ..">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" placeholder="kelasmu ..">
 
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
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>