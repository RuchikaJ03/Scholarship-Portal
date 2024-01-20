<?php
    include "connect.php";
    session_start();
?>
<!DOCTYPE html>
<html>
<head>

  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
<section>
    <div class="reg_img">
      <br> <br><br>
      <div class="box2">
          <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Scholarship Portal</h1><br>
          <h1 style="text-align: center; font-size: 25px;">Registration Form</h1><br>
        <form name="registration" action="" method="post">
          <br><br>
          <div class="login">
            <input type="text" name="Firstname" placeholder="First Name" required=""><br><br>
            <input type="text" name="Lastname" placeholder="Last Name" required=""><br><br>
            <input type="text" name="username" placeholder="Username" required=""> <br><br>
            <input type="password" name="password" placeholder="Password" required=""> <br><br>
            <input type="text" name="email" placeholder="Email Address" required=""><br><br>
            <input class="btn btn-default" type="submit" name="submit" value="Sign-Up">
        </form>
      </div>
    </div>
  </section>

        <?php
            if (isset($_POST['submit'])) {
              $count=0;
              $sql="SELECT username from `admin`";
              $res=mysqli_query($db,$sql);
  
              if ($res) 
              {
                while ($row=mysqli_fetch_assoc($res)) 
                {
                    if($row['username']==$_POST['username'])
                    {
                       $count=$count+1;
                    }
                }
              }
              if($count==0)
            {
              // mysqli_query($db,"INSERT INTO admin(Firstname, Lastname, username, password, email) VALUES ('".$_POST['Firstname']."','".$_POST['Lastname']."','".$_POST['username']."','".$_POST['password']."','".$_POST['email']."'"); 
              mysqli_query($db,"INSERT INTO `admin`(`Firstname`, `Lastname`, `username`, `password`, `email`) VALUES('$_POST[Firstname]', '$_POST[Lastname]', '$_POST[username]', '$_POST[password]', '$_POST[email]');");            
        ?>
            <script  type="text/javascript">
              alert("Registration successfull")
              </script>
        <?php
            }
            else {
              ?>
                
                <script  type="text/javascript">
                alert("The username already exists");
                </script> 
        <?php
            }
          }
        ?>

</body>
</html>