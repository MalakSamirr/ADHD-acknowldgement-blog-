<?php
    session_start();

if (! empty($_SESSION['message'])) {
        echo $_SESSION['message'];
    
        $_SESSION['message'] = "";
    }

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $_SESSION['message'] = "You're logged in, you can not be here.";

        header('Location: test.php');
    }
?>
<html>
    <head>
        <title>sign up</title>
        <style>
            .b{
                
                width: 100%;
                height: 100%;
                background-image:url(back.jpg);
                
                background-repeat: no-repeat;
                background-size: 100%;
            }
            .p{
                font-size: 25px;
                font-weight: bold;
                color:black;
                padding:50px;
                word-spacing: 10px;
                text-align:left;
                float:left;
                background-color: rgb(255, 255, 255,0.6);
                position: absolute;left: 400;top:200 ;
                font-family: fantasy;
                font-size: 20px;
            }
            .k{
                background-color: transparent;
                border-color:black;
                border-radius: 5px;
                background-color: transparent;
                margin-top: 5px;
                font-size: large;

            }
        </style>
    </head>
    <body class="b">
        <div class="p">
<center>
    <form action="reg.php" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td> <input name="username" type="text" required></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input name="password" type="password" required></td>
            </tr>
            <tr>
                <td>Re-Type Password: </td>
                <td><input name="repassword" type="password" required></td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td><input name="email" type="email" required></td>
            </tr>
            <tr>
                <td><input name="reg" type="submit" value="sign up" class="k"></td></form>
                <td><a href="log.php">Already have account? Login </a></td>
            </tr>
        </table>
    </center></div>
</body>
</html>