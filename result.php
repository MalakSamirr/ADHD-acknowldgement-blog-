<?php

session_start();

if (isset($_POST['submit'])) {
    $choices = $_POST['choices'];

    $originalChoicesNumber = 20;
    $userChoices = count($choices);

    $_SESSION['result'] = ($userChoices / $originalChoicesNumber) * 100; 
    
    header("Location: progect1.php");
}