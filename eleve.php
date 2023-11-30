<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
</head>
<body>

<section class="">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="bari container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active xi" aria-current="page" href="inscri.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connect.php">S'inscrir</a>
        </li>
       
      </ul>
      <form class="d-flex input-group w-auto">
        <input
          type="search"
          class="form-control"
          placeholder="Type query"
          aria-label="Search"
        />
        <button
          class="btn btn-outline-primary"
          type="button"
          data-mdb-ripple-color="dark"
        >
          Search
        </button>
      </form>
    </div>
  </div>
</nav><br><br>
 
</section>
 





<section class="container eleve">


<form method="post" action="traitement3.php">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="nom" id="form3Example1" class="form-control" placeholder="entrez votre nom" required />
        <label class="form-label" for="form3Example1">Nom</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="prenom" id="form3Example2" class="form-control" placeholder="entrez votre prenom" required />
        <label class="form-label" for="form3Example2">Prenom</label>
      </div>
    </div>
  </div>

  <!-- age -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" name="age" id="form3Example3" class="form-control" placeholder="entrez votre age" required  />
    <label class="form-label" for="form3Example3">Age</label>
  </div>

  <!-- classe input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="classe" id="form3Example4" class="form-control" placeholder="entrez votre classe" required />
    <label class="form-label" for="form3Example4">Classe</label>
  </div>

  
  <!-- tuteur input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="texte" name="tuteur" id="form3Example3" class="form-control" placeholder="entrez votre tuteur" required />
    <label class="form-label" for="form3Example3">Tuteur</label>
  </div>

  <!-- montant input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" name="montant" id="form3Example4" class="form-control" placeholder="entrez le montant" required />
    <label class="form-label" for="form3Example4">Montant</label>
  </div>

  
  <!-- redoube/passe input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="texte" name="redouble" id="form3Example4" class="form-control" placeholder="remplie la case" required />
    <label class="form-label" for="form3Example4">Redouble/passe</label>
  </div>

 

  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">Valider</button>

  
</form>

</section>