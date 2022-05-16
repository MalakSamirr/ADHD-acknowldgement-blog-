<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title> videos</title>
<style>
    .d1{
                background-color:black;
                color:white;
                width: 100%;
                height: 12%;
                font-size: 25px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                

            }
            a:link{
                text-decoration: none;
                padding: 10px;
            }
    .ve1{

         padding: 20px;
         background-color: rgb(255, 250, 250,0.6); 
         border: 1px solid #ccc;   
         margin: 20px;
         margin-left: 350px;
         width: 700px;
    }
    .ve2{

padding: 20px;
background-color: rgb(250, 250, 250,0.6); 
border: 1px solid #ccc;   
margin: 20px;
margin-left: 350px;
width: 700px;
         }
.ve3{
    
padding: 20px;
background-color: rgb(255, 255, 255,0.6); 
border: 1px solid #ccc;   
margin: 20px;
margin-left: 350px;
width: 700px;
}

body{

    background-image: url("back.jpg");
    background-repeat: repeat-y ;
    background-size: 100%;
}



</style>


</head>
<body>
    <div class="d1">
            <?php include_once 'nav.php'; ?>
        
    </div>   
    <div class="ve1">
    <video controls src="info.mp4" width="700px" height="400px">
    </video>
    </div>
    <br>
    <div class="ve2">
    <video controls src="medical.mp4" width="700px" height="400px">
    </video>
    </div>
    <br>
    <div class="ve3">
    <video controls src="causes.mp4" width="700px" height="400px">
    </video>
   </div>




</body>
</html>













