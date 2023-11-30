
<?php

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
    <title>PROJET_PERSONNEL</title>
    <link rel="stylesheet" href="style.css">
    <script src="/js/color-modes.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
<link rel="stylesheet" href="carousel.css">
<link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    



<?php
include("nave3.php")
?>



<!-- a propos du lycee -->

<section><br><br>
<div class="rows-nous">

<div class="col-lg-6 qo">
<h1>Qui sommes-nous</h1><br>
<p>Le lycée bobo est bien plus qu'un simple établissement d'enseignement. C'est une communauté dynamique et engagée, où les élèves ont la possibilité de s'impliquer dans une variété d'activités périscolaires, de clubs et d'organisations. Que vous soyez intéressé par les sciences, la technologie ou le sport, il y a toujours quelque chose à faire pour vous divertir et vous épanouir. Nous encourageons nos élèves à explorer leurs passions <br> et à développer leur leadership dans un environnement stimulant et bienveillant.</p>
<a href=""><button class="btn btn-primary">Savoir +</button></a>
</div>



<div class="col-lg-6">


<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%"   src="travail.jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%"  src="parent.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%"  src="scc.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
      
      
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%"  src="suivie.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>



</div>
</section><br><br>



<section class="dispo">
        <h1>Notre devise</h1>
        <p>Un enseignement de qualité avec des personnels qualifiés</p>

        <div class="row">
            <div class="dispo-col">
            <img  src="disci1.jpeg" alt="" />
                <div class="layer">
                <h3>DISCIPLINE</h3>
                </div>
            </div>
            
            
            <div class="dispo-col">
            <img src="travail.jpg" alt="" />
                <div class="layer">
                <h3>TRAVAIL</h3>
                </div>
            </div>
            
            <div class="dispo-col">
          <img class="ine" src="succes.jpg" alt="" />
                <div class="layer">
                <h3>SUCCES</h3>
                </div>
            </div>



        </div>

    </section><br><br>



<!-- partie communauté -->
<!-- 
    <section class="commu1">

<h1>PRESENTATION DU LYCEE</h1>

      <div class="commu">
      <div class="">
          <h3>Fratertnité</h3>
          <img class="car2" src="com0.jpg" alt="" />

          <p>
            Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. In aliquid
            perferendis <br> mollitia dolor et omnis.
          </p>
        </div>

        <div class="">
            <h3>Solidarité</h3>
          <img class="co2" src="com2.jpg" alt="" />

          <p>
            Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. In aliquid
            perferendis <br> mollitia dolor et omnis.
          </p>
        </div>

        <div class="">
            <h3>Travail</h3>
          <img class="co3" src="com3.jpg" alt="" />

          <p>
            Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. In aliquid
            perferendis <br> mollitia dolor et omnis.
          </p>
        </div>
      </div>
    </section><br><br>
     -->
    
    
<!-- a propos du lycee -->




<section class="container cls">
<div class="p-3 mb-2 bg-success bg-gradient text-white"><h1>Le cadre scolaire</h1></div><br>
  
<div class="row-jar">

<div>
  <div> <img src="classe2.jpg" alt=""></div>
  <h1> Salle de classe</h1>
<p>Le lieu où les élèves acquièrent de nouvelles <br>connaissances et compétences.</p>
 
</div>

<div>
<h1>Le jardin scolaire</h1>
<p>Les jardins scolaires sont un excellent outil <br>d'apprentissage pluridisciplinaire. <br> Ils permettent aux étudiants de travailler <br>sur leurs connaissances</p>
<div> <img src="jardin.jpg" alt=""></div>

</div>


</div>

</section><br><br><br>

 <section>
<div class="container cadre">
  
<div class="row-cadre2">

<div>
  <div> <img src="infirm.jpg" alt=""></div>
  <h1> Salle d'infirmerie</h1>
<p>Elle contribue à l'analyse des besoins particuliers et aux conditions de réalisation de l'intégration avec l'ensemble de l'équipe éducative. elle participe à la mise en œuvre des soins, des aides techniques et des aménagements nécessaires.</p>
 
</div>

<div>
<h1>Salle d'informatique</h1>
<p>Elle a construit le passé, construit le présent et construira certainement le futur. Sans informatique pas de nouvelles technologies et pas de nouvelles technologies pas d'avenir meilleur. L'informatique est un domaine incontournable dans la vie car sans elle pas de vie</p>
<div> <img src="informa.jpg" alt=""></div>

</div>


</div>
</div>
 </section><br><br>



<section class="sport">
<h1>Les discipline sportives</h1>

<div class="card text-center">
 
  <div class="card-body">
    <h3 class="card-title">Des moments de detentes et de loisirs</h3>
    <p class="card-text text1">Le sport scolaire contribue à promouvoir le respect de l'éthique et des valeurs éducatives et humanistes du sport. Il joue un rôle déterminant dans l'accès des jeunes au sport et donne sens au "vivre ensemble" et à l'apprentissage de la vie associative.</p>
    <a href="#" class="btn btn-primary" data-mdb-ripple-init>En savoir+</a>
 

</div><br>


<div class="row-spo">

<div class="sport-col">
<img src="foot.jpg" alt="">
<h2>Terrain de foot</h2>
<p>le sport est essentiel au bien-être <br> des jeunes</p>
</div>

<div class="sport-col">
<img src="piscine.jpg" alt="">
<h2>Salle de natation</h2>
<p>Apprendre à nager et ainsi assurer sa <br>sécurité  en milieu aquatique.</p>
</div>

<div class="sport-col">
<img src="vollet.jpg" alt="">
<h2>Terrain de voley ball</h2>
<p> il permet de stimuler les capacités <br> cardiovasculaires et respiratoires <br> ainsi que l'endurance.</p>
</div>

<div class="sport-col">
<img src="basqette.jpg" alt="">
<h2>terrain de basket</h2>
<p>C'est un sport qui équilibre le collectif <br>et l'individu et favorise la prise <br> de responsabilité.</p>
</div>

</div>
</section><br><br>

<!-- <section class="carou">

<h1>PRESENTATION DU LYCEE</h1>

<div class="rows">
<div class="col-lg-10">


<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%"   src="piscine.jpg" alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%"  src="foot.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%"  src="biblio.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
      
      
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%"  src="basqette.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>
</div> -->



<section>


<div class="b-example-divider"></div>

<div class="container my-5">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1 text-body-emphasis">L'histoire du lycée</h1>
      <p class="lead">Le concept du lycée nationale au Burkina Faso est relativement lointain. Il a été lancé en 2003 par le ministère de l'Éducation nationale de l'Alphabétisation et la Promotion des Langues Nationales, dans le but de combler le manque d'établissements secondaires scientifiques dans le pays.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Primary</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3 nez" src="histoire.jpg" alt="" width="800">
    </div>
  </div>
</div> 


<div class="evolution">
<div class="b-example-divider"></div>

<div class="container col-xxl-8 px-9 py-6">
  <div class="row flex-lg-row-reverse align-items-center g-7 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="evolution.jpg" class="d-block mx-lg-auto img-fluid nez" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Evolution du lycée</h1>
      <p class="lead">Au fil des années, les lycées scientifiques nationaux ont connu un grand succès, avec des résultats académiques exceptionnels et des anciens élèves qui poursuivent des carrières scientifiques et techniques à travers le monde. Le lycée scientifique national de Bobo Dioulasso est notamment devenu célèbre pour avoir remporté plusieurs jeux olympiades, notamment en mathématiques, en physique et en français. Aujourd'hui, les lycées scientifiques nationaux sont considérés comme des institutions d'excellence en matière d'éducation scientifique au Burkina Faso.

</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">En savoir +</button>
      </div>
    </div>
  </div>
</div>
</div>
</section><br>

<section class="commenter">
<h1>Laisser un commentaire</h1>

<form method="post" action="traitement4.php">
  <!-- Nom input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="texte" name="nom" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Nom</label>
  </div>

  <!-- EMAIL input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" name="email" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Address Email</label>
  </div>
  
  <!-- Message input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <textarea type="texte" name="mess" class="form-control" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">commentaire</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
    

  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
</form>

</section>


<?php
include("footer.php")
?>