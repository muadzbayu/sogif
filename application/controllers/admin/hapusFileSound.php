<!--variable hapus-->
<?php
	$hapus = $_GET['id'];
	unlink("music-files/sound/".$hapus);
	echo "<script>window.location ='uploadDataSound.php'</script>";
?>