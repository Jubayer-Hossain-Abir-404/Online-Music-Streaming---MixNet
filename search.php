<?php


$conn=mysqli_connect("localhost","root","","audiolibdb") or die("could not connect");
//$output='';
//connect
if(isset($_POST['search'])){
	//$searchq= $_POST['search'];
	//$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
	$searchq=mysqli_real_escape_string($conn,$_POST['search']);

	$query=mysqli_query($conn,"SELECT * FROM audios WHERE Title LIKE '%$searchq%' 
		OR Artist like '%$searchq%' OR Album like '%$searchq%' OR Year like '%$searchq%'") 
	or die("could not search!");
	$count=mysqli_num_rows($query);
	if($count==0){
		echo "There was no search results!";
		$i=1;
		while($i<=5){
				echo "<br/>";
				$i++;
			}
	}
	else{
		$i=1;
		echo "Search Results:<br/><br/>";
		while($row=mysqli_fetch_array($query)){
			//$filename=$row['filename'];
			//$title=$row['Title'];
			//$artist=$row['Artist'];
			//$output.='<div>'.$filename.' '.$title.'  '.$artist.'</div>';
			echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
			echo "<br/>";
		}
		while($i<=5){
				echo "<br/>";
				$i++;
			}
	}
	mysqli_close($conn);

}


?>






