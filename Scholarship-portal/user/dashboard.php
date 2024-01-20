<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images/logo.png" alt="Scholarshipportal">
        </div>
        <ul>
            <li class="item"><a href="scholarship.php">Scholarship</a></li>
            <li class="item"><a href="internship.php">Interships</a></li>
            <!-- <li class="item"><a href="#results">Results Article</a></li> -->
            <li class="item"><a href="profile.php">Profile</a></li>
            <li class="item"><a href="logout.php">Logout</a></li>
            <!-- <li class="item"><a href="registeration.php">Register</a></li> -->
        </ul>
    </nav>
    <section id="float">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/Aditya Birla.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Colgate.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/HDFC.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev "href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next "href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aris-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </section>
    <br><br>
    <section id="interships">
        <h2 style="color:Blue; text-align:Center">Internships</h2><br>
        <div class="info">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/webdevelop.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/GraphicDesign.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/backenddevelop.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <br><br><br>
    <div id="information">
        <h3 style="text-align:center">How Scholarship Portal Works</h3><br>
        <div class="container">
            <h5 style="text-align:left; color:blue;">Regiter and Create your Profile</h5>
            <ul>
                <li><a>Sign up with Facebook/Gmail/Mobile number or email id</a></li>
                <li><a>Verify your mobile number and email address</a></li>
                <li><a>Complete your profile i.e., present class, income, location, gender and other required fields</a></li>        
            </ul>
            <br><br>
            <h5 style="text-align:right; color:blue;">View Scholarship</h5>
            <ul dir= rtl>
                <li style="text-align:right;"><a>List of Scholarships</a></li>
                <li style="text-align:right;"><a>View Details Of Scholarship</a></li>
            </ul>
            <br><br>
            <h5 style="text-align:left; color:blue;">View Internships</h5>
            <ul>
                <li style="text-align:left;"><a>List of Internships</a></li>
                <li style="text-align:left;"><a>View Details Of Internships</a></li>
            </ul>
            <br><br>
            <!-- <h5 style="text-align:right; color:blue;">Become a scholar</h5>
            <ul dir=rtl>
                <li style="text-align:right;"><a>If you are selected as a scholar, you will receive notifications from Scholarship portal</a></li>
                <li style="text-align:right;"><a>You can also check results on scholarship results page</a></li>
                <li style="text-align:right;"><a>Upload your attested documents on Buddy4Study and provide bank information</a></li>
                <li style="text-align:right;"><a>Receive scholarship award directly in your bank account</a></li>
            </ul> -->
        </div>    
    </div>
    <div>
        <?php
            include "footer.php";
        ?>
    </div>
</body>
</html>