<!DOCTYPE html>
<html>
<head>
	<title>Praktikum Web Lanjut : Model</title>
</head>
<body>
 
<h1>Data Pegawai</h1>
<h3>Pranata Dito Fitriyansyah</h3>
 
<ul>
	@foreach($pegawai as $p)
		<li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
	@endforeach
</ul>
 
</body>
</html>