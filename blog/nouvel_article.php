<!DOCTYPE html>

<html>
	<head>
		<title>Le temps d'une césure</title>


		<!-- Stylesheet -->
		<link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >

		<link rel="stylesheet" href="../Assets/Stylesheet/Global.css" />
		<link rel="stylesheet" href="../Assets/Stylesheet/concret.css" />

		<meta charset = "utf-8">
	</head>

	<body>
		<header class="header">
			<a href = "Tutos.html" >
				<h1>Le temps d'une césure</h1>
				<h2>Blog Voyage</h2>
			</a>
			<nav  class="nav nav-fill justify-content-center  align-items-center">
				<li class="nav-item">
					<a href="../index.html" class="nav-link" title="Accueil page perso">
						<img src ="../Assets/Images_site/home.png" alt="home" width="25px;"/>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Le blog</a>
				</li>
				<li class="nav-item">
					<a href = "#" class="nav-link">Thématiques</a>
				</li>
				<li class="nav-item">
					<a href = "#" class="nav-link disabled" >A propos</a>
				</li>
				<li class="nav-item">
					<a href = "../contact.html" class="nav-link" >Me contacter</a>
				</li>
			</nav>
		</header>

		<?php if(!isset($_FILES['article'])){?>
		<section>
			<article>
				<h2>Ajouter un nouvel article</h2>

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
			</article>

		</section>

    <?php
  	}

    else{
			$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

			$donnees = $bdd_blog->query("SELECT MAX(id) AS 'id_max' FROM `articles`;")->fetch();
			$num_articles = $donnees['id_max'] + 1;

			$infosimage = pathinfo($_FILES['image']['name']);
			$extension_image = $infosimage['extension'];

			move_uploaded_file($_FILES['image']['tmp_name'], '../Assets/Images_blog/' . $num_articles.'.'.$extension_image );

			move_uploaded_file($_FILES['article']['tmp_name'], 'articles/' . $num_articles.'.php' );

			?>
			<section>
				<article>
					<h2>Félicition, votre nouvel article est désormais en ligne ! </h2>
					<a href="blog.php"><div class="boutton">
						Retour vers le blog
					</div></a>
					<a href="blog.php"><div class ="boutton">
						modifier votre article
					</div></a>
				</article>
			</section>


			<?php

			$req = $bdd_blog->prepare("INSERT INTO `articles` (titre, intro,  tags, image) VALUES(:titre, :intro, :tags, :image)");

      $req -> execute(array(
        'titre'=> $_POST['titre'],
        'intro' => $_POST['intro'],
        'tags' => $_POST['tags'],
				'image' => '../Assets/Images_blog/' . $num_articles.'.'.$extension_image
      ));

    }
		?>
		<footer>
			<?php
				//include mon super footer où je dis où ils peuvent me contacter, et les copyrights
			?>
		</footer>

	</body>

</html>
