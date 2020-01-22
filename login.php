<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log on Siva</title>
    <meta name="description" content="siva">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="css/registration_login.css"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
</head>
<body>
   <div class="login">
   <h1>Login</h1>
      <form action="login.php" method="post" autocomplete="on">
         <label for="username"><i class="fas fa-user"></i></label>
                  
                  <input type="text" name="un" placeholder="Username" id="username" required/>
               <label for="password"><i class="fas fa-lock"></i></label>
                  <input type="password" name="psw" placeholder="Password" id="password" required/>

                  <input type="submit" value="Login" name="login" />
                  
                  <p>Not yet a member? <a href="registration.php">sign up</a></p>
               </form> 
               <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> -->
      </div>
          <!-- ==========================
      SECTION: Footer
========================== -->
<footer>
  <span>Copyright  &copy; 2018 <a style="text-decoration: none;" href="https://www.facebook.com/KhaledDev1" target="_blank" rel="noreferrer noopener" >Khaled Mohamed</a> All rights reserved.</span>
  </footer>
</body>
</html>
