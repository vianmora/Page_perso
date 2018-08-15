<?php session_start()?>
<!DOCTYPE html>

<html>
	<head>
		<title>carnets de grands-maman</title>

		<div class = "stylesheet">
			<link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >
			<link rel="stylesheet" href="../Assets/Stylesheet/global.css" />
			<link rel="stylesheet" href="../Assets/Stylesheet/concret.css" />

		</div>

		<meta charset = "utf-8">
	</head>

	<body>
		<header class="header">
			<a href = "../" >
				<h1>Page perso Vianney MORAIN</h1>
        <h2>page admin</h2>
			</a>
			<nav  class="nav nav-fill justify-content-center  align-items-center">
				<li class="nav-item">
					<a href="../" class="nav-link" title="Accueil page perso">
						<img src ="../Assets/Images_site/home.png" alt="home" width="25px"/>
					</a>
				</li>
				<li class="nav-item">
					<a href="ajouter-citation.php" class="nav-link">ajouter une citation</a>
				</li>
				<li class="nav-item">
					<a href = "#" class="nav-link active">afficher la base de données</a>
				</li>
				<li class="nav-item">
					<a href = "" class="nav-link disabled" >en savoir plus</a>
				</li>
			</nav>
		</header>


		<div class="container">
			<div class="row align-self-start">
				<section class="col-12">
					<article class="article-top">
						<h1>Les carnets de grand-maman</h1>
            <h2>Toutes les citations</h2>

						<p>
              Tu pourras retrouver sur cette page l'intégralité des carnets de grand-maman.
              Pour en savoir plus sur ces carnets, n'hésites pas à aller
              voir <a href="../en_savoir_plus.php" class="text_link">la page dédiée
              aux explications.</a>
            </p>

            <?php
            try{
              $bdd_perso = new PDO('mysql:host=localhost;dbname=site_perso;charset=utf8', 'root', '');
            }
            catch (Exception $e){
              die('Erreur : '.$e->getMessage());
            }

            $req = $bdd_perso->query("SELECT MAX(carnet) AS 'max' FROM `grand-maman`")->fetch();
            $max_carnet = $req['max'];

            for ($i=1; $i < $max_carnet+1; $i++) {
             ?>
             <h3>Carnet n°<?php echo $i ?></h3>
             <?php
             $req = $bdd_perso->query("SELECT * FROM `grand-maman` WHERE carnet=1 ORDER BY id_citation");

             while ($donnees = $req->fetch()){
               ?>
							 <div class="container">
								 <div class="row">
									 <blockquote class="col-8" style="border-bottom:solid black 1px;">
 	        					<p>
 	        						<?php
 	        						echo $donnees['citation'];
 	        						?>
 	        					</p>

 	        					<footer class="blockquote-footer" style="padding-left:40px;">
 	        						<?php
 	        						echo $donnees['origine']
 	        						?>
 	        						<br /> Grand-Maman, carnet n°
 	        						<?php
 	        						echo $donnees['carnet']
 	        						?>
 	        					</footer>
 	        				</blockquote>
 	               <?php
 	 							if(isset($_SESSION['connected'])){
 	 								?>
 	 								<div class="col-4 container">
<br />
										<div class="col-12">
 	 										<a href="modifier-citation.php?id=<?php echo $donnees['id_citation']?>" class="text_link">modifier la citation</a>
 	 									</div>
 	 									<!--<div class="col-12">
 	 										<a href="../Actions/supprimer-citation.php?id=<?php /*echo $donnees['id_citation']*/?>" class="text_link">supprimer la citation</a>
 	 									</div>-->
 	 								</div>
 	 								<?php
 	 							}
								?>
								 </div>
							 </div>
               <?php
             }
            }
            ?>
					</article>
				</section>
			</div>
		</div>

		<footer class = "footer text-center" >
		  <div class = "container">
		    <div class = "row ">
					<a href = "../contact.html" class = "text_link offset-5 col-3 col-md-2 offset-md-8 text-right" style="padding-right : 5px;">Me contacter |    </a>
		      <div class = "col-4 col-md-2 container contact d-flex align-self-center">
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

	<body>
<html>
