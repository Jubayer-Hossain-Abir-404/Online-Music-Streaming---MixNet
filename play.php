<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width">
	<meta name="description" content="Affordable and enjoyable music website">
	<meta name= "keywords" content= "Music Player, affordable website, enjoyable music">
	<meta name="author" content= "Nasif,Mueem,Abir">
	<title>Mixnet | Music Player</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style1.css" />
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">MixNet</span></h1>
			</div>
			<nav>
				<form action="upload.php" method="Post" >
					<ul>
						<li class="current"><a href="home.php">Home</a></li>
						<li><a href="playlist.php">Playlist</a></li>
						<li><a href="album.php">Album</a></li>
						<li><a href="artist.php">Artist</a></li>
						<li><a href="year.php">Year</a></li>
					</ul>
				</form>
			</nav>
		</div>
	</header>
	<section id="newsletter">
		<div class="container">
			<h1>Search for Songs</h1>
			<form action="search.php" method="post">
				<input type="text" name="search" placeholder="search.....">
				<button type="Submit" class="button_1">Search</button>
			</form>
		</div>
	</section>
	<audio controls>
		<source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">
		</source>
	</audio>


</body>
</html>