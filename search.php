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

    <br><br>
   <div style=" margin-top": 50px; >
    <center><lable style="font-weight:bold;  font-size: 18px;"><i class='fas fa-search'></i>&#160;&#160;</lable>&#160;<input type='text' name='search_box' id='search_id' placeholder='search for an employee in DB'>  <a href='index.php'><i class='far  fa-address-book'></i>&#160; Return to main Page </a></center>
<center><div id='search-result'>...</div></center>
<br><br><br><br>
</div>
    
 <script>
    
$(document).ready(function(){
 $('#search_id').keyup(function(){
    var search_field = $(this).val();
     
     if(search_field != ''){
         $.ajax({
           url: 'grab.php',
            method: 'POST',
            data: {search:search_field},
             dataType:'text',    /*---- optional ---*/
             success: function(data){
                 $('#search-result').html(data);
             }
         });
     }else{
        $('#search-result').html(''); 
     }
 });
});    
    
    
</script>   
  
</body>
</html>