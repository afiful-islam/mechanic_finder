
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

    <section id="post_review" class="to-scrol">
        <div class="container">
            <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
                <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">Post a review</h1>
            </div>
            <form method="post" name = "reviewform" onsubmit="return validateReviewForm()" action="save_review.php">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name">Name of Garage</label>
                                <input type="text" id="garage_name" class="form-control" name="garage_name"> 
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="name">Experience</label>
                               <textarea name="experience" class="form-control" id="experience" cols="30" rows="5"></textarea> 
                            </div>
                            <div class="col-md-12 form-group">
                            <label for="rating">Rate</label><br>
                            <select class="review" name="rating">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>                               
                            </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="btn btn-outline-success my-2 my-sm-0 text-center m-auto w-100 ml-2" name="submit" type="submit">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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