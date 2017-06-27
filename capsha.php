<?php include("random.php");

session_start();


$nb_min = 3;
$nb_max = 105;
$_SESSION['nombre'] = rand($nb_min,$nb_max);




try {
    $bdd = new PDO('mysql:host=localhost;
    dbname=queez632_webecolequebec;charset=utf8', 'queez632_kyellin', 'Rodney1992');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}




$req= $bdd -> query("SELECT capsha FROM capsha WHERE id='".$_SESSION['nombre']."'");
    
 while ($texte_a_ecrire=$req -> fetch()) {


   

 



$image = imagecreate(75,40);
$green = imagecolorallocate($image, 0, 102, 0);
$blue = imagecolorallocate($image, 0, 0, 102);
$noir = imagecolorallocate($image, 0, 0, 0);
imagesetthickness($image, 1);  

$font=8;
$x=10;
$y=10; 
 

imagestring($image, $font, $x, $y, $texte_a_ecrire['capsha'], $blue);
     

     
/*                    x1        y2         x2         y2     colour  */
     
ImageLine ($image, $nombre1, $nombre7, $nombre13, $nombre19, $noir);
ImageLine ($image, $nombre2, $nombre8, $nombre14, $nombre20, $noir);
ImageLine ($image, $nombre3, $nombre9, $nombre15, $nombre21, $noir);
ImageLine ($image, $nombre4, $nombre10, $nombre16, $nombre22, $noir);
ImageLine ($image, $nombre5, $nombre11, $nombre17, $nombre23, $noir);
ImageLine ($image, $nombre6, $nombre12, $nombre18, $nombre24, $noir);
   
  
imagepng($image, "../img/imagebleu4.png");
     
     
header('Location: login.php');
 
 
 }
    
?>
