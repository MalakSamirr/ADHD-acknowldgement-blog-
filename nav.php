<nav style="padding: 10px;" >
    <img src="icon.png" width="50" height="50">  
    <a href="progect1.php" style="color: white;"> Home</a>
    <a href="test.php" style="color: white;"> Test</a>
    <a href="info.php" style="color: white;"> Info</a>
    <a href="causes.php" style="color: white;"> Causes</a>
    <a href="Symptoms.php" style="color: white;"> Symptoms</a>
    <a href="treatment.php" style="color: white;"> Treatment</a>
    <a href="doctors.php" style="color: white;"> Doctors</a>
    <a href="video.php" style="color: white;"> Videos</a>
    <a href="about.php" style="color: white;"> About us</a>

    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true): ?>
        <a href="logout.php" style="color: white;"> Logout</a>
    <?php else: ?>
        <a href="log.php" style="color: white;"> Login</a>
        <a href="signup.php" style="color: white;"> Signup</a>
    <?php endif; ?>
</nav>