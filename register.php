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
				<h1>Welcome To <span class="highlight">MixNet</span></h1>
			</div>
			<nav>
				
			</nav>
		</div>
	</header>
	<h3><b>Register</b><h3>
	<form method="post" action="register_panel.php">
		<table>
			<tr>
				<td>
					Name  :
				</td>
				<td>
					<input type="text" placeholder="Name" name="user_name">
				</td>
			</tr>
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
					<input type="submit" value="Register">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>