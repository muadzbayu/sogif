<?php
	session_start();
	
	if($_SESSION['status']!= "login")
	{
		header ("location:login.php");
	}
?>
<html>
	<head>
	<!-- Favicon -->
		<link rel="shortcut icon" href="..\img\icons\anime.png"/>
		
		<style type="text/css">
		#{
			margin:0;
			padding:0;
		}
		#awal{
			width:300px;
			margin:100px auto;
		}
			a{
				text-decoration:none;
				font-size:25px;
				padding:15px;
				margin-right:25px;
				background-color:#0080AE;
				color:white;
				font-weight:bold;
			}
			a:hover{
				background-color:red;
				font-size:30px;
			}
		</style>
	</head>
	<body>
	<div id="awal">
	<a href="uploadDataAnimasi.php">Animasi</a>
	<a href="uploadDataSound.php">Sound</a>
	</div>
	</body>
</html>