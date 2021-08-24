<?php
$statusMsg = "";
if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "mechanic_finder");

        // If file upload form is submitted
        $name = $_POST["uname"];
        $email = $_POST["uemail"];
        $phone = $_POST["uphone"];
        $message = $_POST["umessage"];
        


        if (isset($_POST["submit"])) {
            $status = 'error';
            
                
                    $insert = $conn->query("INSERT into contact (`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')");

                    $conn->close();
                 

                    if ($insert) {
                        $status = 'success';
                        $statusMsg = "user created successfully.";
                        header("location: home.php");
                    } else {
                        $statusMsg = "user creation failed, please try again.";
                        header("location: contact.php");
                    }
                } 
            
        // Display status message
        echo $statusMsg;

}
?>
