<?php session_start();


?>

<html lang="fr">
    
    <!---First page of the Admin system--->

<head>
    
    <title>Code School</title>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="../css/adminstyle.css" rel="stylesheet" />
    
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>

<body>
    
  
    
<div id="containeradmin">
    
   <div class="login">
    
<h2> Page Login</h2>
    
    <br>
  
    
    <p><form name="formulairecours1" method="post" action="loginaccess.php">
    
    <label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />
 
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
    
    
   
<br><br>
       
       
    <img src="../img/imagebleu4.png" alt="capshaimg" style="width:113px;height:60px;">
       <br>
       <br>

       
<label for='capsha' >Capsha*:</label>
<input type='text' name='capshaconfirm' id='capshaconfirm' maxlength="70" />    
    
  <br>
       <br>
 
<input type='submit' name='submit' value='submit' />
    
    </form>
      </div>
</div>
</body>