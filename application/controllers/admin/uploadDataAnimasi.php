<?php
	session_start();
	
	if($_SESSION['status']!= "login")
	{
		header ("location:login.php");
	}
	$no=0;
	 include ("../connect.php");
?>
<html>

    <head>
        <title>Animasi & Sound [Upload Data]</title>
		<!-- Favicon -->
		<link rel="shortcut icon" href="..\img\icons\anime.png"/>
    </head>

    <body>
	<!--upload File Animasi-->
	<h1>Upload File Animasi</h1>
	<form enctype="multipart/form-data" action="uploadFileAnimasi.php" method="post" onsubmit="return checkSize(1048576);">
			<fieldset>
			<legend>Upload File Max 1 MB</legend>
			Choose a file to upload: 
			<input name="uploadedfile" type="file" id="fileupload"/>
			<input type="submit" value="Upload File"/>
			</fieldset>
	</form>
	<!--End of Upload-->
	
	<!--daftar upload file animasi-->
	<table border="1">
		<form action="uploadDataAnimasi.php" method="get">
		<tr>
			<td>Pencarian :</td>
			<td><input type="text" name="cari" Placeholder="Search..."></input></td>
			<td colspan=3><input type="submit" value="Cari Data"></input></td>
		</tr>
		<tr>
			<td>File Name</td>
			<td>Upload Date</td>
			<td>Type</td>
			<td>Size</td>
			<td>Aksi</td>
		</tr>
			<?php
			if($handle = opendir('./img/animasi/'))	
				{
					while(true==($file = readdir($handle)))
					{
						if($file!=="." && $file!=="..")
						{
							if(isset($_GET['cari']))
							{
								$cari=$_GET['cari'];
								if($cari==$file)
								{
									echo "<tr><td>$file</a></td>";
									echo "<td>".date("m/d/Y H:i",filemtime("img/animasi/".$file)).'</td>';
									echo "<td>.".pathinfo("img/animasi/".$file,PATHINFO_EXTENSION).'</td>';
									echo "<td>".round(filesize("img/animasi/".$file)/1024).'KB</td>';
									echo "<td><a href=\"hapusFileAnimasi.php?id=$file\">Del</a></td></tr>";
								}
							}
							else{
								echo "<tr><td>$file</a></td>";
								echo "<td>".date("m/d/Y H:i",filemtime("img/animasi/".$file)).'</td>';
								echo "<td>.".pathinfo("img/animasi/".$file,PATHINFO_EXTENSION).'</td>';
								echo "<td>".round(filesize("img/animasi/".$file)/1024).'KB</td>';
								echo "<td><a href=\"hapusFileAnimasi.php?id=$file\">Del</a></td></tr>";
							}
						}
						
					}
		
					closedir($handle);
				}			
				?>
				</form>
		</table>	
	<!--End of upload-->
	<!--upload Animasi Database-->
    <h1>Animasi</h1>
	<table>   
    <form action="" method="post" name="hari_now">
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1">Nama Animasi</span></td><td>
        <input type="text" class="form-control" aria-describedby="sizing-addon1" name="nama_animasi"></td></tr>
    
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1">Tanggal</span></td><td>
        <input type="text" class="form-control"  placeholder="Y-M-D" aria-describedby="sizing-addon1" name="tanggal"></td></tr>
   
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1">Jam</span></td><td>
        <input type="text" class="form-control"  aria-describedby="sizing-addon1" name="jam"></td></tr>
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1">Url</span></td><td>
        <input type="text" class="form-control"  aria-describedby="sizing-addon1" name="url_animasi"></td></tr>
   
	<tr><td></td><td>
       <input type="reset" value="Batal" class="btn btn-primary">
        <input type="submit" value="Simpan" class="btn btn-primary" name="btninput" ></td></tr>

    </form>
	</table>
	<script type="text/javascript">
		function waktu_now()
			{
							var x =new Date();
							var month=x.getMonth()+1;
							var year=x.getYear()+1900;
							var date=x.getDate();
							var hour=x.getHours();
							var minute=x.getMinutes();
							var second=x.getSeconds();
							if (hour<10)
								hour="0"+hour;
							if (minute<10)
								minute="0"+minute;
							if (second<10)
								second="0"+second;
						/*---------------------------*/
							if (month<10)
								month="0"+month;
							if (date<10)
								date="0"+date;
							
							document.hari_now.tanggal.value = year+"-"+month+"-"+date;
							document.hari_now.jam.value = hour+":"+minute+":"+second;
							setTimeout("waktu_now()",1000) ;
						}
						waktu_now()
						</script>

	<!--End Upload Animasi-->
	<!--Daftar Animasi-->
	<h1>Daftar Animasi</h1>
	<table border="1"> 
		<form action="uploadDataAnimasi.php" method="get">
		<tr><td></td>	
			<td colspan="2"><b>Pencarian :</td><td></td><td><input type="text" name="cari" Placeholder="Search..."></input></td>
			<td><input type="submit" value="Cari Data"></input>
		</td></tr>	
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1"><b>No</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>Nama Animasi</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>Tanggal</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>Jam</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>URL</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>Aksi</span></td></tr>
		
		<?php if(isset($_GET['cari'])){
					$cari=$_GET['cari'];
					$dataCari = mysql_query("select * from dftr_animasi where nama_animasi like '%".$cari."%'");
			  }
			  else{
					$dataCari = mysql_query("select * from dftr_animasi ORDER BY nama_animasi ASC");
			  }
			  while($row = mysql_fetch_array($dataCari)){
				  $no++;
		?>
		
		
		<tr><td>
		<span><?php echo $no;?></span></td><td>
        <span><?php echo $row['nama_animasi'];?></span></td><td>
        <span><?php echo $row['tanggal'];?></span></td><td>
        <span><?php echo $row['jam'];?></span></td><td>
		 <span><?php echo $row['url_animasi'];?></span></td><td>
		<a href="editAnimasi.php?id=<?php echo $row['id']?>">Edit</a> |
		<a href="deleteAnimasi.php?id=<?php echo $row['id']?>">Delete</a></td></tr>
		</form>
	<?php }?>
	</table>
	<!--End Daftar Animasi-->
	<br><br><br>
	<a href="logout.php">Keluar</a>
	
	
	
	
    </body>
	
</html>

<?php
//Guna isset = Kalau ada yang klik daftar
if(isset($_POST['btninput'])){
    //$_post digunakan untuk menangkap variabel
    $nama_animasi       = $_POST["nama_animasi"];
    $tanggal       = $_POST["tanggal"];
    $jam       = $_POST["jam"];
	$url_animasi = $_POST['url_animasi'];

    //Buktikan kalau variabel benar sudah dikirim

    $perintah = "INSERT INTO `dftr_animasi`(`id`, `nama_animasi`, `tanggal`,  `jam`, `url_animasi`) VALUES ('','$nama_animasi','$tanggal','$jam','$url_animasi')";

    $eksekusi = mysql_query($perintah);
    if ($eksekusi==true){
        echo "
            <script>alert('Data Telah Berhasil Di Input')</script>
            <meta http-equiv='refresh' content='0; url=uploadDataAnimasi.php'>
            ";
    }
    else{
        echo "
            <script>
                alert('Data Gagal Di Input');
                window.history.back();
            </script>

            ";
    }


}
?>