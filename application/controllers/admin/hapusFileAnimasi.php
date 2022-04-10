<!--variable hapus-->
<?php
	$hapus = $_GET['id'];
	unlink("img/animasi/".$hapus);
	echo "<script>window.location ='uploadDataAnimasi.php'</script>";
?>