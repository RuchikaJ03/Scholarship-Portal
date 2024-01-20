<?php
	session_start();
    include "connect.php";
?>
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
            <li class="item"><a href="index.php">Home</a></li>
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
    <br><br>
    <section class="scholarships">
    <div class="container">
        <h4 style="color:Blue">Scholarships For Indian Students</h4><br><br>
        <section class="scholarship1">
            <div>
                <?php
                $res=mysqli_query($db,"SELECT * FROM `scholarship`;");
                    echo"<table>";
                        echo"<tr>";
                            echo"<th>";echo"Scholarship";echo"</th>";
                            echo"<th>";echo"Eligiblity-Criteria";echo"</th>";
                            echo"<th>";echo"Awards";echo"</th>";
                            echo"<th>";echo"</th>";
                        echo"</tr>";
                        echo"<tr>";

                        while ($row= mysqli_fetch_assoc($res)) 
                        {
                            echo"<td>";echo $row['Scholarship'];echo"</td>";
                            echo"<td>";echo $row['EligibilityCriteria']; echo"</td>";
                            echo"<td>";echo $row['Awards'];echo"</td>";
                            echo"<td>";echo'<a class="btn btn-success" href="'.$row['Link'].'" target="_blank">View Details</a>';echo"</td>";
                            ?>
                            <!-- <td><a class="btn btn-success" href="'.$row['link'].'">" target="_blank">View Details</a></td> -->
                            <?php
                        echo"</tr>";
                        echo"<tr>";
                        }
                    echo"</table>";
                    ?>
            </div><br><br><br><br><br>
        </section>
    </div>
    </section>
    <div>
        <?php
            include "footer.php";
        ?>
    </div>
</body>
</html>