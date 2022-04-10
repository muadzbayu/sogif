<?php	
	$target_path = "./img/animasi/";
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
	echo "$target_path";
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
	{
		echo "<script>window.location ='uploadDataAnimasi.php'</script>";
	}
	else{
		echo "Error uploading file. Please try again!";
	}
	
	
?>