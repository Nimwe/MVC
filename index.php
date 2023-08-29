<?php 

// dans l'url si on tape http://localhost/mvc/petitmvc/index.php?execution=etudiant/liste
// $action = $_GET['execution'];  // dans la variable $action je récupère: "etudiant/creer"
// $tab = explode('/', $action ) ; // dans tab[0] => 'etudiant' et dans tab[1] => 'creer'
//  dans $action je peux avoir 
// controller/action
//  controller/action/argument
// $arg=NULL;
// $controller = $tab[0];
// $fonction = $tab[1];  
// require('controller/'.$controller.'.php') ;
// $fonction();    // liste() 


// On peut vouloir lister un seul etudiant 
//dans l'url on tape pour les etudiants : 
//http://localhost/mvc/petitmvc/index.php?execution=etudiant/afficheOne/2
//Pour les professeurs: 
//http://localhost/mvc/petitmvc/index.php?execution=professeur/afficheOne/2

$action = $_GET['execution'];  
$tab = explode('/', $action ) ; 
$arg=NULL;
$controller = $tab[0];
$fonction = $tab[1];  
if(isset($tab[2])){
    $arg = $tab[2];
}

require('controller/'.$controller.'.php');

if(isset($arg)){
    $fonction($arg);  // affiche One de 1
 } else {
    $fonction();
}
  
?>