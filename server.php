<?php
//to connet to  database with super user credentials
$db = mysqli_connect("localhost","root","","registeration");

//to save user session 
SESSION_start();

//funtion save date coming from input to variables when user click on register button 
if(isset($_POST['register'])){
    //to get input value from input fields
    $username = mysqli_real_escape_string($db, $_POST['un']);
    $email = mysqli_real_escape_string($db, $_POST['em']);
    $pswd = mysqli_real_escape_string($db, $_POST['psw']);
    //to encrept user password 
    $password = md5($pswd);
    //to insert user information in data base
    $sql = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";
    mysqli_query($db, $sql);
    //to redirect data from registration page to index page  
    header('location:login.php');
}

// echo $username.;
// echo $email;
// echo $password;

//funtion to log in when user click on login button 
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['un']);
    $pswd = mysqli_real_escape_string($db, $_POST['psw']);
   $password = md5($pswd);
    $query = "SELECT * FROM users WHERE username= '$username' AND password= '$password'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 1){
        $_SESSION['success']="you are logged in, ";
        $_SESSION['username']= $username;
        header('location:index.php');
    }else{
        echo "you entered wrong username or password";
        // $error = "Your Login Name or Password is invalid";
        // or header('location:registration.php');
    }
}

//funtion to log out when user click on logout button 
if(isset($_GET['logout'])){
    SESSION_destroy();
    unset($_SESSION['username']);
    header('location:index.html');
}
// mysqli_close($db);
    ?>