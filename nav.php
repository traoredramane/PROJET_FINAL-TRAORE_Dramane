<?php
try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=dramane', 'root', '');
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header>
       
<!-- 
    <nav>
            <a href=""><img src="logose.jpg" alt="" /></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">ACCEUIL</a></li>
                    <li><a href="service.php">SERVICES</a></li>
                    <li><a href="propo.php">A PROPOS</a></li>
                    <li><a href="connexion.php">NOUS CONTACTER</a></li>
                </ul>
            </div>
            <i class="fa fa-solid fa-bars fa" onclick="showMenu()"></i>
        </nav> -->
<section class="hout">
 <a href="" ><img src="logose.jpg" alt="" /></a>
 <nav class="navbar">
<a href="index.php">ACCEUIL</a>
 <a href="service.php">SERVICES</a>
 <a href="propo.php">A PROPOS</a>
 <a href="connexion.php">NOUS CONTACTER</a>
 </nav>

 <i class="fa fa-solid fa-bars"></i>
 </section>

<div class="head1">

  <div class="head">
  <marquee behavior="" direction="right"> <h1>Bienvenu au Lycée NATIONAL DE BOBO</h1>
   </marquee>
   <marquee behavior="" direction="left"> <p>Le lycée vous reserve un acceuil chalereux, <br>un cadre bien addapté à votre parcour scolaire;<br> Discuter et connaitre la vie scolaire du lycée.</p></marquee>
  </div>
<div class="head2">
<img src="hed.png" alt="">
</div>

</div>
</header><br><br>


