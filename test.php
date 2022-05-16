<?php
    session_start();

    if (! empty($_SESSION['message'])) {
        echo $_SESSION['message'];
    
        $_SESSION['message'] = "";
    }

    if (! (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)) {
        $_SESSION['message'] = "Log in first!";

        header('Location: log.php');
    }

?>

<html>
    <head>
        
        <style>
             .d1{
                background-color:black;
                color:white;
                width:98.77%;
                height: 12%;
                font-size: 25px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            a:link{
                text-decoration: none;
                padding: 10px;
            }
            .body{
                
                width: 100%;
                height: 100%;
                background-image:url(back1.jpg);
                
                background-repeat: repeat-y;
                background-size: 100%;
            }
            .p{
                font-size: 25px;
                font-weight: bold;
                color:black;
                padding:50px;
                word-spacing: 10px;
                text-align:left;
                float: left;
                background-color: rgb(255, 255, 255,0.6);

                          }
            .b{
               font-weight: bold;
               border-radius: 20px;
               font-size: 30px;
               margin-top: 10px;
               
            }
            .l{
                
                text-align: center;
            }
        </style>
    </head>
    <body class="body" >
        <div class="d1">
            <?php include_once 'nav.php'; ?>
        </div>
            <form action="result.php" method="post">
                <div class="p" style = "border-style: solid ; width: 42% ; " >
                <input type="checkbox" name="choices[]"> Hyperactivity. <br><br>
                <input type="checkbox" name="choices[]"> Not focusing on one thing. <br><br>
                <input type="checkbox" name="choices[]"> Difficulty carrying out tasks. <br><br>
                <input type="checkbox" name="choices[]"> Exposure to accidents and injuries more than others. <br><br>
                <input type="checkbox" name="choices[]"> Difficulty completing homework. <br><br>
                <input type="checkbox" name="choices[]"> Decreased self-confidence. <br><br>
                <input type="checkbox" name="choices[]"> Talking continuously. <br><br>
                <input type="checkbox" name="choices[]"> Lack of self-control. <br><br>
                <input type="checkbox" name="choices[]"> Interrupting the talk of others. <br><br>
                <input type="checkbox" name="choices[]"> Avoid carrying out tasks that he does not like.<br><br>
                </div><div class="p" style = "border-style: solid ; width: 41% ; height: 96.3%;">
                <input type="checkbox" name="choices[]"> Rush in reactions. <br><br>
                <input type="checkbox" name="choices[]"> Easy to dispersion. <br><br>
                <input type="checkbox" name="choices[]"> Forget what is asked of him. <br><Br>
                <input type="checkbox" name="choices[]"> Fatigue and discomfort. <br><br>
                <input type="checkbox" name="choices[]"> Permanent nerve. <br><br>
                <input type="checkbox" name="choices[]"> Finds it difficult to stay in one place for too long. <br><br>
                <input type="checkbox" name="choices[]"> Tends to run and climb exaggerated. <br><br>
                <input type="checkbox" name="choices[]"> Hooliganism permanently.<br><br> 
                <input type="checkbox" name="choices[]"> Fabricating problems with other children. <br><br>
                <input type="checkbox" name="choices[]"> Continuously losing his things. <br><br>
            </div>
            <div class="l" >
                <input type="submit"  class="b" name="submit">
                <input type="reset" class="b" >
               </div>
            
    </body>
</html>