<?php
    include "connect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scholaship</title>
    <style type="text/css">
        .srch{
            padding-left:1000px;
        }
        body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* #main {
  transition: margin-left .5s;
  padding: 16px;
} */

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
	/* nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	} */
    body
    {
        background-color: white;
    }
    .book
    {
        height:25px;
        width:250px;
        margin: 0 auto;
    } */
    .container
    {
        padding-left:130px;
    }
</style>
</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div style="color:white; text-align:right;">
            <?php
                // echo "<img   style='border-radius:50%' height=30 width=40 src='images/".$_SESSION['pic']. "'>";
                // echo   $_SESSION['login_user'];
                    echo "Welcome " .$_SESSION['login_user'];
            ?>
      </div>
      <a href="profile.php">Profile</a>
      <a href="scholarship.php">Scholarship</a>
      <a href="addscholarship.php">Add Scholarship</a>
      <a href="addinternship.php">Add Internship</a>
      <!-- <a href="issue_info.php">Issue Information</a> -->
      <!-- <a href="expired.php">Expired List</a> -->
    </div>
    <div id="main">
      <script>
        function openNav() 
        {
          document.getElementById("mySidenav").style.width = "200px";
          document.getElementById("main").style.marginLeft = "200px";
          document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() 
        {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
          document.body.style.backgroundColor = "white";
        }
      </script>
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
          <li class="item"><a href="internship.php">Internships</a></li>
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
          </header>
              <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
              <div class="container">
                  <h2 style="color:black; font-family:Times New Roman; text-align:center;">Add New Scholarship</h2><br>
                  <form class="book" action="" method="post">
                      <input type="text" name="Scholarship" placeholder="Scholarship Name" required=""><br><br>
                      <input type="text" name="EligibilityCriteria" placeholder="Eligibility Criteria" required=""><br><br>
                      <input type="text" name="Awards" placeholder="Awards" required=""><br><br>
                      <button style="height:20px;width:50px" type="submit" name="submit" class="btn btn-default" >ADD</button>
                  </form>
              </div>
              <?php
                if (isset($_POST['submit'])) 
                {
                  if (isset($_SESSION['login_user'])) 
                  {
                    // mysqli_query($db,"INSERT INTO `scholarship`(`Scholarship`, `Eligibility Criteria`, `Awards`) VALUES ('$_POST[Scholarship]','$_POST[Eligibility Criteria]','$_POST[Awards]');");
                    mysqli_query($db,"INSERT INTO `scholarship`(`Scholarship`, `EligibilityCriteria`, `Awards`) VALUES ('$_POST[Scholarship]','$_POST[EligibilityCriteria]','$_POST[Awards]');");
                    ?>
                    <script type="text/javascript">
                      alert("Scholarship Added Successfully.");
                    </script>
                    <?php
                  }
                  else 
                  {
                    ?>
                    <script type="text/javascript">
                      alert("You need to login first.");
                    </script>
                    <?php
                  }
                }
                ?>
      </div>
    </div>
</body>