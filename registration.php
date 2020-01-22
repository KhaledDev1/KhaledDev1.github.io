<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign up for Siva</title>
    <meta name="description" content="">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="css/registration_login.css"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
  </head>
  <body>
    <div class="signUp">
      <h1>Sign Up</h1>
      <form action="registration.php" method="post">
        <label for="username"><i class="fas fa-user"></i></label>
        <input type="text" name="un" placeholder="Username" id="username" required autofocus/>
        <label for="password"><i class="fas fa-lock"></i></label>
        <input type="password" name="psw" required placeholder="Password" required/>
        <label for="password"><i class="fas fa-envelope-square"></i></label>
        <input type="email" name="email" required placeholder="example@gmail.com" id="password" required/>
        <input type="submit" value="Submit" name="register" />
        <p>Already a member? <a href="login.php">Login</a></p>
      </form>
    </div>
        <!-- ==========================
      SECTION: Footer
========================== -->
<footer>
  <span>Copyright  &copy; 2018 <a style="text-decoration: none;" href="https://www.facebook.com/KhaledDev1" target="_blank" rel="noreferrer noopener" >Khaled Mohamed</a> All rights reserved.</span>
  </footer>
  </body>
</html>
