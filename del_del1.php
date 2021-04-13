<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<table border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>FileName</th>
			<th>Title</th>
			<th>Album</th>
			<th>Artist</th>
			<th>Year</th>
			<th>Delete</th>
		</tr>
		<?php
			echo "<br/><br/>";
			$conn=mysqli_connect('localhost','root','','audiolibdb');
			if(!$conn){
				die('server not connected');
			}
			echo "<h3>Delete:<br/></h3>";
			$query= "select * from audios";
			$r= mysqli_query($conn,$query);
			$a=mysqli_num_rows($r);
			if($a>0){
				while($row=mysqli_fetch_array($r)){
					//echo $row['id'];
					echo "<tr><td>".'<a href="play.php?name='.$row['filename'].'">
					'.$row['filename'].'</a>'."</td><td>".$row['Title']."</td><td>".$row['Album']."</td>
					<td>".$row['Artist']."</td><td>".$row['Year']."</td></tr>";
					echo "<td><a href=del_del2.php?id=".$row['id'].">Delete</a></td>";

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
		
	</table>
</body>
</html>