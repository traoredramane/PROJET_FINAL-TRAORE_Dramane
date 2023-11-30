<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}

if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age']; 
    $classe = $_POST['classe'];
    $tuteur = $_POST['tuteur'];
    $montant = $_POST['montant'];
    $rebouble = $_POST['redouble'];


    // $rol= $bdd->query("SELECT role_utilisateur FROM admi WHERE role_utilisateur= 'utilisateur' ");
    // $role= $rol->fetch();
    $requete = $bdd->prepare("INSERT INTO inscription VALUES (0, :nom, :prenom, :age, :classe, :tuteur, :montant, :redouble) ");
    $requete->execute([
        
            "nom" => $nom,
            "prenom" => $prenom,
            "age" => $age,
            "classe" => $classe,
            "tuteur" => $tuteur,
            "montant" => $montant,
            "redouble" => $rebouble,
        
    ]);
    header("location: inscription.php");
}     
?>