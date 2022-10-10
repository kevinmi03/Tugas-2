<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<h3>Data Hardware</h3>|
	<a href="tambah_Data.php" class="btn btn-success">
	Tambah Data</a>	

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO </th>
				<th>ID </th>
				<th>TYPE</th>
				<th>NOSERIAL </th>
				<th>HARDDRIVE</th>
				<th>MODEL </th>
				<th>RAM </th>
				<th>MANUFACTURE </th>
				<th>KATEGORI</th>
			</tr>
		</thead>
	<tbody>

<?php
include "koneksi.php";
$qry_id=mysqli_query($conn,"select  * from  Data Hardware join kategori.id_kategori=mahasiswa.id_kategori");
$no=0;
while ($Data Hardware=mysqli_fetch_array($qry_Data Hardware)) {	
$no++;?>
<tr>
	<td><?=$no?></td><td><?=$Data_Hardware['ID']?></td><td><?=$Data_Hardware['TYPE']?></td> <td><?=$Data_Hardware['NOSERIAL']?></td><td><?=$Data_Hardware['HARDDRIVE']?></td> <td>
	<td></td><?=$Data_Hardware['MODEL']?></td> <td><?$Data_Hardware['RAM']?></td><td><?=$Data_Hardware['MANUFACTURE']?></td> <td><td>
		<a href="ubah_data.php?id_id=<?=$Data_Hardrive['id_']?>" class="btn btn-success">Ubah</a>	| <a href="hapus.php?id_siswa=<?=$data_siswa['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

</tr>
<?php
}
?>
</tbody>
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>

