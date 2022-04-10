<?php
	session_start();
	
	if($_SESSION['status']!= "login")
	{
		header ("location:login.php");
	}

include "../connect.php";
$id = $_GET['id'];

if(isset($_POST['btnubah'])){
    $nama_sound = $_POST['nama_sound'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
	$url_sound = $_POST['url_sound'];

    $perintah = "UPDATE dftr_sound SET nama_sound='$nama_sound', tanggal='$tanggal', jam='$jam', url_sound='$url_sound' WHERE id = '$id'";
    $eksekusi = mysql_query($perintah);
    if ($eksekusi==true){
        echo "
             <script>alert('Data Berhasil Diubah')</script>
             <meta http-equiv='refresh' content='0; url=uploadDataSound.php'>
             ";
    }
    else{
        echo "
            <script>alert('Data Gagal Diubah')</script>
            <meta http-equiv='refresh' content='0; url=editSound.php'>
            ";
    }
}






?>


<html>

    <head>
        <title>Animasi & Sound [Edit Data Sound]</title>     
    </head>

    <body>

    <?php
    $query=mysql_query("select * from dftr_sound where id='$id'");
    $ambildata=mysql_fetch_object($query);

    ?>

    <h1>Data Sound</h1>
	<table>
    <form action="" method="post">
		<tr><td>
			<span class="input-group-addon" id="sizing-addon1">Nama Sound</span></td><td>
			<input type="text" class="form-control" aria-describedby="sizing-addon1" name="nama_sound" value=<?php echo $ambildata->nama_sound?>>
		</td></tr>
		<tr><td>
			<span class="input-group-addon" id="sizing-addon1">Tanggal</span></td><td>
			<input type="text" class="form-control"  aria-describedby="sizing-addon1" name="tanggal" value=<?php echo $ambildata->tanggal?>>
		</td></tr>
		<tr><td>
			<span class="input-group-addon" id="sizing-addon1">Jam</span></td><td>
			<input type="text" class="form-control"  aria-describedby="sizing-addon1" name="jam" value=<?php echo $ambildata->jam?>>
		</td></tr>
		<tr><td>
			<span class="input-group-addon" id="sizing-addon1">URL</span></td><td>
			<input type="text" class="form-control"  aria-describedby="sizing-addon1" name="url_sound" value=<?php echo $ambildata->url_sound?>>
		</td></tr>
		<tr><td></td><td>
			<input type="submit" value="Ubah" class="btn btn-primary" name="btnubah" ></td></tr>

    </form>
	</table>
    </body>

</html>