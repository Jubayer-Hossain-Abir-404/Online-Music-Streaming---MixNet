<?php
	if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio"){
		$dir='uploads/';
		$audio_path=$dir.basename($_FILES['audiofile']['name']);

		if(move_uploaded_file($_FILES['audiofile']['tmp_name'],$audio_path )){
			echo "Uploaded Successfully";
		}
	}

?>