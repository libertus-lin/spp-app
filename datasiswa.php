<?php 
include 'koneksi.php';

include 'header.php';
 ?>
<div class="container">
	<div class="page-header">
<h2> Data Siswa</h2>
	</div>
<a class="btn btn-primary " href="tambahSW.php">Tambah Data</a>
 <br/> <br>
 <table class="table table-bordered table-striped">
 	<tr>
 		<th>No</th>
 		<th>Kelas</th>
 		<th>NIS</th>
 		<th>Nama Siswa</th>
 		<th>Tahun Ajaran</th>
		<th>Biaya</th>
		<th>Aksi</th>
 	</tr>
 	<?php 
 	$data = $konek ->query("SELECT * FROM siswa ORDER BY idsiswa ASC");
 	$i=1;
 	while ($dta = mysqli_fetch_assoc($data) ) : 
 	 ?>
 	 <tr>
 	 	<td><?= $i; ?></td>
 	 	<td><?= $dta['kelas'] ?></td>
 	 	<td><?= $dta['nis'] ?></td>
 	 	<td><?= $dta['namasiswa'] ?></td>
 	 	<td><?= $dta['tahunajaran'] ?></td>
 	 	<td><?= $dta['biaya'] ?></td>
 	 	<td>
 	 		<a class="btn btn-warning btn-sm" href="ubahSW.php?id=<?= $dta['idsiswa'] ?>">edit</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapusSW.php?id=<?= $dta['idsiswa'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data? data SPP Siswa yang bersangkutan akan ikut terhapus')">hapus</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
 <p align="center" style="font-family: arial; color: red; size: 10px;">Menghapus Data Siswa Maka Akan menghapus Data Pembayaran dan data tagihan Siswa pada tabel SPP</p>
 </div>
 <?php include 'footer.php'; ?>