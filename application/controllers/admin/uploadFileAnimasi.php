<?php	
	$target_path = "./music-files/sound/";
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
	echo "$target_path";
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
	{
		echo "<script>window.location ='uploadDataSound.php'</script>";
	}
	else{
		echo "Error uploading file. Please try again!";
	}
	
	
?>