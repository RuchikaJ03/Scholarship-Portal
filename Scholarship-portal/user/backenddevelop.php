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
        <img class="scholar" src="images/backenddevelop.jpg" alt="Scholarshipportal"><br><br>
        <div class="box4">
            <h2 style="color:black;margin:0;">Backend Development Internship in Pune, Mumbai at Azent Overseas Education</h2><br>
            <h5 style="color:black">About Azent Overseas Education</h5><br>
            <p>
                At Azent Overseas Education, we have a strong commitment to education and career development. We are passionate about bringing global education to the doorsteps of students all over India. Integrity is essential to the admissions process and Azent is committed to the highest ethical standards. Our organization and our counsellors pledge ethical and respectful behaviour in our interactions with our students and their families. We aspire to become the world's leading global education advisory, unleashing potential, one student at a time.            <h5 style="color: blue;">About The Internship</h5>
            <p>Selected intern's day-to-day responsibilities include:</p>
            <ul>
                <li>Design and develop REST APIs</li>
                <li>Develop features to enhance the user experience</li>
                <li>Contribute to documentation, wherever required</li>
                <li>Work on learning new things about the field</li>
            </ul>
            <h5 style="color: blue;">Who can Apply</h5>
            <p>Only those candidates can apply who:</p>
            <ul>
                <li>are available for full time (in-office) internship</li>
                <li>can start the internship between 6th Oct'22 and 10th Nov'22</li>
                <li>are available for duration of 6 months</li>
                <li>have relevant skills and interests</li>
            * Women wanting to start/restart their career can also apply.</li>
            </ul>
            <a class="btn btn-success" href="https://internshala.com/internship/detail/backend-development-internship-in-pune-mumbai-at-azent-overseas-education1665045332" target="_blank">Apply Now</a>
        </div>
    </section>
</body>
</html>