<?php
	$user_name=filter_input(INPUT_POST,'user_name');
	$email=filter_input(INPUT_POST,'email');
	$password=filter_input(INPUT_POST,'password');
	if(!empty($user_name)||!empty($email)||!empty($password)){
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
				$sql="INSERT INTO login(user_name,email,password)
				values ('$user_name','$email','$password')";
				if($conn->query($sql)){
					//echo "Registration Complete ";
					echo '<a href="start.php">Registartion Complete</a>';
				}
				else{
					echo "Error: ". $sql ."<br>". $conn->error;
				}
				$conn->close();
			}
			
	}
	else{
		echo "No field should be empty";
		die();
	}


?>