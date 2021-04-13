<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width">
	<meta name="description" content="Affordable and enjoyable music website">
	<meta name= "keywords" content= "Music Player, affordable website, enjoyable music">
	<meta name="author" content= "Nasif,Mueem,Abir">
	<title>Mixnet | Log In/Register</title>
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1>Welcome to <span class="highlight">MixNet</span></h1>
			</div>
			<nav>
		</div>
	</header>

	<h3><b>Log In</b><h3>
	<form method="post" action="connection.php">
		<table>
			<tr>
				<td>
					Email  :
				</td>
				<td>
					<input type="Mail" placeholder="Email" name="email" required>
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
	</form>
	<br/><br/>Not a user <a href="register.php">Register Here</a>

</body>
</html>