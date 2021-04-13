<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width">
	<meta name="description" content="Affordable and enjoyable music website">
	<meta name= "keywords" content= "Music Player, affordable website, enjoyable music">
	<meta name="author" content= "Nasif,Mueem,Abir">
	<title>Mixnet | Welcome</title>
	<link rel="stylesheet" href="./css/style.css">
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
						<li><a href="index.php">Upload</a></li>
						<li><a href="delete.php">Delete</a></li>
						<li><a href="start.php">Log Out</a></li>
					</ul>
				</form>
			</nav>
		</div>
	</header>

	<section id="showcase">
		<div class="container">
			<h1>Songs Which You Will Love To Share</h1>
			<p>Mixnet is a pretty common music website, here one can enjoy any song one likes and can download
			it. One just have to register in this site and can take the taste of sweet music</p>
		</div>
	</section>

	<section id="newsletter">
		<div class="container">
			<h1>Search for Songs</h1>
			<form action="search.php" method="post">
				<input type="text" name="search" placeholder="search.....">
				<button type="Submit" class="button_1">Search</button>
			</form>
		</div>
	</section>


	<section id="boxes">
		<div class="container">
			<div class="box">
				<img src="./img/logo_feel.jpg">
				<h3>Feel The Music</h3>
			</div>
			<div class="box">
				<img src="./img/logo_mui.jpg">
				<h3>Connecting The Dots</h3>
			</div>
			<div class="box">
				<img src="./img/logo_share.jpg">
				<h3>Share Love Not Hatred</h3>
			</div>
		</div>
	</section>

	<footer>
		<p>MixNet Music Site, Copyright &copy; 2019</p>
	</footer>

</body>
</html>