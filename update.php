<?php


require ('connection.php');
$conn = connect();

$id = $conn->real_escape_string($_REQUEST['id']);

$sql ="SELECT * FROM jemployee WHERE id= '" .$id. "'";

$result = $conn->query($sql) or  die("could not retrieve the data".$conn->error);  

/*---- echo ($sql);   ----- if you want to check if your code hits this sql ---*/

$row = $result->fetch_assoc()  or  die("could not send the data".$conn->error);    //retrieving the selected row
?>



<!DOCTYPE html>
<html>
<head>
    
<title>Employees DB</title>   

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
       
    #employeeForm-id{
         padding: 25px;
        background-color: rgba(0, 0, 0, 0.7);
        width:500px;
        border-radius: 5px;
        color: white;
        font-family: calibri;
        font-size: 16px;
        font-weight: bold;
        margin-top: 80px;
        
    }
        
        #employeeT{
        padding: 25px;
        width:500px;
        border-radius: 5px;
        color: white;
        font-family: calibri;
        font-size: 16px;
        font-weight: bold;
    }  
    
      #submit-btn{
        background:transparent;
        color: white;
        width:250px;
        padding:12px;
        border: 1px solid aliceblue;
        border-radius: 5px;
    }
    
 
    
  #employeeT input{
    margin: 12px;
    }  
</style>
<body><br><br>
<center><a href='index.php'><i class='far  fa-address-book'></i> &#160; Return to main Page </a></center>    
<center>
<center>
<form action="update_process.php"  method="post"  id="employeeForm-id">   
<table id="employeeT">
<tr>
<td> <input type="hidden" name="id" value="<?php print($id); ?>" > </td>
</tr> 
    
<tr>    
<td>First Name</td>
<td><input type="text" value="<?php print($row['first_name'])?>" name="first_name" style="width: 250px;border-radius: 5px;"></td>
</tr> 
    
<tr>
<td>Last Name</td>
<td><input type="text"  value="<?php print($row['last_name'])?>"   name="last_name" style="width: 250px;border-radius: 5px;"></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email"  value="<?php print($row['email'])?>"   name="email" style="width: 250px;border-radius: 5px;"></td>
</tr>

<tr>
<td>Comment</td>
<td><input   value="<?php print($row['comment'])?>"   name="comment" style="width: 250px;border-radius: 5px;"></td>
</tr>
   
</table>
    <center><input type="submit" value="Update Info" id="submit-btn"></center>
</form>
</center>
    
</body>
</html>