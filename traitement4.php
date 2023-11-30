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
    $email = $_POST['email'];
    $message = $_POST['mess'];

    $requete = $bdd->prepare("INSERT INTO comment VALUES (0, :nom, :email, :mess) ");
    $requete->execute([
        
            "nom" => $nom,
            "email" => $email,
            "mess" => $message,
           
        
        
    ]);
    header("location: service.php");
}     
?>