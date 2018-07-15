<?php


function connect(){
$dbhost = "localhost";
$dbuser = "nasserje_admin10";
$dbpass = "*rtg176*";
$dbname = "nasserje_records";
    

// let's create db connection here
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

return $conn;
    
}
    
?>