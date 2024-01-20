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
        /* .logo1{
            margin:0 100px;
        } */
</style>
    <style type="text/css">
    .form-control
	{
			width:200px;
			height: 30px;
	}
	.form1
	{
		margin:0 650px;
	}
	label
	{
		color: white;
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
					<li class="item"><a href="logout.php">Log-out</a></li>

                    <div class="logo1" style="text-align:right; color:white; "> 
                
                    <!-- echo "<img  style='border-radius:50%' height=30 width=40 src='images/".$_SESSION['pic']. "'>"; -->
                    <!-- ?> -->
                    <?php
                    // echo  $_SESSION['login_user'];
                    echo "Welcome " .$_SESSION['login_user'];
                    ?>
                    </div>
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
	<h2 style="text-align: center;color:black;">Edit Information</h2></div>
	<?php
		
		$sql = "SELECT * FROM users WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$Firstname=$row['Firstname'];
			$Lastname=$row['Lastname'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: black;">Welcome,</span>	
		<h4 style="color: black;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<h4><b>First Name</b></h4>
		<input class="form-control" type="text" name="Firstname" value="<?php echo $Firstname; ?>">

		<h4><b>Last Name</b></h4>
		<input class="form-control" type="text" name="Lastname" value="<?php echo $Lastname; ?>">

		<h4><b>Username</b></h4>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<h4><b>Password</b></h4>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<h4><b>Date Of Birth</b></h4>
		<input class="form-control" type="Date" name="DOB" value="<?php echo $DOB; ?>">

		<h4><b>Email</b></h4>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<h4><b>Address</b></h4>
		<input class="form-control" type="text" name="Address" value="<?php echo $Address; ?>">


		<br><br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">Save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$Firstname=$_POST['Firstname'];
			$Lastname=$_POST['Lastname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$DOB=$_POST['DOB'];
			$email=$_POST['email'];
			$Address=$_POST['Address'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE users SET pic='$pic', Firstname='$Firstname', Lastname='$Lastname', username='$username', password='$password',DOB='$DOB', email='$email',Address='$Address' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
     </div>
    </div>
</body>
</html>