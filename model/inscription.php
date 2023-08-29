<?php
function register($elt) {
     require 'connect.php';
     $sql = $pdo->prepare( 'INSERT into inscription (id_etudiant, id_professeur) VALUES (?, ?)');
     
}

function fexist($elt) {
    require 'connect.php';
    $sql = $pdo->prepare( 'SELECT * FROM inscription WHERE id_etudiant= ? AND id_professeur=?');
    $sql->execute([$elt['id_etudiant'],$elt['id_professeur']]);
    if ($sql->rowCount() > 0) {
        return true ; 
    } else {
        return false ;
    }
}

?>