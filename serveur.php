<?php
session_start();

try{
// accès a la base de données
$bdd = new PDO('mysql:host=localhost;dbname=universite;charset=utf8','root', "",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// query prepare la requete
$reponse = $bdd->query('SELECT * FROM etudiants'); 

}
catch(PDOException $e){
    die('Erreur sur le serveur'.$e->getMessage());
    exit;
    } 
 
    // fetch va chercher la requête   
 while($resultat = $reponse->fetch()){

        

 }

