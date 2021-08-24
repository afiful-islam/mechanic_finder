<?php
include_once 'database.php';
if(isset($_POST['store_feedback']))
{	 
	 $message = $_POST['message'];
	 $name = $_POST['name'];
	



	 $sql = "INSERT INTO feedback (message,name) VALUES ('$message','$name')";
	 if (mysqli_query($conn, $sql)) {
		header("Location: home.php");
	} 
    else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>