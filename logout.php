<?php

session_start();

$_SESSION['loggedIn'] = false;

header('Location: progect1.php');