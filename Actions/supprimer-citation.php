<?php
if( isset($_GET['id'])){
  $id_citation = $_GET['id'];
  try{
    $bdd_perso = new PDO('mysql:host=localhost;dbname=site_perso;charset=utf8', 'root', '');
  }
  catch (Exception $e){
    die('Erreur : '.$e->getMessage());
  }

  $req = $bdd_perso->query("DELETE FROM `grand-maman` WHERE id_citation=$id_citation");

  header('Location: ../Admin/afficher-citations.php?a='.$_GET['id']);
}
else{
  header('Location: ../Admin/ajouter-citation.php');
}
?>
