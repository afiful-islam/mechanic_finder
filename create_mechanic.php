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
        $owner_name = $_POST["owner_name"];
        $phone = $_POST["phone"];
        $operating_hours = $_POST["operating_hours"];
        $address = $_POST["address"];
        $email = $author;
        $speciality = $_POST["speciality"];
        $homeServices = $_POST["homeServices"];
        


        if (isset($_POST["submit"])) {
            $status = 'error';
            
                
    $insert = $conn->query("INSERT into mechanics (`ownerName`,  `garageName`, `email`, `phone`, `address`, `operatingHours`, `speciality`, `home_services`) VALUES 
    ('$owner_name','$garage_name','$email','$phone','$address','$operating_hours','$speciality','$homeServices')");

                    $conn->close();
                 

                    if ($insert) {
                        $status = 'success';
                        $statusMsg = "mechanic created successfully.";
                        header("location: home.php");
                    } else {
                        $statusMsg = "mechanic creation failed, please try again.";
                        header("location: mechanicRegistration.php");
                    }
                } 
            
        // Display status message
        echo $statusMsg;

}
//header("Location: home.php");

	


    ?>
	