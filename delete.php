<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>    
<style>
    
  html,body{
    background: url('img/model-3211631_1920.jpg');
        font-family: calibri;
        height:100%;
        margin:0;
        color:#262626;
    }
    
    h1,h2{
        color:aliceblue !important;
    }
 
   a{
       color:aliceblue;
        padding:21px;
        text-decoration: none;
        font-weight:bold;
        font-size: 18px;
    }
    
    #search_id{
        width:350px;
        padding:12px;
        font-size: 18px;
        user-select: none;
        
    }
     .fas, .far{
        font-size: 30px;
        color:aliceblue;
    }
        
</style>    
<body>   
   
<?php

require ('connection.php');
$conn = connect();

$id = $conn->real_escape_string($_REQUEST['id']);

$sql ="DELETE FROM jemployee WHERE id= '" .$id. "'";

echo ('<center><br><br><br><h2>The employee record has been deleted </h2></center>');  // to the user
echo ("<center><h2>Return to" ."<a href='index.php'>" . " The Records &#160; &#160;" ."<i class='far fa-address-card'></i>"."</a></h2></center>");
$conn->query($sql)  or  die("could not send the data".$conn->error); 
?>
    
    
</body>     
    
</html>