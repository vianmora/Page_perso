<?php
if(isset($_POST['citation'])){
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


  $req = $bdd_perso->prepare("INSERT INTO `grand-maman` (citation, origine,  lien, carnet) VALUES(:citation, :origine, :lien, :carnet)");
  $req -> execute(array(
    'citation'=> $citation,
    'origine' => $origine,
    'lien' => $lien,
    'carnet' => $_POST['carnet']
  ));
  header('Location: ../Admin/ajouter-citation.php?added=1');
}
else{
  header('Location: ../Admin/ajouter-citation.php');
}
?>
