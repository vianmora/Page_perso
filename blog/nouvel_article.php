<!DOCTYPE html>

<html>
	<head>
		<title>Le temps d'une césure</title>


		<!-- Stylesheet -->
		<link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >

		<link rel="stylesheet" href="../Assets/Stylesheet/Global.css" />
		<link rel="stylesheet" href="../Assets/Stylesheet/blog.css" />

		<meta charset = "utf-8">
	</head>

	<body>
		<header>
			<?php //include mon bandeau de tete avec la barre de navigation ?>
		</header>

    <h2>Ajouter un nouvel article</h2>

    <?php if(!isset($_FILES['article'])){?>
    <section>
      <form method="post" action="nouvel_article" enctype="multipart/form-data">
        <label for="titre" >Titre de l'article</label>
        <input type="text" name="titre" /><br />
				<label for="image">merci d'uploader le nouvel article au format.php :</label>
				<input type="file" name="article" required/><br />
        <label for="intro" >courte introductif</label>
        <textarea name="intro">Courte intro</textarea><br />
				<label for="image">merci d'uploader une image :</label>
				<input type="file" name="image" required/><br />
        <label for="tags">tags</label>
        <input type="text" name="tags" /><br />
        <input type="submit" value="envoyer" />
      </form>
    </section>
    <?php
  	}

    else{
			$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

			$donnees = $bdd_blog->query("SELECT COUNT(*) AS 'nb_articles' FROM `articles`;")->fetch();
			$num_articles = $donnees['nb_articles'] + 1;

			$infosimage = pathinfo($_FILES['image']['name']);
			$extension_image = $infosimage['extension'];

			move_uploaded_file($_FILES['image']['tmp_name'], '../Assets/Images_blog/' . $num_articles.'.'.$extension_image );

			move_uploaded_file($_FILES['article']['tmp_name'], 'articles/' . $num_articles.'.php' );

			?>
				<h1>Merci d'avoir upload une image</h1>
				<p>
					Elle est très belle soit dit en passant ;)
				</p>
				<img src="../Assets/Images_blog/<?php echo $_FILES['image']['name'] ?>" style="width:20%;"/>

			<?php

			$req = $bdd_blog->prepare("INSERT INTO `articles` (titre, intro,  tags, image) VALUES(:titre, :intro, :tags, :image)");

      $req -> execute(array(
        'titre'=> $_POST['titre'],
        'intro' => $_POST['intro'],
        'tags' => $_POST['tags'],
				'image' => '../Assets/Images_blog/' . $num_articles.'.'.$extension_image
      ));
			?>
      <section>
        Félicitation, votre nouvel article est désormais en ligne
      </section>
      <a href="blog.php">Retour vers le blog</a>
      <?php
    }
		?>
		<footer>
			<?php
				//include mon super footer où je dis où ils peuvent me contacter, et les copyrights
			?>
		</footer>

	</body>

</html>
