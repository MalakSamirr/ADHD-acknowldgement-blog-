<?php

session_start();

require "dbcon.php";

$mail=$_POST["email"];
$pass= $_POST["password"];

$query="select * from user where email= '$mail' and password= '$pass'";
$res=mysqli_query($con, $query);
if(mysqli_num_rows($res)>=1) {
    $_SESSION['loggedIn'] = true;
    $_SESSION['message'] = "Logged Successfully!";

    header("Location: test.php");
}
else {
    echo '<script> alert("Invalid email/password") </script>';
    require "log.html";
}

mysqli_close($con);
