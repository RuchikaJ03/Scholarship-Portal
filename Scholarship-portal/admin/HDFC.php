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
    <title>HDFC Bank Parivartan’s ECS Scholarship 2022-23</title>
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

                    <li class="item"><a href="scholarship.php">Scholarship</a></li>
                    <li class="item"><a href="addscholarship.php">Add Scholarship</a></li>
                    <li class="item"><a href="internship.php">Internship</a></li>
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
            <li class="item"><a href="internship.php">Internship</a></li>
            <!-- <li class="item"><a href="#results">Results Article</a></li> -->
            <li class="item"><a href="login.php">Login</a></li>
            <li class="item"><a href="registeration.php">Register</a></li>
        </ul>
    </nav>
    <?php
        }
        ?>
    <section id="scholarship2">
        <img class="scholar" src="images/HDFC.jpg" alt="Scholarshipportal"><br><br>
        <div class="box4">
            <h2 style="color:blue;margin:0;">HDFC Bank Parivartan’s ECS Scholarship 2022-23</h2><br>
            <h5 style="color:black">About The Program</h5><br>
            <p>
                HDFC Bank Parivartan’s ECS Scholarship 2022-23 aims to support meritorious and needy students belonging to underprivileged sections of the society. The scholarship programme is meant for school students from Class 1 to those pursuing UG and PG programmes. Under the ECS scholarship, the students who are unable to bear the cost of education due to personal/family crisis or any other financial problems and are at a risk of dropping out are provided with monetary assistance of up to INR 75,000 for their studies. 

                HDFC Bank, India’s leading banking and financial service provider, has introduced this scholarship as part of its flagship programme – Educational Crisis Scholarship (ECS). The bank has been undertaking various projects in the field of education and livelihood training as part of its social initiative - Parivartan.
            </p>
            <h5 style="color: blue;">Eligibility Citeria</h5>
            <ul>
                <li>The students must be currently studying in Classes 1 to 12 in a private, government, or government-aided school.</li>
                <li>The applicants must have passed the previous qualifying examination with at least 55% marks.</li>
                <li>Annual family income must be less than or equal to INR 2.5 lakh</li>
                <li>Preference will be given to those applicants who are facing a personal or family crisis that has occurred during the past three years, due to which they are unable to continue bearing the cost of education and are at risk of dropping out. </li>
                <li>Open for Indian nationals only.</li>
            </ul>
            <h5 style="color: blue;">Benefits</h5>
            <p>For Class 1 to 6 - INR 15,000 | For Class 7 to 12 - INR 18,000</p>
            <h5 style="color: blue;">Documents</h5>
            <ul>
                <li>Passport size photograph</li>
                <li>Previous year's marksheets (2021-22) (NOTE: In case, you don’t have a marksheet for the 2021-22  session, please upload the marksheet for the 2020-21 session.)</li>
                <li>Identity proof (Aadhaar Card/Voter ID/Driving License)</li>
                <li>Current year admission proof (Fee Receipt/Admission Letter/Institution ID Card/Bonafide Certificate) (2021-22)</li>
                <li>Applicant Bank Passbook/Cancelled Cheque (Information will also be captured in the application form)</li>
                <li>Proof of family/personal crisis (if applicable)</li>
            </ul>
            <a class="btn btn-success" href="https://www.buddy4study.com/page/hdfc-bank-parivartans-ecs-scholarship?ref=HomePageBanner" target="_blank">Apply Now</a>
        </div>
    </section>
</body>
</html>