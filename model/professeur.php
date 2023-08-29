<?php


function listeprof(){
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from professeur');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;
}

function listeOnep($id) {
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from professeur WHERE id = ?');
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row ;
}

function menregistrerp($elts) {
   // print_r($elts);
    require 'connect.php';
    $sql = $pdo->prepare( 'INSERT into professeur (nom,prenom) VALUES (?, ?)');
    $sql->execute([$elts['nom'],$elts['prenom']]);
}
function modificationp($elts) {
    //print_r($elts);
    $nom = $elts['nom'];
    $prenom = $elts['prenom'];
    $id = $elts['id'];
    require 'connect.php';
    $sql = $pdo->prepare( 'UPDATE professeur SET nom = ?,prenom = ? WHERE id = ?');
    $sql->execute([$nom,$prenom,$id]);
}

?>