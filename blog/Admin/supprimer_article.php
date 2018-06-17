<!DOCTYPE html>

<html>
	<?php include('../Templates/head.php')?>

	<body>
		<p class="d-none">
			Mon intro sympa qui va apparaitre sur la page du blog
		</p>
		<?php
		/* tests d'acces à la page */
		if(!isset($_GET['id'])){
			header('Location: blog.php');
		}

		$num_article = htmlspecialchars($_GET['id']);
		try{
			$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		}
		catch (Exception $e){
		  die('Erreur : ' . $e->getMessage());
		}

    $donnees = $bdd_blog->query("SELECT MAX(id) AS 'id_max' FROM `articles`;")->fetch();

		if($num_article>$donnees['id_max']){
      header('Location: blog.php');
		}
		?>

		<?php include('../Templates/header.php')?>

    <?php
    $donnees = $bdd_blog->query("SELECT * FROM `articles` WHERE id = $num_article;")->fetch();

		/* supprimer le dossier image */
		$dossier_traite = '../Images_blog/'.$donnees['dossier_im'].'/';

		$repertoire = opendir($dossier_traite); // On définit le répertoire dans lequel on souhaite travailler.

		while (false !== ($fichier = readdir($repertoire))) // On lit chaque fichier du répertoire dans la boucle.
		{
			$chemin = $dossier_traite."/".$fichier; // On définit le chemin du fichier à effacer.

			// Si le fichier n'est pas un répertoire…
			if ($fichier != ".." AND $fichier != "." AND !is_dir($fichier))
	       {
	       unlink($chemin); // On efface.
	       }
		}
		closedir($repertoire);
		rmdir($dossier_traite);

		@unlink('../'.$donnees['image_index']);
    @unlink('../articles/' . $num_article.'.php' );

    $donnees = $bdd_blog->query("DELETE FROM `articles` WHERE id=$num_article;")->fetch();

    ?>
    <section>
      <article>
        <h2>Votre article n'est désormais plus disponible </h2>
        <a href="../blog.php"><div class="boutton">
          Retour vers le blog
        </div></a>
      </article>
    </section>


		<?php include('../Templates/footer.php')?>

	</body>

</html>
