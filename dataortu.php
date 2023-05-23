<?php include 'header.php'; ?>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> Data Orang tua Murid</h2>
	</div>
<a class="btn btn-primary " href="tambahOrtu.php">Tambah Data</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>No</th>
 		<th>Nama Ortu</th>
		<th>Aksi</th>
 	</tr>
 	<?php 
 	include 'koneksi.php';
	$data = $konek -> query("SELECT * FROM ortu_murid ORDER BY idortu DESC");	
 	$i=1; 
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td><?= $dta['nama_ortu'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="ubahOrtu.php?id=<?= $dta['idortu'] ?>">edit</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapusOrtu.php?id=<?= $dta['idortu'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data?')">hapus</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
<?php include 'footer.php'; ?>