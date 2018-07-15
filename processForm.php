<!DOCTYPE html>
<html>
<head>

</head>
<style>
body{
   background: linear-gradient(to right, #751aff , #8080ff );
    color:whitesmoke;
    font-family: calibri;
    text-align: center;
    }
</style>
    
<body>
    
 <?php
    
require ('connection.php');
    
$conn = connect();
$firstName = $conn-> real_escape_string($_POST['first_name']);
$lastName = $conn->real_escape_string($_POST['last_name']);
$email  = $conn->real_escape_string($_POST['email']);
$comment =$conn->real_escape_string($_POST['comment']);
$gender = $conn-> real_escape_string($_POST['gender']);

    
$dep = implode(",",$_POST['Department']);
    
    
$sql = "INSERT INTO jemployee (first_name,last_name,email,comment,gender,Department) VALUES('".$firstName."', '".$lastName."', '".$email ."', '".$comment."', '".$gender."', '".$dep."')";
    
$success = $conn->query($sql);   //sending the query
    
if(!$success){
 die("could not send the data".$conn->error);   
}   


    
$conn->close(); 
    
?>    

</body>
</html>    