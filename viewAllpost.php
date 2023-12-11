<?php

include 'db.php';
include 'upload.php';
include 'view.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view post</title>
</head>
<body>
    <style>

        body
        {
            background-color:rgb(36, 35, 35);
            color:white;
            font-size:18px;
            font-weight:400;
        }
        .post1
        {
            height:200px;
            width:200px;
            display:flex;
            flex-direction:column;
           position:absolute;
           left:40%;
            margin:10px;
            padding:10px;

        }
        .post2
        {
            height:200px;
            width:200px;
            display:flex;
            flex-direction:column;
           position:absolute;
           left:40%;
           top:40%;
           /* //border:1px solid black; */
            margin-top:60px;
            padding:10px;
           
        }
        .post3
        {
            height:200px;
            width:200px;
            display:flex;
            flex-direction:column;
           position:absolute;
           left:40%;
           top:60%;
         
            margin:50px;
            padding:50px;
        }
    </style>
 
    <div class="post1">
       <?php
    $sql = "SELECT * FROM images WHERE id = 1";
    $sth = $con->query($sql);
    $result=mysqli_fetch_array($sth);
    echo 'cat image 1';
    echo '<img src="data:images/jpg;base64,'.base64_encode( $result['image'] ).'">';
    
    ?>
     </div>
   
    
   
     <div class="post2">
     <?php
    $sql = "SELECT * FROM images WHERE id = 28";
    $sth = $con->query($sql);
    $result=mysqli_fetch_array($sth);
    echo 'cat image 2';
    
    echo '<img src="data:images/jpeg;base64,'.base64_encode( $result['image'] ).'">';
    
    ?>
     </div>
     
     
     
     </div>
     
     
     <div class="post">
        
     </div>
     
</body>
</html>