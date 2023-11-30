<?php
session_start();
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
} 
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="style2.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
</head>
<body>
    
<section class="nave3">
<div class="headerd">
    <a href="" class="logoe">Portfolio</a>
    
   
    <nav class="bars">
    <a href="index.php" style="--i:1" class="active">Acceuil</a>
        <a href="service.php" style="--i:2">Service</a>
        <a href="propo.php" style="--i:3">A propos</a>
        <a href="connexion.php" style="--i:4">Contact</a>
        <a href="">

        <?php
                
                if ($_SESSION['email']) {
                    echo $_SESSION['email'];
                    echo "<button style='margin-left: 20px; top:-30px; margin-right: 60px; height: 40px; background: red; border-radius: 5px; border: 2px solid wheat; text-align: center; font-size: 5px;'><a style='text-align: center; font-size: 1rem; text-decoration: none; color: white;' href='home.php'> Deconnection</a></button>";
 }?>

        </a>
    </nav>
</div>


<section class="homed">
<div class="homed-cont">
    <h3>BIENVENUE AU</h3>
    <h1>Lycés privé SYA</h1>
    <h3>Nous vous reservons <span class="multiple-text"></span></h3>
    <p>NOTRE DEVISE: DISCIPLINE, TRAVAIL, SUCCES</p>

<div class="social-media">
    <a href="" style="--i:7"><i class="fa-brands fa-twitter"></i></a>
    <a href="" style="--i:8"><i class="fa-brands fa-instagram"></i></a>
    <a href="" style="--i:9"><i class="fa-brands fa-linkedin"></i></a>
    <a href="" style="--i:10"><i class="fa-brands fa-facebook"></i></a>
</div>

<a href="connect.php" class="bout">Se connecter</a>

</div>

<div class="homed-img">
<img src="succes.jpg" alt="">
</div>
</section>

</section>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="script.js"></script>
</body>
</html>