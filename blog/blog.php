<!DOCTYPE html>

<html>
	<head>
		<title>Le temps d'une césure</title>


		<!-- Stylesheet -->
		<link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >

		<link rel="stylesheet" href="../Assets/Stylesheet/global.css" />
		<link rel="stylesheet" href="../Assets/Stylesheet/index.css" />

		<meta charset = "utf-8">
	</head>

	<body>
		<header class="header">
			<a href = "#" >
				<h1>Le temps d'une césure</h1>
				<h2>Blog Voyage</h2>
			</a>
			<nav  class="nav nav-fill justify-content-center  align-items-center">
				<li class="nav-item">
					<a href="home_blog.php" class="nav-link" title="Accueil page perso">
						<img src ="../Assets/Images_site/home.png" alt="home" width="25px;"/>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link active">Le blog</a>
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


		<?php //connexion à la base de donnée
		try{
				$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		}
		catch(Exception $e){
		     die('Erreur : '.$e->getMessage());
		}
		?>
		<section>
			<!-- requète pour récupérer les données -->
			<?php $req = $bdd_blog->query("SELECT * FROM `articles` ORDER BY date_modif DESC LIMIT 0, 10");?>
			<?php while ($donnees = $req->fetch()){?>

			<article class = "banniere b_gauche">
					<a href = "<?php echo 'articles/article.php?id_article='.$donnees['id'] ;?>">
							<img src = "<?php echo $donnees['image']; ?>" alt ="image <?php echo $donnees['titre']; ?>">
					</a>
					<figcaption>
						<header><?php echo $donnees['titre']; ?> </header>
						<p class = 'id_article'>
							<?php $date_modif = strtotime($donnees['date_modif']);
						echo date('j M Y', $date_modif); ?>
						</p>
						<p>
							<?php echo nl2br(htmlspecialchars($donnees['intro'])); ?>
						</p>
					</figcaption>
			</article>
			<a href="modifier_article.php?id_article=<?php echo $donnees['id'];?>">modifier l'article</a>
			<a href="supprimer_article.php?id_article=<?php echo $donnees['id'];?>">supprimer l'article</a>

			<!-- Ajouter une possibilité de supprimer ou de modifier un article -->

			<?php } ?>
			<a href="nouvel_article.php">
				<div class="boutton">
					Ajouter un nouvel article
				</div>
			</a>
		</section>


		<footer class = "footer text-center" >
			<div class = "container">
				<div class = "row ">
					<div class = "offset-5 col-4 col-md-3 offset-md-7 text-right" style="padding-right : 5px;">Suivez moi sur les réseaux |    </div>
					<div class = "col-3 col-md-2 container contact d-flex align-self-center">
						<div class = "row">
							<a href="https://www.facebook.com/vianney.mrn/" class = "col-3 text-center"><img src="../Assets/Images_site/Facebook.png" alt="Facebook"  /></a>
							<a href="https://twitter.com/VianneyMorain" class = "col-3 text-center"><img src="../Assets/Images_site/Twitter.png" alt="Twitter"  /></a>
							<a href="https://https://www.instagram.com/vianneymorain/" class = "col-3 text-center"><img src="../Assets/Images_site/insta.png" alt="Twitter"  /></a>
							<a href="https://fr.linkedin.com/in/vianney-morain/" class = "col-3 text-center"><img src="../Assets/Images_site/LinkedIn.png" alt="LinkedIn" /></a>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</body>

</html>
