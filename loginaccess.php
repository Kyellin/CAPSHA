<?php
ob_start();
session_start();



echo'
<html lang="fr">
    
    <!---First page of the Admin system--->

<head>
    
    <title>Code School</title>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="css/adminstyle.css" rel="stylesheet" />
    
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>

<body>
    
  
    
<div id="containeradmin">
    
    <div class="noaccess">
<p>';


if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];
$capshaconfirm=$_POST['capshaconfirm'];
 

}

if (empty($username)) {
    echo 'Vous avez pas mis de username<br><br>';
}

if (empty($password)) {
    echo 'Vous avez pas mis de password<br><br>';
}

if (empty($capshaconfirm)) {
    echo 'Vous avez pas remplie le Capsha<br><br>';
}


    try {
    $bdd = new PDO('mysql:host=localhost;dbname=queez632_webecolequebec;charset=utf8', 'queez632_kyellin', 'Rodney1992');
}
catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
    
$req=$bdd ->query("SELECT * FROM login WHERE username='$username'AND password='$password'");
$reponse=$req->fetch();
  
 $request = $bdd ->query("SELECT * FROM capsha WHERE id='".$_SESSION['nombre']."'");      
 $resultat=$request->fetch();   
    
  

if($username == $reponse['username'] AND $password == $reponse['password'] AND $resultat['capsha'] == $capshaconfirm){
    
    
	$_SESSION['username']=$username;
    header('Location: admin.php');

    
}

else{
	echo 'Vos informations sont incorrectes <br><a href="capsha.php">retour au site</a>';

}



echo'
    
    
     </p>   
    </div>
    </div>
    </body>';
ob_end_flush();
?>