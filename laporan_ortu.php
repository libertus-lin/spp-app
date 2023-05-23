<?php 
session_start();
if(isset($_SESSION['login']) ) {
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Orang Tua</title>
	<hr/>
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<b>LAPORAN DATA SISWA</b>
	<br>
	<hr/>
	
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>NO</th>
		<!-- <th>ID</th> -->
		<th>Nama Orang Tua</th>
	</tr>
	<?php 
	$data = $konek -> query("SELECT * FROM ortu_murid ORDER BY idortu ASC ");
	$i=1;
	while ($dta = mysqli_fetch_assoc($data)) :
	 ?>
	<tr>
		<td align="center"><?= $i ?></td>
		<!-- <td align="center"><?= $dta['idortu'] ?></td> -->
		<td align=""><?= $dta['nama_ortu'] ?></td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<p>Dermayu , <?= date('d/m/y') ?> <br/>
				Operator,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>


	<a href="#" onclick="window.print();"><button  class="print">Cetak</button></a>
	<a href="laporan.php"><button>Kembali</button></a>
</body>
</html>


<?php 
} else {
	header("location : login.php");
}
?>