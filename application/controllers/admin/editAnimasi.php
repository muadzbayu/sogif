<?php
	session_start();
	
	if($_SESSION['status']!= "login")
	{
		header ("location:login.php");
	}

include "../connect.php";
$id = $_GET['id'];

if(isset($_POST['btnubah'])){
    $nama_animasi = $_POST['nama_animasi'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
	$url_animasi = $_POST['url_animasi'];

    $perintah = "UPDATE dftr_animasi SET nama_animasi='$nama_animasi', tanggal='$tanggal', jam='$jam', url_animasi='$url_animasi' WHERE id = '$id'";
    $eksekusi = mysql_query($perintah);
    if ($eksekusi==true){
        echo "
             <script>alert('Data Berhasil Diubah')</script>
             <meta http-equiv='refresh' content='0; url=uploadDataAnimasi.php'>
             ";
    }
    else{
        echo "
            <script>alert('Data Gagal Diubah')</script>
            <meta http-equiv='refresh' content='0; url=editAnimasi.php'>
            ";
    }
}






?>


<html>

    <head>
        <title>Animasi & Sound [Edit Data Animasi]</title>     
    </head>

    <body>

    <?php
    $query=mysql_query("select * from dftr_animasi where id='$id'");
    $ambildata=mysql_fetch_object($query);

    ?>

    <h1>Data Animasi</h1>
	<table>
    <form action="" method="post">
		<tr><td>
			<span class="input-group-addon" id="sizing-addon1">Nama Animasi</span></td><td>
			<input type="text" class="form-control" aria-describedby="sizing-addon1" name="nama_animasi" value=<?php echo $ambildata->nama_animasi?>></td></tr>
		<tr><td>
			<span class="input-group-addon" id="sizing-addon1">Tanggal</span></td><td>
			<input type="text" class="form-control"  aria-describedby="sizing-addon1" name="tanggal" value=<?php echo $ambildata->tanggal?>></td></tr>
		<tr><td>
			<span class="input-group-addon" id="sizing-addon1">Jam</span></td><td>
			<input type="text" class="form-control"  aria-describedby="sizing-addon1" name="jam" value=<?php echo $ambildata->jam?>></td></tr>
		<tr><td>
			<span class="input-group-addon" id="sizing-addon1">URL</span></td><td>
			<input type="text" class="form-control"  aria-describedby="sizing-addon1" name="url_animasi" value=<?php echo $ambildata->url_animasi?>></td></tr>
		<tr><td></td><td>
			<input type="submit" value="Ubah" class="btn btn-primary" name="btnubah" ></td></tr>

    </form>
	</table>
    </body>

</html>