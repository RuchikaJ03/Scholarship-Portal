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
    <title>Keep India Smiling Foundational Scholarship & Mentorship Programme</title>
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
        <img class="scholar" src="images/Colgate.jpg" alt="Scholarshipportal"><br><br>
        <div class="box4">
            <h2 style="color:blue;margin:0;">Keep India Smiling Foundational Scholarship & Mentorship Programme</h2><br>
            <h5 style="color:black">About The Program</h5><br>
            <p>
                Keep India Smiling Foundational Scholarship & Mentorship Programme aims to provide foundational support to individuals, who are deserving & meritorious but may lack resources to pursue their dreams. Along with the financial support, this scholarship programme will also focus on mentorship and career guidance to the beneficiaries as and when required.

                Apart from the education scholarships listed below, there are other scholarships for sportspersons and individuals helping others too. CLICK HERE to know about the Keep India Smiling Foundational Scholarship and Mentorship Programme for Sportsperson and Individuals!            
            </p>
            <h5 style="color: blue;">Eligibility Citeria</h5>
            <ul>
                <li>Must have passed Class 10 board examination in 2022</li>
                <li>Must be enrolled in Class 11 at a recognised school in India</li>
                <li>Must have scored at least 75% in Class 10 board exams</li>
                <li>Annual family income should be less than INR 5 Lakhs</li>
            </ul>
            <h5 style="color: blue;">Benefits</h5>
            <p>INR 20,000 per annum for 2 years</p>
            <h5 style="color: blue;">Documents</h5>
            <ul>
                <li>Passport-sized photograph</li>
                <li>Valid ID proof – Either Aadhaar Card/Driving License/Voter Id Card/Pan Card</li>
                <li>Income Proof – Income certificate/BPL certificate/Food security certificate/Any other certificate of income issued by competent government authority.</li>
                <li>Class 10 marksheet</li>
                <li>Fee Receipt/Admission Letter/College ID card/Bonafide certificate</li>
                <li>Disability certificate, in case of any physical disability</li>
            </ul>
            <a class="btn btn-success" href="https://www.buddy4study.com/page/keep-india-smiling-foundational-scholarship-programme?ref=HomePageBanner" target="_blank">Apply Now</a>
        </div>
    </section>
</body>
</html>