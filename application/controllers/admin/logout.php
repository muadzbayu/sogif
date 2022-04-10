<?php 
	session_start();
	if(isset($_SESSION['status']))
	{
		echo "<script>alert (\"Berhasil Keluar\");</script>";
		session_destroy();
		echo "<script>window.location ='login.php'</script>";
	}
	?>
	<!-- Logout sessin-->