<!DOCTYPE html>

<html>
	<?php include('../Templates/head.php')?>

	<body>
		<?php include('../Templates/header.php')?>

		<?php
    $bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

    if (isset($_GET['id'])){
	    $num_article = htmlspecialchars($_GET['id']);
	    $donnees = $bdd_blog->query("SELECT * FROM `articles` WHERE id=$num_article;")->fetch();
			$image_dir = $donnees['dossier_im'];

		    if(!isset($_POST['sent'])){?>

		<section>
			<article>
				<h2>Modifier votre article : </h2>

	      <form method="post" action="modifier_article.php?id=<?php echo $num_article ?>" enctype="multipart/form-data">
	        <label for="titre" >Titre de l'article</label>
	        <input type="text" name="titre" value="<?php echo htmlspecialchars($donnees['titre']);?>"><br />
					<label for="article">merci d'uploader le nouvel article au format.php :</label>
					<input type="file" name="article"/><br />
	        <label for="intro" value="<?php echo htmlspecialchars($donnees['intro']);?>">courte introductif</label>
	        <textarea name="intro">Courte intro</textarea><br />
					<label for="image">uploader une nouvelle image pour l'index :</label>
					<input type="file" name="image"/><br />
					<label for="image">uploader de nouvelles images :</label>
					<input type="file" name="images[]" multiple/><br />
	        <label for="tags">tags</label>
	        <input type="text" name="tags" value="<?php echo htmlspecialchars($donnees['tags']);?>"/><br />
	        <input type="submit" name="sent" value="envoyer" />
	      </form>
			</article>

		</section>

    <?php
  	}

    else{
			/* on sécurise les données */
			$titre = htmlspecialchars($_POST['titre']);
			$intro = htmlspecialchars($_POST['intro']);
			$tags = htmlspecialchars($_POST['tags']);

			/* on range les fichiers */
			if (isset($_FILES['image_index'])){
				$infosimage = pathinfo($_FILES['image_index']['name']);
				$extension_image = $infosimage['extension'];

				move_uploaded_file($_FILES['image_index']['tmp_name'], '../Images_blog/index/' .$image_dir.'.'.$extension_image);

				$req = $bdd_blog->prepare("UPDATE `articles` SET  image_index = :image_index WHERE id=$num_article;");

				$req -> execute(array(
					'image_index' => '../Images_blog/index/' .$image_dir.'.'.$extension_image
				));

			}
			if (isset($_FILES['article'])){
				move_uploaded_file($_FILES['article']['tmp_name'], '../articles/' . $num_article.'.php' );
			}

			$nb_image = count ($_FILES['images']['tmp_name']);

			for($i=0; $i<$nb_image ; $i++ ){
				move_uploaded_file($_FILES['images']['tmp_name'][$i], '../Images_blog/'.$image_dir.'/'.$_FILES['images']['name'][$i] );
			}

			/* On met à jour la base de données */
			$req = $bdd_blog->prepare("UPDATE `articles` SET titre = :titre, intro = :intro, tags = :tags, /*date_modif = :date_modif*/ WHERE id=$num_article;");

      $req -> execute(array(
        'titre'=> $titre,
        'intro' => $intro,
        'tags' => $tags/*,
        'date_modif' => date(time())*/
      ));

			?>
			<section>
				<article>
					<h2>Félicition, votre article est désormais en ligne ! </h2>
					<a href="blog.php"><div class="boutton">
						Retour vers le blog
					</div></a>
					<a href="modifier_article?id=<?php echo $num_article; ?>"><div class ="boutton">
						modifier votre article
					</div></a>
				</article>
			</section>


			<?php

    }}
    else{
      header('Location: blog.php');
    }?>

		<?php include('../Templates/footer.php')?>

	</body>

</html>
