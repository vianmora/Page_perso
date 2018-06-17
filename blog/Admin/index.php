<?php session_start();

if(!isset($_SESSION['connected'])){
  header('Location: connection.php');
}
?>

<!DOCTYPE html>

<html>
  <?php include('../Templates/head.php')?>

  <body>
    <?php include('../Templates/header.php');?>


    <section>
      <article>
        <h1>Page admin</h1>
        <p>
          Bonjour <?php echo $_SESSION['prénom']; ?> ton voyage se passe bien ? Où es-tu actuellement ?<br />
          Tu es connecté en tant qu'administrateur, bon voyage !
        </p>
      </article>

      <a href="../Home/">
        <div class="boutton">
          retour au blog
        </div>
      </a>

      <a href="nouvel_article.php">
        <div class="boutton">
          Ajouter un nouvel article
        </div>
      </a>

      <a href="deconnection.php">
        <div class="boutton">
          Se déconnecter
        </div>
      </a>
    </section>

    <?php include('../Templates/footer.php')?>
  </body>
</html>
