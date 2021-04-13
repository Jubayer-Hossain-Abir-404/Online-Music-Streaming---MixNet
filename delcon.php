<?php
	$admin_name=filter_input(INPUT_POST,'admin_name');
	$password=filter_input(INPUT_POST,'password');
	if(!empty($admin_name)||!empty($password)){
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
				//$i=0;
				$sql="select * from admin";
				$r= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($r)){
					$i=0;
					if($row['admin_name']==$admin_name&&$row['password']){
						//echo "Log In Successfull";
						echo "Welcome ";
						echo '<a href="del_del1.php?name='.$row['admin_name'].'">'.$row['admin_name'].'</a>';
						echo "<br/>";
						$i=1;
					}
					
				}
				if($i==0){
					//echo "No access";
					echo '<a href="index.php">Unauthorized Acces</a>';
				}
				$conn->close();
			}
			
	}
	else{
		echo "No field should be empty";
		die();
	}


?>