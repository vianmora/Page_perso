<?php session_start()?>

<!DOCTYPE html>

<html>
  <?php include('../Templates/head.php')?>

  <body>
    <?php include('../Templates/header.php');?>

    <?php

    if(isset($_SESSION['connected'])){
      if($_SESSION['connected']){
        header('Location: index.php');
      }
    }

    if(!isset($_POST['identifiant']))
    {
      ?>

    <section>
      <article>
        <h1>Page admin</h1>
        <h3>Veuilley vous identifier</h3>
        <?php
        if(isset($_GET['idOK'])){
          if(!$_GET['idOK']){?>
            <p style="font-style:italic;">
              L'identifiant ou le mot de passe indiqué ne semble pas
              correspondre... es-tu sur d'avoir le droit d'accéder à cette page ? :/
            </p><?php
          }
          elseif($_GET['idOK']==-1){?>
            <p style="font-style:italic;">
              Non mais tu m'as pris pour une buse en plus ? retourne jouer aux billes 😇
            </p><?php
          }
          elseif ($_GET['idOK']==100) {?>
            <p style="font-style:italic;">
              Tu es désormais déconnecté, rentre de nouveau ton identifiant et ton mot de passe pour pouvoir avoir acces aux fonctions administrateur ;)
            </p><?php
          }
        }
        ?>
        <!-- id : VianneyBG ; mdp : UnPetitPastis? -->
        <form method="POST" action="connection.php">
          <label for="identifiant">identifiant</label>
          <input type="text" name="identifiant" />
          <label for="mot_de_passe">mot de passe</label>
          <input type="password" name="mot_de_passe" />
          <input name="sent" type="submit" value="se connecter" />
        </form>
      </article>
    </section>

    <?php
    }

    else{
      if($_POST['identifiant']=='VianneyBG' || $_POST['mot_de_passe']=='UnPetitPastis?'){
        header('Location: connection.php?idOK=-1');
      }
      elseif($_POST['identifiant']!='vianmora' || $_POST['mot_de_passe']!='PetitBambouGris13'){
        header('Location: connection.php?idOK=0');
      }

      else{
        $_SESSION['connected']=1;
        $_SESSION['prénom']='Vianney';
        header('Location: index.php');
      }
    }?>


    <?php include('../Templates/footer.php')?>
  </body>
</html>
