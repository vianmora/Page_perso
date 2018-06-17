<!DOCTYPE html>

<html>
	<?php include('../Templates/head.php')?>

	<body>
		<?php include('../Templates/header.php')?>

		<?php if(!isset($_POST['sent'])){?>
		<section>
			<article>
				<h2>Ajouter un nouvel article</h2>

	      <form method="post" action="nouvel_article.php" enctype="multipart/form-data">
	        <label for="titre" >Titre de l'article</label>
	        <input type="text" name="titre" /><br />
					<label for="image">merci d'uploader le nouvel article au format.php :</label>
					<input type="file" name="article" required/><br />
	        <label for="intro" >texte introductif</label>
	        <textarea name="intro">Courte intro</textarea><br />
					<label for="image_index">merci d'uploader l'image de l'index :</label>
					<input type="file" name="image_index" required/><br />
					<label for="images_site">merci d'uploader les images/polices/sons de l'article :</label>
					<input type="file" name="images[]" multiple/><br />
					<label for="image_dir" >nom du dossier de rangement</label>
	        <input type="text" name="image_dir" required/><br />
	        <label for="tags">tags</label>
	        <input type="text" name="tags" /><br />
	        <input type="submit" name="sent" value="envoyer" />
	      </form>
			</article>

		</section>

    <?php
  	}

    else{
			/* Connection à la base de donnée */
			try{
				$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
			}
			catch (Exception $e){
			  die('Erreur : ' . $e->getMessage());
			}

			/* On sécurise les données reçues */
			$titre = htmlspecialchars($_POST['titre']);
			$intro = htmlspecialchars($_POST['intro']);
			$image_dir = htmlspecialchars($_POST['image_dir']);

			/* créer une nouvelle ligne */
			$req = $bdd_blog->prepare("INSERT INTO `articles` (titre, intro,  tags, image_index, dossier_im) VALUES(:titre, :intro, :tags, :image_index, :dossier_im)");

			$infosimage = pathinfo($_FILES['image_index']['name']);
			$extension_image = $infosimage['extension'];

      $req -> execute(array(
        'titre'=> $titre,
        'intro' => $intro,
        'tags' => $_POST['tags'],
				'image_index' => 'Images_blog/index/' .$image_dir.'.'.$extension_image,
				'dossier_im' => $image_dir
      ));

			/* ranger les documents */
			$donnees = $bdd_blog->query("SELECT MAX(id) AS 'id_max' FROM `articles`;")->fetch();

			$num_articles = $donnees['id_max'];

			move_uploaded_file($_FILES['image_index']['tmp_name'], '../Images_blog/index/' . $image_dir.'.'.$extension_image );

			move_uploaded_file($_FILES['article']['tmp_name'], '../articles/' . $num_articles.'.php' );

			$nb_image = count ($_FILES['images']['tmp_name']);

			@mkdir('../Images_blog/'. $image_dir);

			for($i=0; $i<$nb_image ; $i++ ){
				move_uploaded_file($_FILES['images']['tmp_name'][$i], '../Images_blog/' . $image_dir.$_FILES['images']['name'][$i] );
			}

			?>
			<section>
				<article>
					<h2>Félicitation, votre nouvel article est désormais en ligne ! </h2>
					<a href="blog.php"><div class="boutton">
						Retour vers le blog
					</div></a>
					<a href="blog.php"><div class ="boutton">
						modifier votre article
					</div></a>
				</article>
			</section>


			<?php
    }
		?>

		<?php include('../Templates/footer.php')?>


	</body>

</html>
