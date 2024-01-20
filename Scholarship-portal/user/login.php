<?php
    // include "navbar.php";
    include "connect.php";
    session_start();    

?>
<!DOCTYPE html>
<html>
<head>

  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Scholarship Portal</h1><br>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form name="login" action="" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <input class="btn btn-default" type="submit" name="submit" value="Login">
      </form>
      <p style="color: white; padding-left: 15px;">
        <br><br>
        <a style="color:white;text-decoration:none;" href="update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        New to this website?<a style="color: white;text-decoration:none;" href="registeration.php">Sign Up</a>
      </p>
    </div>
  </div>
        <?php

          if (isset($_POST['submit'])) 
          {
              $res=mysqli_query($db,"SELECT * FROM `users` WHERE (username='$_POST[username]' && password='$_POST[password]');");
              $row=mysqli_fetch_assoc($res);
              $count=mysqli_num_rows($res);

          if($count==0)
          {
            ?>
              <script type="text/javascript">
                alert("The username and password is wrong.");
              </script>
              <?php
          }
          else 
          {
            $_SESSION['login_user']=$_POST['username'];
            // $_SESSION['pic']=$row['pic'];

            ?>
              <script type="text/javascript">
                window.location="dashboard.php";
              </script>
            <?php
          }
        }

        ?>
</body>
</html>