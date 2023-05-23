<?php
include 'koneksi.php';
include 'header.php';
?>

<div class="container">
	<div class="page-header">
<h2 >Tambah Orangtua Murid</h2>
</div>
<form action="" method="post">
<table class="table ">
	<tr>
		<td>Nama Orangtua</td>
		<td>
			<input class="form-control" type="text" name="guru" placeholder="Masukan Nama Orangtua">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="tambah">Simpan</button>
		</td>
	</tr>
</table>
</form>

<?php
 if ( isset($_POST['tambah']) ) {
 	$ortu = $_POST['guru'];

 	$simpan = $konek -> query("INSERT INTO ortu_murid (nama_ortu) VALUES('$ortu')");
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data orang tua berhasil ditambahkan');
 		document.location.href = 'dataortu.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data guru gagal ditambahkan');
 		document.location.href = 'dataortu.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>