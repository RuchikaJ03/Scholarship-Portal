<?php
    include "connect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form For Scholarship</title>
</head>
<br><br>
<body>
    <h3 style="color:blue; text-align:centre;">Scholarship From</h3>
    <div class="container">
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

		<label><h4><b>First Name</b></h4></label>
		<input class="form-control" type="text" name="Firstname" value="<?php echo $Firstname; ?>">

		<label><h4><b>Last Name</b></h4></label>
		<input class="form-control" type="text" name="Lastname" value="<?php echo $Lastname; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
		<br>
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
			$email=$_POST['email'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE users SET pic='$pic', Firstname='$Firstname', Lastname='$Lastname', username='$username', password='$password', email='$email' WHERE username='".$_SESSION['login_user']."';";

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