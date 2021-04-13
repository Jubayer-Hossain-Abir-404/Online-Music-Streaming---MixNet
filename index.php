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
	<form method="post" action="admin.php">
		<header>
			<div class="container">
				<div id="branding">
					<h1><span class="highlight">MixNet</span></h1>
				</div>
				<nav>
					<ul>
						<li><a href="home.php">Home</a></li>
						<li ><a href="playlist.php">Playlist</a></li>
						<li ><a href="album.php">Album</a></li>
						<li ><a href="artist.php">Artist</a></li>
						<li ><a href="year.php">Year</a></li>
						<li class="current"><a href="index.php">Upload</a></li>
						<li><a href="delete.php">Delete</a></li>
						<li><a href="start.php">Log Out</a></li>
					</ul>
				</nav>
			</div>
		<header>
		<h3><b>Admin</b><h3>
		<table>
			<tr>
				<td>
					Name  :
				</td>
				<td>
					<input type="text" placeholder="Name" name="admin_name" required>
				</td>
			</tr>
			<tr>
    			<td>
    				Password :
    			</td>
    			<td>
    				<input type="password" placeholder="Password"name="password" required>
    			</td>
   			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Log In">
				</td>
			</tr>
		</table>
</body>
</html>