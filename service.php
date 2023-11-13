
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
include("nav.php")
?> 

<section class="services">
<h2 class="heading">Notre service</h2>
<div class="row">




<div class="box">
  <a href="discution.php"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
<h3>Information sur le collège (historique, valeur, equipe pedagogique)</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempora velit blanditiis quod earum amet vel nostrum hic explicabo libero neque quaerat, cum vero ut quasi b?</p>
</div>



<div class="box">
<a href=""><i class="fa-solid fa-gifts"></i></a>
<h3>Programme scolaire et activité proposées(clubs, sorties éducatives)</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempora velit blanditiis quod earum amet vel nostrum hic explicabo libero neque quaerat, cum vero ut qua?</p>
</div>



<div class="box">
<a href=""><i class="fa-solid fa-address-card"></i></a>
<h3>Inscription en ligne et suivie du dossier d'admission</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempora velit blanditiis quod earum amet vel nostrum hic explicabo libero neque quaerat, cum vero ut quasi ?</p>
</div>



<div class="box">
<a href=""><i class="fa-solid fa-spell-check"></i></a>
<h3>Consultation des emplois du temps et notrs des élèves</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempora velit blanditiis quod earum amet vel nostrum hic explicabo libero neque quaerat, cum vero ut quasi beat?</p>
</div>



<div class="box">
<a href=""><i class="fa-regular fa-comments"></i></a>
<h3>Communication avec les enseignants et la direction via une messagerie interne</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempora velit blanditiis quod earum amet vel nostrum hic explicabo libero neque quaerat, cum vero ut quasi bea?</p>
</div>


<div class="box">
<a href=""><i class="fa-solid fa-dice-d20"></i></a>
<h3>Les possibilités</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempora velit blanditiis quod earum amet vel nostrum hic explicabo libero neque quaerat, cum vero ut quasi beatae dicta laboriosam tempore?</p>
</div>


<div class="col-lg-6 col-xxl-6 my-5 mx-auto">
  <div class="d-grid gap-2">
    <a href=""><button class="btn btn-outline-secondary" type="button">En savoir +</button></a>
  </div>
</div>
</div>


</section>

<!-- notre equipe pedagogique -->

<div classe="container">


<section class="services">
<h2 class="heading">Notre équipe</h2>
<div class="row">



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


</div>

<div class="col-lg-1 col-xxl-6 my-5 mx-auto">
  <div class="d-grid gap-2">
    <a href=""><button class="btn btn-outline-secondary" type="button">En savoir +</button></a>
    
    
  </div>
</div>

</section>


</div>

<!-- notre equipe pedagogique -->

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
<i class="fa-regular fa-folder-open do1"></i>
<h2>Status</h2>
<p>Regardez et mettre des status <br> pour vos contacts</p>
<a href=""><button class="btn btn-primary" type="button">Suivre</button></a>

</div>

<div class="not3">
<i class="fa-regular fa-bell do1"></i>
<h2>Bibliothèque</h2>
<p>Vous trouverez plusieurs livre <br> et documents des cours ici qui<br> aiderons les élèves</p>
<a href=""><button class="btn btn-primary" type="button">Suivre</button></a>
</div>
</div>

</section><br><br>


<?php
include("footer.php")
?>