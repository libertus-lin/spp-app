<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['login']))  {
	$hapus = $konek -> query("DELETE FROM ortu_murid WHERE idortu = '$_GET[id]'");

	if( $hapus) {
		echo "
		<script>
		alert('data orang tua berhasil dihapus');
		document.location.href = 'dataortu.php';
		</script>
		";
	}else {
		echo "
		<script>
		alert('data orang tua ini digunakan sebagai walikelas');
		alert('data guru gagal dihapus');
		document.location.href = 'dataortu.php';
		</script>
		";
	}
}else {
	echo "
	<script>
	alert('anda tidak punya akses dihalaman ini');
	document.location.href = 'login.php';
	</script>
	";
}
