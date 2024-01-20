<?php
    include "connect.php";
    session_start();
    // include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROFILE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .content
        {
            width: 350px;
            height: 520px;
            margin: 0 auto;
            color:black;
            /* background-color: red; */
        }
</style>
<style type="text/css">
        .container
        {
            padding-left:1300px;
        }
        </style>
</head>
<body style="background-color: white;">
<div class="wrapper">
		<header>
		<?php
		if (isset($_SESSION['login_user']))
		{
			?>
			<nav id="navbar">
                <div id="logo">
                    <img src="images/logo.png" alt="Scholarshipportal">
                </div>
				<ul>
                    <li class="item"><a href="dashboard.php">Home</a></li>
					<li class="item"><a href="scholarship.php">Scholarship</a></li>
                    <li class="item"><a href="internship.php">Internships</a></li>
                    <!-- <li class="item"><a href="#results">Results Article</a></li> -->
                    <li class="item"><a href="profile.php">Profile</a></li>
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
            <li class="item"><a href="internship.php">Internships</a></li>
            <!-- <li class="item"><a href="#results">Results Article</a></li> -->
            <li class="item"><a href="login.php">Login</a></li>
            <li class="item"><a href="registeration.php">Register</a></li>
        </ul>
    </nav>
            <?php
          }

          ?>
		</header>
        <br><br>
        <div class="container">
    <form action="" method="post">
        <button class="btn btn-default" name="submit1" type="submit">Edit</button>
    </form>
</div>
<div class="content">
        <?php

            if(isset($_POST['submit1']))
            {
                ?>
                <script type="text/javascript">
                    window.location="edit.php"
                </script>
                <?php
            }
            $q=mysqli_query($db,"SELECT * FROM users where username='$_SESSION[login_user]';");
        ?>
        <h2 style="text-align: center">My Profile</h2><br><br>
        <?php
              $row=mysqli_fetch_assoc($q);
            //   echo "<div style='text-align:center'>";
            //   echo "<img style='border-radius:50%'; width=120;height=120; src='images/".$_SESSION['pic']."'>";
            //   echo "</div>";  
        ?> 
        <div style="text-align: center;"><b>Welcome</b><br><br>
            <h4>
                <?php 
                    echo $_SESSION['login_user'];
                ?>
            </h4>
        </div><br>
        <?php
            echo "<table>";
                echo "<tr>"; 
                    echo "<td>";
                        echo "<b> First Name: </b>";
                    echo "</td>";

                    echo "<td>";
                        echo $row['Firstname'];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Last Name: </b>";
                    echo "</td>";

                    echo "<td>";
                        echo $row['Lastname'];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Username: </b>";
                    echo "</td>";

                    echo "<td>";
                        echo $row['username'];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Password: </b>";
                    echo "</td>";

                    echo "<td>";
                        echo $row['password'];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Date Of Birth: </b>";
                    echo "</td>";

                echo "<td>";
                        echo $row['DOB'];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Email: </b>";
                    echo "</td>";

                    echo "<td>";
                        echo $row['email'];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>";
                        echo "<b> Address: </b>";
                    echo "</td>";
                    
                echo "<td>";
                        echo $row['Address'];
                    echo "</td>";
                echo "</tr>";
            echo "</table>";
        ?>
        
    </div>
    </div>
    </body>
    </html>