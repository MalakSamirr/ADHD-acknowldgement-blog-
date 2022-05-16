<?php session_start(); ?>
<html>
    <head>
        <title>

        </title>
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
        .b{
                background-image: url(back.jpg);
                background-repeat: no-repeat;
                background-size: 100%;
                font-family: sans-serif;
                word-spacing: 3px;
            }
            .p{
            background-color: rgb(253, 249, 249, 0.7);
            width: 100%;
            height: 100%;
            font-size: 20px;
            font-family: fantasy;
            }

        </style>
    </head>
    <body class="b">
    <div class="d1">
            <?php include_once("nav.php"); ?>
        </div>
        <div class="p">
            <div style="padding-left: 70px; padding-top: 5px; font-size:20px;" width="1000px" height="500px" >
        <h3><u>About Us: </u></h3>
        <table border = "border" width="1200" height="500" >
        <caption style="font-size: 30;">Group 8</caption>
            <tr>
                <th align="center">Name</th>
                <th  align="center">ID</th>
                <th  align="center">Email</th>
            </tr>
            <tr>
                <td  align="center"> Marwa Ramzy Mohamed Hassan Arafa. </td>
                <td  align="center"> 20201485992 </td>
                <td  align="center"> sci.marwaramzy85992@alexu.edu.eg </td>
            </tr>
            <tr>
                <td  align="center"> Hend Mahmoud Fathy Nassar. </td>
                <td  align="center"> 20201033046 </td>
                <td  align="center"> sci.HendMahoud33046@alexu.edu.eg </td>
            </tr>
                <tr>
                    <td  align="center"> Malak Samir Elsayed Mostafa Mohamed. </td>
                    <td  align="center"> 20201562447 </td>
                    <td  align="center"> sci.MalakSamir62447@alexu.edu.eg </td>
                </tr>
                <tr>
                    <td  align="center"> Mariam Sherif Ahmed Elsawy. </td>
                    <td  align="center"> 20201484869 </td>
                    <td  align="center"> sci.mariamsherif84869@alexu.edu.eg </td>
                </tr>
                <tr>
                    <td  align="center"> Somaia said Anwar. </td>
                    <td  align="center"> 20201616552 </td>
                    <td  align="center"> sci.somaiasaid16552@alexu.edu.eg </td>
                </tr>
                <tr>
                    <td  align="center"> Salma Ibrahim Ammar Ali.</td>
                    <td  align="center"> 20201616483 </td>
                    <td  align="center"> sci.salmaibrahim16483@alexu.edu.eg </td>
                </tr>
        </table>
    </div>
</div>
    </body>
</html>