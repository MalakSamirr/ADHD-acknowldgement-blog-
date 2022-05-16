<?php

session_start();

require "dbcon.php";

$uname= $_POST["username"];
$pass= $_POST["password"];
$repass= $_POST["repassword"];
$mail= $_POST["email"];

if($uname=="" || $pass=="" || $repass==""|| $mail=="") {
    echo '<script> alert("Empty Feild") </script>';
    require "signup.html";
} else if($pass!=$repass) {
    echo '<script> alert("password doesnt match") </script>';
    require "signup.html";
} else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    echo '<script> alert("Invaild email") </script>';
    require "signup.html";
} else{
    $sql="select * from user where user_name= '$uname'";
    $res=mysqli_query($con,$sql) or die(mysqli_error($con));
    if(mysqli_num_rows($res) >= 1) {
        echo '<script> alert("username already taken") </script>';
        require "signup.php";
    } else {
        mysqli_query($con,"insert into user (user_name, password, email) values ('{$uname}', '{$pass}', '{$mail}')");
        
        $_SESSION['loggedIn'] = true;
        $_SESSION['message'] = "Registed successfully!";
        
        header("location: test.php");
    }
}

mysqli_close($con);
