<?php


function connect(){
$dbhost = "localhost";
$dbuser = "the name of your database";
$dbpass = "*your database password";
$dbname = "the name of your database";
    

// let's create db connection here
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

return $conn;
    
}
    
?>