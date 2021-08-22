<?php
$statusMsg = "";
if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "mechanic_finder");

        // If file upload form is submitted
        $name = $_POST["uname"];
        $email = $_POST["uemail"];
        $password = $_POST["pass"];
        


        if (isset($_POST["submit"])) {
            $status = 'error';
            
                
                    $insert = $conn->query("INSERT into login (`name`,`email`, `password`) VALUES ('$name','$email','$password')");

                    $conn->close();
                 

                    if ($insert) {
                        $status = 'success';
                        $statusMsg = "user created successfully.";
                        header("location: login.php");
                    } else {
                        $statusMsg = "user creation failed, please try again.";
                        header("location: signup.php");
                    }
                } 
            
        // Display status message
        echo $statusMsg;

}
?>
