<?php
session_start();
if (isset($_SESSION['email'])) {
   $author=$_SESSION['email'];
}elseif(isset($_SESSION['user_email_address'])) {
    $author=$_SESSION['user_email_address'];
}
$statusMsg = "";
if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "mechanic_finder");

        // If file upload form is submitted
		$garage_name = $_POST["garage_name"];
		$experience = $_POST["experience"];
		$email = $_SESSION["email"];
		$rating = $_POST["rating"];


                    $insert = $conn->query("INSERT into review ( `shopName`, `experience`, `rating`, `author`) VALUES ('$garage_name','$experience','$rating','$author')");

                    $conn->close();
                 

                    if ($insert) {
                        $status = 'success';
                        $statusMsg = "review posted successfully.";
                    } else {
                        $statusMsg = "review post failed, please try again.";
                    }
                 
            
        // Display status message
        echo $statusMsg;
}
header("Location: home.php");

	


    ?>
	