<?php
	$email=filter_input(INPUT_POST,'email');
	$password=filter_input(INPUT_POST,'password');
	if(!empty($email)||!empty($password)){
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="audiolibdb";

		//create connection
		$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
			if(mysqli_connect_error()){
				die('Connect Error ('.mysqli_connect_errno() .') '
					. mysqli_connect_error());
			}
			else{
				$i=0;
				$sql="select * from login";
				$r= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($r)){
					if($row['email']==$email&&$row['password']){
						//echo "Log In Successfull";
						//echo '<a href="home.php">Log In Successfull</a>';
						echo "Welcome ";
						echo '<a href="home.php?name='.$row['user_name'].'">'.$row['user_name'].'</a>';
						echo "<br/>";
						$i=1;
					}
					
				}
				if($i==0){
					//echo "You must register first<br/>";
					//echo '<a href="register.php"'</a>';
					echo '<a href="register.php">You must register first</a>';
				}
				$conn->close();
			}
			
	}
	else{
		echo "No field should be empty";
		die();
	}


?>