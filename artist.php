<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width">
	<meta name="description" content="Affordable and enjoyable music website">
	<meta name= "keywords" content= "Music Player, affordable website, enjoyable music">
	<meta name="author" content= "Nasif,Mueem,Abir">
	<title>Mixnet | Artist</title>
	<link rel="stylesheet" href="./css/style.css">
	<style type="text/css">
		table{
			border-collapse: collapse;
			width:100%;
			color:#d96459;
			font-family: monospace;
			font-size: 25px;
			text-align:left;
		}
		th{
			background-color:#d96459;
			color:white;
		}
	</style>
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">MixNet</span></h1>
			</div>
			<nav>
				<form action="artist.php" method="Post" >
					<ul>
						<li><a href="home.php">Home</a></li>
						<li ><a href="playlist.php">Playlist</a></li>
						<li ><a href="album.php">Album</a></li>
						<li class="current"><a href="artist.php">Artist</a></li>
						<li><a href="year.php">Year</a></li>
						<li><a href="index.php">Upload</a></li>
						<li><a href="delete.php">Delete</a></li>
						<li><a href="start.php">Log Out</a></li>
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
	<table>
		<tr>
			<th>Artist_Id</th>
			<th>FileName</th>
			<th>Artist_Name</th>
		</tr>
		<?php
			echo "<br/><br/>";
			$conn=mysqli_connect('localhost','root','','audiolibdb');
			if(!$conn){
				die('server not connected');
			}
			echo "<h3>Artist:<br/></h3>";
			$query= "select * from audios inner join artist where artist_name=Artist";
			$r= mysqli_query($conn,$query);
			$a=mysqli_num_rows($r);
			if($a>0){
				while($row=mysqli_fetch_array($r)){
					//echo $row['id'];
					echo "<tr><td>".$row['id']."</td><td>".'<a href="play.php?name='.$row['filename'].'">
					'.$row['filename'].'</a>'."</td><td>".$row['artist_name']."</td></tr>";

					//echo "<br/>";
				}
				echo "</table>";
			}
			else{
				echo "0 result";
			}

			mysqli_close($conn);

		?>
	</table>

<footer>
		<p>MixNet Music Site, Copyright &copy; 2019</p>
	</footer>
</body>
</html>
	
