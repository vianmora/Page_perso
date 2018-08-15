<?php
if(isset($_POST['citation']) && isset($_GET['id'])){
  $id_citation = $_GET['id'];
  try{
    $bdd_perso = new PDO('mysql:host=localhost;dbname=site_perso;charset=utf8', 'root', '');
  }
  catch (Exception $e){
    die('Erreur : '.$e->getMessage());
  }

  $citation = nl2br(htmlspecialchars($_POST['citation']));
  $origine = htmlspecialchars($_POST['origine']);
  if(isset($_POST['lien'])){
    $lien = htmlspecialchars($_POST['lien']);
  }
  else{
    $lien = "#";
  }


  $req = $bdd_perso->prepare('UPDATE `grand-maman` SET citation = :nv_citation, origine = :nv_origine, lien = :nv_lien, carnet = :nv_carnet WHERE id_citation ='.$id_citation);

  $req -> execute(array(
    'nv_citation'=> $citation,
    'nv_origine' => $origine,
    'nv_lien' => $lien,
    'nv_carnet' => $_POST['carnet']
  ));
  header('Location: ../Admin/afficher-citations.php');
}
else{
  header('Location: ../Admin/ajouter-citation.php');
}
?>
