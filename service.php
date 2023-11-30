
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJET_PERSONNEL</title>
    <link rel="stylesheet" href="style.css">
    <script src="/js/color-modes.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
<link rel="stylesheet" href="carousel.css">
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    


<?php
include("nave2.php")
?> 



<!-- notre equipe pedagogique -->

<div classe="container">


<section class="services ">
<h2 class="heading">Notre équipe</h2>
<div class="row ger">



<div class="box">
<img src="direct.png" alt="">
<h3>Nom du personnel</h3>
<p>Directeur/directrice:</p>
</div>



<div class="box">
<img src="secret.jpg" alt="">
<h3>Nom du personnel</h3>
<p>Secretaire administratif/ve:</p>
</div>



<div class="box">
<img src="ensei.jpg" alt="">
<h3>Nom du personnel</h3>
<p>Enseignent/e</p>
</div>


<div class="gerant"><a href=""><button class="btn btn-primary">Savoir+</button></a></div><br>
</div>


</section><br><br>


</div>

<!-- notre equipe pedagogique -->



<section class="container cls">
<div class="p-3 mb-2 bg-dark bg-gradient text-white"><h1>Activitées extra scolaire</h1></div><br><br>
  
<div class="row-jar">

<div>
  <div> <img src="danse.jpg" alt=""></div><br>
  <h1>Les plays-backs </h1>
<p>L’émission de feedbacks est souvent considérée comme un élément clé pour renforcer la motivation et soutenir la réussite des élèves</p>
 
</div>

<div>
<h1>Les interclasses</h1>
<p>la rencontre de jeux interclasses c’est bien autre chose. Il s’agit essentiellement: De favoriser le développement de l’esprit d’équipe (y compris par des équipes interclasses) </p><br>
<div> <img src="usibf.png" alt=""></div>

</div>


</div>

</section><br><br><br>



<section>
  <div class="extra">
 
  <div class="extra1">
    <img src="suivie.jpg" alt="">
  </div>

  <div class="extra2">
    <h1>​Valeurs & Mission</h1>
    <p>Au Lycée Scientifique National de Bobo Dioulasso, nous sommes convaincus que chaque élève a en lui un potentiel unique, que nous nous efforçons de développer à travers un enseignement rigoureux et adapté.</p><br>

    
    <p>La réussite de nos élèves est notre priorité, c'est pourquoi nous mettons tout en œuvre pour leur offrir un environnement d'apprentissage stimulant et des outils pédagogiques performants.Au-delà de la simple acquisition de connaissances, notre mission est de former des citoyens responsables et engagés, capables de contribuer au développement de leur pays et du monde</p><br>

    <p>Les lycées scientifiques nationaux ont pour but de former des élèves talentueux dans les domaines des mathématiques, des sciences physiques, de la chimie et de la biologie. Nous voulons donner à nos étudiants les outils nécessaires pour poursuivre des carrières scientifiques et techniques. Nous avons également pour mission de promouvoir l'éducation des filles dans les domaines scientifiques, où elles sont souvent sous-représentées.</p>

</div>
 

  </div>
</section><br><br>


<section class="services geran">
<h2 class="heading-zeran">Notre service</h2>
<div class="row">




<div class="box">
  <a href="discution.php"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
<h3>Information sur le collège (historique, valeur, equipe pedagogique)</h3>

</div>



<div class="box">
<a href=""><i class="fa-solid fa-gifts"></i></a>
<h3>Programme scolaire et activité proposées(clubs, sorties éducatives)</h3>

</div>



<div class="box">
<a href=""><i class="fa-solid fa-address-card"></i></a>
<h3>Inscription en ligne et suivie du dossier d'admission</h3>

</div>



<div class="box">
<a href=""><i class="fa-solid fa-spell-check"></i></a>
<h3>Consultation des emplois du temps et notrs des élèves</h3>

</div>



<div class="box">
<a href=""><i class="fa-regular fa-comments"></i></a>
<h3>Communication avec les enseignants et la direction via une messagerie interne</h3>

</div>


<div class="box">
<a href=""><i class="fa-solid fa-dice-d20"></i></a>
<h3>Les possibilités</h3>

</div>
 


</section><br>

<!-- les logos du ministère -->

<section>
  <div class="rows-logo">
  <div><a href=""><img src="fonction.jpg" alt=""></a></div>
    <div><a href=""><img src="unicef.png" alt=""></a></div>
    <div><a href=""><img src="jeunesse.jpg" alt=""></a></div>
    <div><a href=""><img src="unesco2.jpg" alt=""></a></div>
  </div>
</section><br><br>
<!-- les logos du ministère -->


<!-- 
<div class="b-example-divider"></div>



  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">SERVICE</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="bi fa-solid fa-house">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="btn btn-primary">
            Primary button
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="bi1 fa-solid fa-user-tie">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="btn btn-primary">
            Primary button
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="bi2 fa-solid fa-people-arrows">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="btn btn-primary">
            Primary button
          </a>
        </div>
      </div>
    </div>
  </div>










 -->


<section class="docu">

<h1>Les Documents</h1>

<div class="not">

<div class="not1">


<i class="fa-solid fa-photo-film do1"></i>
<h2>La Galerie</h2>
<p>Vous pouvez ajoutez vos <br> images et sauvegarder des <br> images dejà telechargé</p>
<a href=""><button class="btn btn-primary" type="button">Suivre</button></a>
</div>

<div class="not2">
<i class="fa-solid fa-check-double do1"></i>
<h2>Resultat scolaire</h2>
<p>Voire les notes et<br> resultats d'exament</p>
<a href=""><button class="btn btn-primary" type="button">Suivre</button></a>

</div>

<div class="not3">
<i class="fa-solid fa-book do1"></i>
<h2>Bibliothèque</h2>
<p>Vous trouverez plusieurs livre <br> et documents des cours ici qui<br> aiderons les élèves</p>
<a href=""><button class="btn btn-primary" type="button">Suivre</button></a>
</div>
</div>

</section><br><br>

<section class="container">
<div class="comment">
  <h2 class="temoin">Les Temoignages</h2>
  <table>
  <thead>
<h1></h1>
<h3></h3>
<p></p>

</thead><br>
<tbody><br>
<?php 
  $req = $bdd->query("SELECT * FROM comment");
  while($user= $req->fetch()){
?>

<hr>
<h1><?php echo $user['nom'] ?></h1>
<h3><?php echo $user['email'] ?></h3>
<p><?php echo $user['message'] ?></p><br>

</div>
<?php } ?>
</tbody>
</table>
</section><br><br>

<?php
include("footer.php")
?>