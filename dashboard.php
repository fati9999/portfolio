<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <style>
        body{
            margin:0px;
            border:0px;
        }
        #header{
            width:100%;
            height:120px;
            background: #db9bd6 ;
            color:white;
        }
        #sidebar{
            width:300px;
            height:400px;
            background:#db9bd6;
            float:left;
          
        }
        #data{
            height:700px;
            background: #dac0d8 ;
        }
        #adminelogo{
            background:white;
            border-radius:50px;
        }   
        

        ul li{
            padding:20px;
            border-bottom: 2px solid grey;
        }
        ul li:hover{
            background:#a8159c ;
            color:white;
        }

  </style>
</head>
<body>
    <div id="header">
     <center>   <img src="admine.png"style="height:100px" alt="adminelogo" id="adminelogo"><br>welcome 
    </center>



</div>
<div id="sidebar">
    <ul>
        <li> Add Data</li>
        <li>Delet Data </li>
        <li>Update data</li>
        <a style="color:black:text-decoration:none;" href="logoff.php"> <li>log off</li></a>
    </ul>


</div>
    
<div id="data">


</div>
    
    
</body>
</html>