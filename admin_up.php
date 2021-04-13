<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width">
	<meta name="description" content="Affordable and enjoyable music website">
	<meta name= "keywords" content= "Music Player, affordable website, enjoyable music">
	<meta name="author" content= "Nasif,Mueem,Abir">
	<title>Mixnet | Admin</title>
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="audiofile"/>
		<input type="submit" value="Upload Audio" name="save_audio"/>	
	</form>
</body>