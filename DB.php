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
    
    h1{
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
        background-color: rgba(0, 0, 0, 0.9);
        width:500px;
        border-radius: 5px;
        color: white;
        font-family: calibri;
        font-size: 16px;
        font-weight: bold;
        margin-top: 80px;
        
    }
    
    #submit-btn{
        background:transparent;
        color: white;
        width:250px;
        padding:12px;
        border: 1px solid aliceblue;
        border-radius: 5px;
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
    
  #employeeT input{
    margin: 12px;
    }
</style>
<body>
    <br><br>
<center><a href='index.php'><i class='far  fa-address-book'></i> &#160; Return to The Records </a></center>    
<center>
<form   method="post" id="employeeForm-id" onsubmit="return submitMy_form()">   
<table id="employeeT">
<tr>
<td>First Name</td>
<td><input type="text" name="first_name"  style="width: 250px;border-radius: 5px;" required></td>
</tr> 
    
<tr>
<td>Last Name</td>
<td><input type="text" name="last_name" style="width: 250px;border-radius: 5px;" required></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" style="width: 250px;border-radius: 5px;" required></td>
</tr>

<tr>
<td>Comment</td>
<td><input name="comment" style="width: 250px;border-radius: 5px;"></td>
</tr>

<tr>
<td>Gender</td>
<td>
<input type="radio" value="male" name="gender">Male
<input type="radio" value="female" name="gender">Female   
</td>
</tr>
    
<tr>
<td>Department</td>
<td>
<input type="checkbox" value="Web Applications" name="Department[]">Web Applications
<input type="checkbox" value="Graphic Design" name="Department[]">Graphic Design   
</td>    
</tr>   
 
 

</table>
    
    <center><input type="submit" value="Save Info"  id="submit-btn"></center>
   
    <center><h2 id="form-submitted"></h2></center>
</form> 
    </center>
    
    
  
    <script src="jquery-3.2.1.js"></script> 
    
    <script>
    function submitMy_form(){
        $.ajax({  
        type:'POST',
         url:'processForm.php',
         data:$('#employeeForm-id').serialize(),
        success: function(){
        $('#form-submitted').html("Your info has been saved, Thank you!");
            setInterval(function(){ window.location.href='index.php'; }, 2000);
             
        },
        error: function(){
            alert("could not connect to the server");
        }
        });
        var targettingForm = document.getElementById('employeeForm-id').reset();
        return false;  
    } 
    
    </script> 
    
</body>
</html>