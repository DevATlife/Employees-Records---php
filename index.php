<!DOCTYPE html>
<html>
<head>
   <script src="jquery-3.2.1.js"></script> 
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
    
    h1{
        color:aliceblue !important;
    }
 
    td{
        color:#262626;
        padding:15px;
    }
    tr{
     background: #f2f2f2; 
     color:#262626;   
    }
    
    td:first-child{background: gold; color:black;}
    tr:first-child{background: orange;}
    td:last-child{background: #992300; color:#262626;}
    td:nth-child(8){background: #4bbbeb; color:#262626;}
    
    tr:not(first-child){
     background:#f2f2f2 ; 
     color:#262626;  
    }
    .update{
        color:#262626;
        background:#333333;
    }
    
    .delete{ color:#262626;
        background:#333333;
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
    
    a{
       color:aliceblue;
        padding:21px;
        text-decoration: none;
        font-weight:bold;
        font-size: 18px;
    }
    
</style>
<body>
    

<?php

require ('connection.php');
$conn = connect();
    
$sql = "SELECT * FROM jemployee"; // a variable holding the query    
$result = $conn->query($sql) or  die("could not send the query".$conn->error);  //variable hold the result



echo ("<center><h1>Employee Records</h1>");
echo ("<a href='search.php'><i class='fas fa-search'></i>&#160;&#160;Search for an employee </a> &#160;&#160;&#160;&#160; <a href='DB.php'><i class='far fa-plus-square'></i>&#160; Add a new employee </a></center><br>");
    
echo ("<center><table><tr> <td>Id</td> <td>First Name</td> <td>Last Name</td> <td>Email</td> <td>Comment</td>  <td>Gender</td> <td>Department</td> <td style='background: #4bbbeb; color:aliceblue;'>Edit Record</td><td style='background: #992300; color:aliceblue;'>Delete Record</td></tr>");
if($result->num_rows>0){
while($row = $result->fetch_assoc()){

echo "<tr>";   
echo "<td>" . $row["id"] . "</td>" 
    . "<td>" . $row["first_name"]  . "</td>" 
    . "<td>" . $row["last_name"]  . "</td>"
    . "<td>" . $row["email"]  . "</td>"
    . "<td>" . $row["comment"]  . "</td>"
    . "<td>" . $row["gender"]  . "</td>"
    . "<td>" . $row["Department"]  . "</td>"
    
    ."<td><a href='update.php?id="  . $row['id'] ."'> <i class='far fa-edit'></i></a></td>"
    ."<td><a  href='delete.php?id={$row['id']}' onclick=\"return confirm('Do you really want to delete this?')\"><i class='far fa-trash-alt'></i></a></td>";
echo "</tr>";    
}
echo "</table></center>";    
}    
    else{
        echo "0 result";
    }


$conn->close();
?>
    
 
  
     
</body>
</html>