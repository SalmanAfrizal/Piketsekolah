<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Siswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Daftar Siswa</h4>
		
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Nis</th>
				<th>Nama</th>
				<th>kelas</th>
				<th>Jurusan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($siswas as $p)
			<tr>
				
				<td>{{$p->nis}}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->kelas}}</td>
				<td>{{$p->jurusan}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>