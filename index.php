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
                    <a class="navbar-brand" href="#"> <img src="OtherPages/assets/images/logo-100.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Browse Reviews</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Privacy & Policy</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact Us</a>
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
    

    <!-- search section
    ==================================================================
     -->


     <div class="container">
			<br />
			<br />
			<br />
			<h1 align="center">Search</h1><br />
			<div class="form-group">
				<div class="input-group">
					<input type="text" name="search_text" id="search_text" placeholder="Search area-wise or speciality-wise" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />


    <!-- reviews section
    ==================================================================
     -->


    <?php
    include_once 'database.php';
    $result = mysqli_query($conn,"SELECT experience, author FROM review ORDER BY RAND() LIMIT 3");
    ?>

    <section id="reviews" class="bg-light">
        <div class="container">
            <div class="container">
                <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
                    <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">Customer Reviews</h1>
                </div>
                
                <ul class="hash-list cols-3 cols-1-xs pad-30-all align-center text-sm">
                    
                    <?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
						$ex = $row["experience"];
                        $au = $row["author"];
					?>

                    <li>
                      <img src="OtherPages/assets/images/avatar1.png" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                      <p class="fs-110 font-cond-l" contenteditable="false">" <?php echo $ex;?> "</p>
                      <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
                      <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">- <?php echo $au;?></small>
                    </li>

                    <?php
                     $i++;
                    }
                    ?>
                  </ul>
            </div>
        </div>
    </section>

    <!-- Top mechanic
    ==================================================================
     -->
     
    <?php
    include_once 'database.php';
    $result1 = mysqli_query($conn,"SELECT shopName, ROUND(AVG(rating),1) from review GROUP BY shopName ORDER BY ROUND(AVG(rating),1) DESC LIMIT 3");
    ?>
    
     <section id="top-mechanic" class="bg-light">
        <div class="container">
            <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
                <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">Top Mechanics</h1>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">

                    <?php
					$i=0;
					while($row = mysqli_fetch_array($result1)) {
						$shn = $row["shopName"];
                        $rt = $row["ROUND(AVG(rating),1)"];
					?>

                    <div class="row top-mechanic-profile pb-5">
                        <div class="col-md-3"><img src="OtherPages/assets/images/avatar1.png" alt="" class="w-100"></div>
                        <div class="col-md-9">
                            <h3><?php echo $shn;?></h3>
                            <p>Rating: <?php echo $rt;?>/10</p>
                        </div>
                    </div>

                    <?php
                     $i++;
                    }
                    ?>

                </div>
            </div>                       
        </div>
    </section>

    <section id="feedback" class="">
        <div class="container">
            <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
                <h1 class="text-center font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg">Provide Feedback</h1>
            </div>
            <form action="save_feedback.php" method="post" class="form-inline my-2 my-lg-0 w-50 m-auto">
                <textarea name="message" id="" cols="30" rows="3" class="form-control w-100 mb-3" placeholder="Feedback"></textarea>
                <input name="name" class="form-control w-100 mb-3" type="text" placeholder="Your name" aria-label="Search">
                <button name="store_feedback" class="btn btn-outline-success my-2 my-sm-0 text-center m-auto w-100" value="submit" type="submit">Submit</button>
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
                    <h3>About Us</h3>
                    <p>Car Mechanic Finder is a platform that allows customers to seek out and connect with car repair garages as per their servicing needs and location.</p>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        

        </div>
        <div class="text-center p-3">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="#">CAR MECHANIC FINDER</a></p>
        </div>
        <!-- Copyright -->
      </footer>
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <!-- <script src="OtherPages/assets/js/script.js"></script>  -->
            
            <script>
            $(document).ready(function(){
                load_data();
                function load_data(query)
                {
                    $.ajax({
                        url:"search_fetch.php",
                        method:"post",
                        data:{query:query},
                        success:function(data)
                        {
                            $('#result').html(data);
                        }
                    });
                }
                
                $('#search_text').keyup(function(){
                    var search = $(this).val();
                    if(search != '')
                    {
                        load_data(search);
                    }
                    else
                    {
                        load_data();			
                    }
                });
            });
            </script>
</body>
</html>