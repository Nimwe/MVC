<?php


function listeetudiants(){
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from etudiant');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;
}

function listeOne($id) {
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * from etudiant WHERE id = ?');
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row ;
}

function menregistrer($elts) {
   // print_r($elts);
    require 'connect.php';
    $sql = $pdo->prepare( 'INSERT into etudiant (nom,prenom) VALUES (?, ?)');
    $sql->execute([$elts['nom'],$elts['prenom']]);
}

function modification ($elts) {
     //print_r($elts);
     $nom = $elts['nom'];
     $prenom = $elts['prenom'];
     $id = $elts['id'];
     require 'connect.php';
     $sql = $pdo->prepare( 'UPDATE etudiant SET nom = ?,prenom = ? WHERE id = ?');
     $sql->execute([$nom,$prenom,$id]);
}
?>