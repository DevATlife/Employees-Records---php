<?php

require ('connection.php');
$conn = connect();



echo ("<br><br><center><table>");
echo ("<tr> <td>Id</td> <td>First Name</td> <td>Last Name</td> <td>Email</td> <td>Comment</td>  <td>Gender</td> <td>Department</td> <td style='background:#4bbbeb; color:white;'>Edit Record</td><td style='background:#992300; color:white;'>Delete Record</td></tr>");


$sql = "SELECT * FROM jemployee WHERE (first_name LIKE '%".$_POST['search']."%') OR (last_name LIKE '%".$_POST['search']."%') OR (email LIKE '%".$_POST['search']."%') ";
    
$result = $conn->query($sql);


if($result->num_rows>0){
while($row = $result->fetch_assoc()){

echo "<tr>";   
echo "<td>" . $row["id"] . "</td>" 
    ."<td>" . $row["first_name"]  . "</td>" 
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