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
        <title>Animasi & Sound [Upload Data Sound]</title>
		<!-- Favicon -->
		<link rel="shortcut icon" href="..\img\icons\anime.png"/>
    </head>

    <body>
	<!--upload File Sound-->
	<h1>Upload File Sound</h1>
	<form enctype="multipart/form-data" action="uploadFileSound.php" method="post" onsubmit="return checkSize(1048576);">
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
		<form action="uploadDataSound.php" method="get">
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
			if($handle = opendir('./music-files/sound/'))	
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
									echo "<td>".date("m/d/Y H:i",filemtime("music-files/sound/".$file)).'</td>';
									echo "<td>.".pathinfo("music-files/sound/".$file,PATHINFO_EXTENSION).'</td>';
									echo "<td>".round(filesize("music-files/sound/".$file)/1024).'KB</td>';
									echo "<td><a href=\"hapusFileSound.php?id=$file\">Del</a></td></tr>";
								}
							}
							else{
								echo "<tr><td>$file</a></td>";
								echo "<td>".date("m/d/Y H:i",filemtime("music-files/sound/".$file)).'</td>';
								echo "<td>.".pathinfo("music-files/sound/".$file,PATHINFO_EXTENSION).'</td>';
								echo "<td>".round(filesize("music-files/sound/".$file)/1024).'KB</td>';
								echo "<td><a href=\"hapusFileSound.php?id=$file\">Del</a></td></tr>";
							}
						}	
					}
					closedir($handle);
				}			
			?>
		</form>
	</table>	
	<!--End of upload-->
    <h1>Sound</h1>
	<table>   
    <form action="" method="post" name="hari_now">
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1">Nama Sound</span></td><td>
        <input type="text" class="form-control" aria-describedby="sizing-addon1" name="nama_sound"></td></tr>
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1">Tanggal</span></td><td>
        <input type="text" class="form-control"  placeholder="Y-M-D" aria-describedby="sizing-addon1" name="tanggal"></td></tr>
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1">Jam</span></td><td>
        <input type="text" class="form-control"  aria-describedby="sizing-addon1" name="jam"></td></tr>
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1">Url</span></td><td>
        <input type="text" class="form-control"  aria-describedby="sizing-addon1" name="url_sound"></td></tr>
   
    <br>
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

	<h1>Daftar Sound</h1>
	<table border="1"> 
		<form action="uploadDataSound.php" method="get">
		<tr><td></td>	
			<td colspan="2"><b>Pencarian :</td>
			<td></td>
			<td><input type="text" name="cari" Placeholder="Search..."></input></td>
			<td><input type="submit" value="Cari Data"></input>
		</td></tr>	
		<tr><td>
        <span class="input-group-addon" id="sizing-addon1"><b>Id</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>Nama Sound</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>Tanggal</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>Jam</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>URL</span></td><td>
		<span class="input-group-addon" id="sizing-addon1"><b>Aksi</span></td></tr>
		
		<?php if(isset($_GET['cari'])){
					$cari=$_GET['cari'];
					$dataCari = mysql_query("select * from dftr_sound where nama_sound like '%".$cari."%'");
			  }
			  else{
					$dataCari = mysql_query("select * from dftr_sound ORDER BY nama_sound ASC");
			  }
			  while($row = mysql_fetch_array($dataCari)){$no++;
		?>
		
    
		<tr><td>
		<span><?php echo $no?></span></td><td>
        <span><?php echo $row['nama_sound'];?></span></td><td>
        <span><?php echo $row['tanggal'];?></span></td><td>
        <span><?php echo $row['jam'];?></span></td><td>
		 <span><?php echo $row['url_sound'];?></span></td><td>
		<a href="editSound.php?id=<?php echo $row['id']?>">Edit</a> |
		<a href="deleteSound.php?id=<?php echo $row['id']?>">Delete</a></td></tr>
		</form>
	<?php }?>
	</table>
	<br><br><br>
	<a href="logout.php">Keluar</a>
    </body>
	
</html>

<?php
//Guna isset = Kalau ada yang klik daftar
if(isset($_POST['btninput'])){
    //$_post digunakan untuk menangkap variabel
    $nama_sound       = $_POST["nama_sound"];
    $tanggal       = $_POST["tanggal"];
    $jam       = $_POST["jam"];
	$url_sound = $_POST['url_sound'];
	
    //Buktikan kalau variabel benar sudah dikirim

    $perintah = "INSERT INTO `dftr_sound`(`id`, `nama_sound`, `tanggal`,  `jam`, `url_sound`) VALUES ('','$nama_sound','$tanggal','$jam','$url_sound')";

    $eksekusi = mysql_query($perintah);
    if ($eksekusi==true){
        echo "
            <script>alert('Data Telah Berhasil Di Input')</script>
            <meta http-equiv='refresh' content='0; url=uploadDataSound.php'>
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