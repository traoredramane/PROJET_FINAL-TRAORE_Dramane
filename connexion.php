
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

<?php
include("nav.php")
?>
<!-- 
<section class="ins">
<p>Contacter-nous</p>
<h1>Sinformer et se connecter d'avantage</h1>

<div class="ci">
<form >
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Name</label>
  </div>

 
  <div class="form-outline mb-4">
    <input type="email" id="form4Example2" class="form-control" />
    <label class="form-label" for="form4Example2">Email address</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Message</label>
  </div>

  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
    <label class="form-check-label" for="form4Example4">
      Send me a copy of this message
    </label>
  </div>

 
  <button type="submit" class="btn btn-primary btn-block mb-4 bt">Send</button>
</form>

</div>
</section> -->



<section class="ins">
<div class="p-3 mb-2 bg-dark bg-gradient text-white"><h1>Sinformer et se connecter d'avantage</h1></div>
</section>



<section class="cta">
    
    <h1>Faites la différence avec votre Dossier</h1>
    <a href="" class="hero-btn">Joindre ses documents</a>
</section>




<section class="contact">

<h2 class="heading">Contact Us</h2>
<div class="rows">

<div class="col-lg-4">
<i class="fa-solid fa-mobile-screen-button"></i>
<div>call +22666919871</div>
<div>lundi-samedi (8h-12h)</div>
</div>


<div class="col-lg-4">
<i class="fa-solid fa-location-dot"></i>
<div>Localisation: Burkina Faso</div>
<div>Bobo_dioulasso</div>
</div>



<div class="col-lg-4">
<i class="fa-regular fa-envelope-open"></i>
<div>email: trdramane98@gmail.com</div>
<div>web: www.exemple.com</div>
</div>


</div>
</section><br>



<section class="container">
<div class="loca">
<div class="rows">
  <div class="col-lg-6">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.111232031748!2d-4.34075959000051!3d11.17939945158689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe34fc5e5a247dbb%3A0x5c39a8559720be4f!2sLyc%C3%A9e%20National%20De%20Bobo!5e0!3m2!1sfr!2sbf!4v1699809749921!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

<div class="col-lg-6">
<form method="post" action="traitement4.php">

  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" name="nom" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Name</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" id="form4Example2" class="form-control" />
    <label class="form-label" for="form4Example2">Email address</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" type="texte" name="mess" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Message</label>
  </div>


  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>
</div>



</div>

  </div>

  </section><br><br>

<?php
include("footer.php")
?>