<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<h3>Tambah Data Mahasiswa</h3>
	<form action="proses_tambah_mahasiswa.php" method="post">
		Nama :
		<input type="text" name="nama" value="" class="form-control">
		Nim :
		<input type="date" name="nim" value="" class="form-control">
		Alamat :
		<textarea name="alamat" class="form-control" rows="4"></textarea>
		Username :
		<input type="text" name="username" value="" class="form-control">
		Password :
		<input type="password" name="password" value="" class="form-control">
		Jurusan :
		<select name="id_jurusan" class="form-control">
			<option></option>
			<?php
			include "koneksi.php";
			$gry_jurusan=mysqli_query($conn,"select * form jurusan");
			while ($data_jurusan=mysqli_fetch_array($gry_jurusan)) {
				echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['id_jurusan'].'</option>';
			}
			?>
		</select>
		<input type="submit" name="simpan" value="Tambah Data" class="btn btn-primery">
	</form>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</body>
	</html>










