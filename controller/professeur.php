<?php

function liste() {
  require ('model/professeur.php');
  $professeur = listeprof();
  require ('view/professeur/listeprof.php');
}

function afficheOne($id) {
  require ('model/professeur.php');
  $lprof = listeOnep($id);
  require('view/professeur/affiche1prof.php');
}

function formcreer() {
    require ('view/professeur/creerprof.php');
}

function creer(){
    require ('model/professeur.php');
    menregistrerp($_POST); 
}

function formmodif($id) {
  require ('model/professeur.php');
  $lprof = listeOnep($id) ;
  require ('view/professeur/modifprof.php');
}

function modifier(){
  require ('model/professeur.php');
  modificationp ($_POST); 
}

?>