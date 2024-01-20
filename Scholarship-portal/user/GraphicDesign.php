<?php
	session_start();
    include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Web Development Internship in Mumbai at Apex Group Of Companies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php
		if (isset($_SESSION['login_user']))
		{
			?>
			
			<nav id="navbar">
                <div id="logo">
                    <img src="images/logo.png" alt="Scholarshipportal">
                </div>
				<ul>
				<div style="color:white"> 
                    <!-- <img  class='img-circle profile_img' style="text-align:right;" height=30 width=40 src='images/".$_SESSION['pic'].'>"; -->
                    <?php
                    // echo  $_SESSION['login_user'];
                    // echo "Welcome " .$_SESSION['login_user'];
                    ?>
                </div>
                    <li class="item"><a href="dashboard.php">Home</a></li>
					<li class="item"><a href="scholarship.php">Scholarship</a></li>
                    <li class="item"><a href="internship.php">Interships</a></li>
                    <!-- <li class="item"><a href="#results">Results Article</a></li> -->
					<li class="item"><a href="logout.php">LOG-OUT</a></li>
				</ul>
			</nav>
			<?php
		}
		else {
            ?>
    <nav id="navbar">
        <div id="logo">
            <img src="images/logo.png" alt="Scholarshipportal">
        </div>
        <ul>
            <li class="item"><a href="scholarship.php">Scholarship</a></li>
            <li class="item"><a href="internship.php">Internships</a></li>
            <!-- <li class="item"><a href="#results">Results Article</a></li> -->
            <li class="item"><a href="login.php">Login</a></li>
            <li class="item"><a href="registeration.php">Register</a></li>
        </ul>
    </nav>
    <?php
        }
        ?>
    <section id="scholarship2">
        <img class="scholar" src="images/GraphicDesign.jpg" alt="Scholarshipportal"><br><br>
        <div class="box4">
            <h2 style="color:black;margin:0;">Graphic Design part time job/internship at Mumbai in Xero Apps Pvt Ltd</h2><br>
            <h5 style="color:black">About Xero Apps Pvt Ltd</h5><br>
            <p>
                Xero apps has mobile applications like Kirana Fast (launched) & Liquor Fast (in development). Both apps are made for inventory management & billing.            </p>
            <h5 style="color: blue;">About The Internship</h5>
            <p>Selected intern's day-to-day responsibilities include:</p>
            <ul>
                <li>Help in designing of our mobile app</li>
                <li>Research on latest design trends</li>
                <li>Make social media posts and banners</li>
            </ul>
            <h5 style="color: blue;">Who can Apply</h5>
            <p>Only those candidates can apply who:</p>
            <ul>
                <li>are available for the part time job/internship</li>
                <li>can start the part time job/internship between 3rd Oct'22 and 7th Nov'22</li>
                <li>are available for duration of 3 months</li>
                <li>have relevant skills and interests</li>
            * Women wanting to start/restart their career can also apply.</li>
            </ul>
            <a class="btn btn-success" href="https://internshala.com/internship/detail/graphic-design-part-time-job-internship-at-mumbai-in-xero-apps-pvt-ltd1664794207" target="_blank">Apply Now</a>
        </div>
    </section>
</body>
</html>