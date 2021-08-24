<?php 

$garage_name = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car mechanic finder</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="OtherPages/assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery library -->
   
</head>
<body>
    <header>
        <div class="container">
             <nav class="navbar navbar-light">
                <nav class="navbar navbar-expand-lg navbar-dark bg-light w-100">
                    <a class="navbar-brand" href="home.php"> <img src="OtherPages/assets/images/logo-100.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Browse Reviews</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="privacy&policy.php">Privacy & Policy</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button" href="logout.php">
                            <button class="btn btn-outline-danger my-2 my-sm-0 text-center m-auto w-100 ml-2" type="submit">Log out</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button" href="mechanicRegistration.php">
                            <button class="btn btn-outline-success my-2 my-sm-0 text-center m-auto w-100 ml-2" type="submit">Create mechanic account</button></a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </nav>
        </div>
    </header>

    <!-- hero section
    ==================================================================
     -->
     <section id="hero">
        <video width="100%" autoplay muted loop id="myVideo">
            <source src="OtherPages/rain.mp4" type="video/mp4">
            </video>
    </section>

    <section>
        
        <h1 class="align-center">Mechanic Details</h1><br><br>


        
            
                <div class="container bg-dark p-4">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-12 align-items-center bg-white p-2 p-top-10">

                                    <?php

                                    $conn = new mysqli("localhost", "root", "", "mechanic_finder");

                                    $query = "SELECT * FROM `mechanics` where garageName = '$garage_name'";
                                    
                                    $result = $conn->query($query);

                                    if ($result->num_rows > 0) {
                                        
                                        while ($row = $result->fetch_assoc()) {
                                            $ownerName = $row["ownerName"];
                                            $garageName = $row["garageName"];        
                                            $email = $row["email"];
                                            $phone = $row["phone"];        
                                            $address = $row["address"];
                                            $operatingHours = $row["operatingHours"];
                                            $speciality = $row["speciality"];
                                            $home_services = $row["home_services"];

                                    
                                    echo "<div class='descript_wrap white-bg'>
                                                    
                                                    <div>
                                                        <h3 class='fa fa-warehouse'> Garage Name:</h3>
                                                        <h5>{$garageName}</h5><br>
                                                        
                                                    </div>
                                                    <div>
                                                        <h3 class='fa fa-user'> Owner Name:</h3>
                                                        <h5>{$ownerName}</h5><br>
                                                        
                                                    </div>
                                                    <div>
                                                        <h3 class='fa fa-envelope'> E-mail:</h3>
                                                        <h5>{$email}</h5><br>
                                                        
                                                    </div>
                                                    <div>
                                                        <h3 class='fa fa-phone'> Contact Number:</h3>
                                                        <h5>{$phone}</h5><br>
                                                        
                                                    </div>
                                                    <div>
                                                        <h3 class='fa fa-map-marker'> Address:</h3>
                                                        <h5>{$address}</h5><br>
                                                        
                                                    </div>
                                                    <div>
                                                        <h3 class='fa fa-clock'> Operating Hours:</h3>
                                                        <h5>{$operatingHours}</h5><br>
                                                        
                                                    </div>
                                                    <div>
                                                        <h3 class='fa fa-tools'> Our specialities are:</h3>
                                                        <h5>{$speciality}</h5><br>
                                                        
                                                    </div>
                                                    <div>
                                                        <h3 class='fa fa-home'> We have home service for this services:</h3>
                                                        <h5>{$home_services}</h5><br>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            ";
                                            }
                                        }
                                                


                                    ?>
                    </div>
                </div>
            </div>
       
        



    </section>

    <footer class="text-center text-lg-start">
        <!-- Copyright -->
        <div class="container">
            <div class="row top-footer">
                <div class="col-md-5">
                    <ul>
                        <li><div class="icons"><i class="fa fa-map-marker-alt"></i></div><div class="icon-text">21 Revolution Street<br><h3>Paris, France</h3></div></li>
                        <li>
                        <li><div class="icons"><i class="fa fa-phone-alt"></i></div><div class="icon-text"><h3>+88028839396</h3></div></li>
                        <li>
                        <li><div class="icons"><i class="fa fa-envelope"></i></div><div class="icon-text"><h3><a href="#">support@example.com</a></h3></div></li>
                        
                    </ul>
                </div>
                <div class="col-md-5 offset-md-2 footer-right">
                    <h3>About the company</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="home.php">CAR MECHANIC FINDER</a></p>
        </div>
        <!-- Copyright -->
      </footer>
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
            <script src="OtherPages/assets/js/script.js"></script>
</body>
</html>