<?php session_start()?>
<!DOCTYPE html>

<html>
	<head>
		<title>Vianney MORAIN ECM</title>

			<!-- stylsheet -->
			<link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css" >
			<link rel="stylesheet" href="Assets/Stylesheet/global.css" />
			<link rel="stylesheet" href="Assets/Stylesheet/home.css" />


		<meta charset = "utf-8">
	</head>

	<body>
		<header class="header">
			<a href = "#" >
				<h1>Page perso Vianney MORAIN</h1>
			</a>
		</header>
		<?php
		try{
	    $bdd_perso = new PDO('mysql:host=localhost;dbname=site_perso;charset=utf8', 'root', '');
	  }
	  catch (Exception $e){
	    die('Erreur : '.$e->getMessage());
	  }
		$req_max = $bdd_perso->query("SELECT COUNT(*) AS 'cardinal' FROM `grand-maman`")->fetch();
		$id_citation = rand(1, $req_max['cardinal']);
		$donnees = $bdd_perso->query("SELECT * FROM `grand-maman` WHERE id_citation=$id_citation")->fetch();

		 ?>

		<article class = "container">
			<div href='<?php echo $donnees['lien']?>' class = "row">
				<blockquote class="col-10 col-lg-8 offset-1 offset-lg-2 blockquote">
					<p>
						<!--Etudiant à Centrale Marseille, j'ai créé ce site principalement pour m'entrainer à la programmation.
						Loin d'être parfait et complet, il a au moins de le mérite de proposer quelques tutoriels interressants. <br />
						Si vous vous sentez d'humeur vagabonde, n'hésitez pas à faire un tour sur mon blog, vous pourrez y suivre mes aventures pendant mon année de césure
						autour du monde !!-->

						<?php
						echo $donnees['citation'];
						?>

					</p>

					<footer class="blockquote-footer" style="padding-left:10px;">
						<?php
						echo $donnees['origine']
						?>
						<br /> Grand-Maman, carnet n°
						<?php
						echo $donnees['carnet']
						?>
					</footer>
				</blockquote>
				</div>
				<div class="row justify-content-between">
					<a href="#" class="text_link offset-lg-2 offset-1 col-10 col-lg-8" style="width:100%; text-align:right;">en savoir plus sur les carnets de Grand-Maman</a>
				</div>
			<?php
			if(isset($_SESSION['connected'])){
				?>
				<div class="row">
					<a href="Admin/ajouter-citation.php" class="offset-lg-2 offset-1">
						<div class="boutton">
							compléter la base de données
						</div>
					</a>
					<a href="Admin/afficher-citations.php">
						<div class="boutton">
							Afficher toutes les citations
						</div>
					</a>
				</div>
				<?php
			}
			?>


		</article>

		<article class = "container">
			<figure class = "row">
				<a href = "Tutos/Tutos.html" id = "tutos" class = "vignette col-4 col-lg-2 offset-2">
					<img src = "Assets/Images_site/Ampoule.png" alt ="Projets">
					<figcaption>Tutos ECM</figcaption>
				</a>
				<a href = "Sites-ecm/Sites_utiles.html" id = "sites_utiles" class = "vignette col-4 col-lg-2 offset-0">
					<img src = "Assets/Images_site/Projets.jpg" alt ="sites utiles">
					<figcaption>Sites utiles ECM</figcaption>
				</a>
				<a href = "Scouts/vie_scoute.php" id = "blog_voyage" class = "vignette col-4 col-lg-2 offset-2 offset-lg-0">
					<img src = "Assets/Images_site/Scouts.jpg" alt ="yoga">
					<figcaption>Scoutisme</figcaption>
				</a>
				<!--<a href = "http://vianney.morain.fr" id = "blog_voyage" class = "vignette col-4 col-lg-2 offset-lg-0">-->
				<a href = "http://vianney.morain.fr" id = "blog_voyage" class = "vignette col-4 col-lg-2 offset-lg-0">
					<img src = "Assets/Images_site/Yoga.jpg" alt ="yoga">
					<figcaption>Blog voyage</figcaption>
				</a>
			</figure>
		</article>

		<footer class = "footer index_footer">
			<div class = "container-fluid d-lg-flex">
				<div class = "row">
					<div class = "col-lg-2 col-6 text-left container">
						<div class="row">
							<a href = "CV.html" class = "text_link col-lg-12 col-7"> Acces à mon CV</a>
							<a href = "contact.php" class = "text_link col-5 col-lg-12" style="padding-right : 5px;">Me contacter </a>
						</div>
					</div>
					<figure class = "col-lg-6 container organismes d-none d-lg-flex">
							<div class = "row">
								<a href = "https://sufstsulpice.free.fr/" title = "SUF saint Sulpice"><img src = "Assets/Images_site/Logos_sans_fonds/Logo_SUF.png" alt ="ISF_Logo"></a>
								<a href = "https://phytv.ninja" title = "PhyTV"><img src = "Assets/Images_site/Logos_sans_fonds/Logo_PHY-TV.png" alt ="ISF_Logo"></a>
								<a href = "https://centrale-marseille.fr/" title = "Centrale Marseille"><img src = "Assets/Images_site/Logos_sans_fonds/Logo_ECM.png" alt ="ISF_Logo"></a>
								<a href = "https://assos.centrale-marseille.fr/isf/accueil" title = "Ingénieur sans frontière"><img src = "Assets/Images_site/Logos_sans_fonds/Logo_ISF.png" alt ="ISF_Logo"></a>
								<a href = "https://forum-foceen.centrale-marseille.fr/" title = "forum FOCEEN"><img src = "Assets/Images_site/Logos_sans_fonds/Logo_FOCEEN.png" alt ="ISF_Logo"></a>
							</div>
					</figure>
					<div class = "col-3 col-lg-2 text-right" style="padding-right : 5px;">Me suivre  |    </div>
					<div class = "col-3 col-lg-2 container contact d-flex">
						<div class = "row">
							<a href="https://www.facebook.com/vianney.mrn/" class = "col-3 text-center"><img src="Assets/Images_site/Facebook.png" alt="Facebook"  /></a>
							<a href="https://twitter.com/VianneyMorain" class = "col-3 text-center"><img src="Assets/Images_site/Twitter.png" alt="Twitter"  /></a>
							<a href="https://https://www.instagram.com/vianneymorain/" class = "col-3 text-center"><img src="Assets/Images_site/insta.png" alt="Twitter"  /></a>
							<a href="https://fr.linkedin.com/in/vianney-morain/" class = "col-3 text-center"><img src="Assets/Images_site/LinkedIn.png" alt="LinkedIn" /></a>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</body>

</html>
