<!DOCTYPE html>

<html>
	<head>
		<title>Vianney MORAIN ECM</title>


		<!-- Stylesheet -->
		<link rel="stylesheet" href="../../Assets/bootstrap/css/bootstrap.css" >

		<link rel="stylesheet" href="../../Assets/Stylesheet/global.css" />
		<link rel="stylesheet" href="../../Assets/Stylesheet/concret.css" />

		<meta charset = "utf-8">
	</head>

	<body>
		<p class="d-none">
			Mon intro sympa qui va apparaitre sur la page du blog
		</p>
		<?php
		if(isset($_GET['id_article'])){
			$num_article = htmlspecialchars($_GET['id_article']);
			$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
			$donnees = $bdd_blog->query("SELECT MAX(id) AS 'id_max' FROM `articles`;")->fetch();
			if($num_article>$donnees['id_max']){
				header('Location: ../blog.php');
			}
		}
		else{
			header('Location: ../blog.php');
		}
		$donnees = $bdd_blog->query("SELECT * FROM `articles` WHERE id=$num_article;")->fetch();
		?>

		<header class="header">
			<a href = "../../blog.html" >
				<h1>Le temps d'une césure</h1>
				<h2>Blog Voyage</h2>
			</a>
			<nav  class="nav nav-fill justify-content-center  align-items-center">
				<li class="nav-item">
					<a href="../blog.php" class="nav-link" title="Accueil page perso">
						<img src ="../../Assets/Images_site/home.png" alt="home" width="25px;"/>
					</a>
				</li>
				<li class="nav-item">
					<a href="../blog.php" class="nav-link">Le blog</a>
				</li>
				<li class="nav-item">
					<a href = "#" class="nav-link">Thématiques</a>
				</li>
				<li class="nav-item">
					<a href = "#" class="nav-link disabled" >A propos</a>
				</li>
				<li class="nav-item">
					<a href = "../../contact.html" class="nav-link" >Me contacter</a>
				</li>
			</nav>
		</header>


		<section>
			<?php include($num_article.'.php'); ?>

		</section>



		<footer class = "footer text-center" >
			<div class = "container">
				<div class = "row ">
					<div class = "offset-5 col-4 col-md-3 offset-md-7 text-right" style="padding-right : 5px;">Suivez moi sur les réseaux |    </div>
					<div class = "col-3 col-md-2 container contact d-flex align-self-center">
						<div class = "row">
							<a href="https://www.facebook.com/vianney.mrn/" class = "col-3 text-center"><img src="../../Assets/Images_site/Facebook.png" alt="Facebook"  /></a>
							<a href="https://twitter.com/VianneyMorain" class = "col-3 text-center"><img src="../../Assets/Images_site/Twitter.png" alt="Twitter"  /></a>
							<a href="https://https://www.instagram.com/vianneymorain/" class = "col-3 text-center"><img src="../../Assets/Images_site/insta.png" alt="Twitter"  /></a>
							<a href="https://fr.linkedin.com/in/vianney-morain/" class = "col-3 text-center"><img src="../../Assets/Images_site/LinkedIn.png" alt="LinkedIn" /></a>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</body>

</html>
