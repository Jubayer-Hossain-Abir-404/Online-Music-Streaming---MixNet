<?php

	$conn=mysqli_connect('localhost','root','','audiolibdb');
			if(!$conn){
				die('server not connected');
			}
			//echo "<h3>Delete:<br/></h3>";
			$query= "DELETE from audios where id='$_GET[id]'";
			$r= mysqli_query($conn,$query);
			if(mysqli_query($conn,$query)){
				header("refresh:1;url=del_del1.php");
			}
			else{
				echo "Not deleted";
			}





?>