<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM ortu_murid WHERE idortu ='$_GET[id]'");
include 'header.php';
?>

<div class="container">
	<div class="page-header">
<h2 >Edit Data Orang Tua</h2>
</div>
<form action="" method="post">
<table class="table">
	<?php
	while ($dta =mysqli_fetch_assoc($data) ) :
	?>
	<tr>
		<td>Nama Orang tua</td>
		<td>
			<input class="form-control" type="hidden" name="idortu" value="<?= $dta['idortu'] ?>">
			<input class="form-control" type="text" name="ortu" value="<?= $dta['nama_ortu'] ?>" size = "30">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="ubah">Update</button>
		</td>
	</tr>
</table>
</form>
<?php endwhile; ?>
</body>
</html>
<?php
 if ( isset($_POST['ubah']) ) {
 	$id   = $_POST['idortu']; 
 	$ortu = $_POST['ortu'];

 	$ubah = $konek -> query("UPDATE ortu_murid SET nama_ortu = '$ortu' WHERE idortu = ".$id);
 	if( $ubah ){
 		echo "
 		<script>
 		alert('data orang tua berhasil diedit');
 		document.location.href = 'dataortu.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data orang tua gagal diedit');
 		document.location.href = 'dataortu.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>