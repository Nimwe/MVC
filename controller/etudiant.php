<?php

function liste() {
  // dans cette fonction le controller va chercher 
  // ce qu'il faut pour afficher les étudiants
  // 1) les données 
  // 2) l'affichage des données
  require ('model/etudiant.php');
  // récupérer les données
  $etudiants = listeetudiants();
  require ('view/etudiant/listeetudiants.php');
}

function afficheOne($id) {
   require ('model/etudiant.php');
   $letudiant = listeOne($id) ;
   require ('view/etudiant/affiche1etudiant.php');
}

function formcreer() {
    require ('view/etudiant/creeretudiant.php');
}

function creer(){
    require ('model/etudiant.php');
    menregistrer($_POST); 
}

function formmodif($id) {
  require ('model/etudiant.php');
  $letudiant = listeOne($id) ;
  require ('view/etudiant/modifetudiant.php');
}

function modifier(){
  require ('model/etudiant.php');
  modification ($_POST); 
}
?>