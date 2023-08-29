<?php

require('model/etudiant.php');
require('model/professeur.php');

function formcreer(){
    $etudiants = listeetudiants();
    $professeurs = listeprof();

    require('view/inscription/creerinscription.php');
}


function creer(){
    require ('model/inscription.php');
    if (!fexist($_POST)) {
      register($_POST); 
    }
    header('location: http://localhost/mvc/petitmvc/index.php?execution=inscription/formcreer');
}
?>

