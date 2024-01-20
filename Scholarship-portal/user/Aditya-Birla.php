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
    <title>Aditya Birla Capital COVID Scholarship Program</title>
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
        <img class="scholar" src="images/Aditya Birla.jpg" alt="Scholarshipportal"><br><br>
        <div class="box4">
            <h2 style="color:blue;margin:0;">Aditya Birla Capital COVID Scholarship Program</h2><br>
            <h5 style="color:black">About The Program</h5><br>
            <p>
                Aditya Birla Capital COVID Scholarship Program is an initiative of Aditya Birla Capital Foundation, a not-for-profit company engaged in CSR initiative(s) of Aditya Birla Capital Limited and its subsidiaries. This program is to provide financial assistance & education support services to students who have lost their parent(s) due to COVID-19 to ensure continuity of their education. Under this scholarship program, students studying in Classes 1 to 12 will be entitled to receive a scholarship ranging up to INR 60,000 (one-time) to cover their academic expenses and additional value added services such as Mental Wellness Coaching, Career Counselling, Life Skills sessions. 

                Aditya Birla Capital Limited (ABCL), is the holding company of all the financial services businesses of the Aditya Birla Group. Aditya Birla Finance Limited (“ABFL”), a subsidiary of Aditya Birla Capital Limited is among the leading well-diversified non-banking financial service companies in India, is offering this scholarship as part of its CSR (Corporate Social Responsibility) initiative.
            </p>
            <h5 style="color: blue;">Eligibility Citeria</h5>
            <ul>
                <li>Applicants must be studying in Classes 1 to 12.</li>
                <li>Applicants should be enrolled and continuing their education.</li>
                <li>Annual family income of the applicant must be less than or equal to INR 6 lakh from all sources.</li>
                <li>Students who have lost their parent(s) due to the COVID-19 pandemic are eligible.</li>
                <li>Open for Indian nationals only.</li>
            </ul>
            <h5 style="color: blue;">Benefits</h5>
            <p>For Classes 1 to 8 students - INR 24,000 | For Classes 9 to 12 students - INR 30,000</p>
            <h5 style="color: blue;">Documents</h5>
            <ul>
                <li>Marksheet of the previous class</li>
                <li>A government-issued identity proof (Aadhaar card/voter identity card/driving license/PAN card)</li>
                <li>Current year admission proof (fee receipt/admission letter/institution identity card/bonafide certificate)</li>
                <li>Death certificate of parent(s)</li>
                <li>Proof of death due to COVID-19 (Hospital receipts, Doctor prescription, Covid test report, Medical Bills for COVID medication, hospital discharge summary, etc.)</li>
                <li>Bank account details of applicant (or parent)</li>
                <li>Income proof</li>
                <li>Photograph of the applicant</li>
            </ul>
            <a class="btn btn-success" href="https://www.buddy4study.com/page/aditya-birla-capital-covid-scholarship-program?ref=HomePageBanner" target="_blank">Apply Now</a>
        </div>
    </section>
</body>
</html>