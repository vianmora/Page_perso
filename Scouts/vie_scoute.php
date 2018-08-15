<!DOCTYPE html>

<html>
	<head>
		<title>Vianney MORAIN Contact</title>

		<div class = "stylesheet">
			<link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >
			<link rel="stylesheet" href="../Assets/Stylesheet/global.css" />
			<link rel="stylesheet" href="../Assets/Stylesheet/index.css" />

		</div>

		<meta charset = "utf-8">
    <meta property="og:title" content="Ma vie scoute _ Vianney MORAIN" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
	</head>

	<body>
		<header class="header">
			<a href = "vie_scoute.php" >
				<h1>Ma vie scout</h1>
			</a>
			<nav  class="nav nav-fill justify-content-center  align-items-center">
				<li class="nav-item">
					<a href="../index.html" class="nav-link" title="Accueil page perso">
						<img src ="../Assets/Images_site/home.png" alt="home" width="25px;"/>
					</a>
				</li>
			</nav>
		</header>

		<div class="container">
			<div class="row justify-content-center">
				<section class="section_distincte">
					<article class="listing" style="width:40%; margin:auto">
						<p>
              Hey ! Tu trouveras ici quelques informations, ressources utiles tirés de mes années scouts ;)
            </p>
					</article>
        </section>

        <?php
					if (!isset($_POST['identifiant'])){
						?>

	  				<section class="col-12">
	            <article>
	              <h2>Veuilley vous identifier</h2>
	              <?php
	              if(isset($_GET['idOK'])){
	                if(!$_GET['idOK']){?>
	                  <p style="font-style:italic;">
	                    L'identifiant ou le mot de passe indiqué ne semble pas
	                    correspondre... es-tu sur d'avoir le droit d'accéder à cette page ? :/
	                  </p><?php
	                }
	                elseif($_GET['idOK']==-1){?>
	                  <p style="font-style:italic;">
	                    Non mais tu m'as pris pour une buse en plus ? retourne jouer aux billes 😇
	                  </p><?php
	                }
	                elseif ($_GET['idOK']==100) {?>
	                  <p style="font-style:italic;">
	                    Tu es désormais déconnecté, rentre de nouveau ton identifiant et ton mot de passe pour pouvoir avoir acces aux fonctions administrateur ;)
	                  </p><?php
	                }
	              }
	              ?>
	              <!-- id : VianneyBG ; mdp : UnPetitPastis? -->
	              <form method="POST" action="vie_scoute.php"><br />
	                <label for="identifiant">identifiant</label>
	                <input type="text" name="identifiant" /><br />
	                <label for="mot_de_passe">mot de passe</label>
	                <input type="password" name="mot_de_passe" /><br /><br />
	                <input name="sent" type="submit" value="se connecter" />
	              </form>
	            </article>
	          </section>
						<?php
					}
				else{

					if($_POST['identifiant']=='vianmora' && $_POST['mot_de_passe']=='PetitBambouGris13') {
					?>
        <section class="section_distincte">
          <h4>Quelques heures routes</h4>
          <article class="listing">
            <h4>Supports</h4>
            <figure>
              <a href = "http://www.lespasseurs.com/texteamediter.html"><img src = "../Assets/Images_site/passeurs.png" alt ="1ere année"><figcaption>Le site des passeurs</figcaption></a>
              <a href = "http://routiers.scouts-unitaires.eu/v2/textes-pour-lheure-route/"><img src = "../Assets/Images_site/Logos_sans_fonds/Logo_SUF.png" alt ="1ere année"><figcaption>HR SUF</figcaption></a>
              <a href = "https://www.amazon.fr/livre-l%C3%A9zard-Nouvelle-%C3%A9dition/dp/2825709689/ref=pd_sbs_14_1?_encoding=UTF8&pd_rd_i=2825709689&pd_rd_r=a3d915f4-980d-11e8-a3a3-d9e25ff2836f&pd_rd_w=HUdeT&pd_rd_wg=qNUZ2&pf_rd_i=desktop-dp-sims&pf_rd_m=A1X6FK5RDHNB96&pf_rd_p=2c5b8a5e-8e0a-40ca-bd08-715e90b72105&pf_rd_r=HR9DZ52RG3BATBCPX33H&pf_rd_s=desktop-dp-sims&pf_rd_t=40701&psc=1&refRID=HR9DZ52RG3BATBCPX33H"><img src = "../Assets/Images_site/lezard.jpg" alt ="1ere année"><figcaption>Le livre de lézard</figcaption></a>
              <a href = "https://drive.google.com/open?id=1zCHS5xrloWHl4QHezBAxpbGW1ETP0qmu"><img src = "../Assets/Images_site/reflexion.png" alt ="1ere année"><figcaption>Carnet : Cracovie 2016</figcaption></a>
              <a href = "https://drive.google.com/open?id=1rCgN6auyO2PCv7R8phUFkYfZjZUHie9E"><img src = "../Assets/Images_site/reflexion.png" alt ="1ere année"><figcaption>Carnet : Cantal 2018</figcaption></a>
            </figure>
          </article>
          <article class="listing">
            <h4>textes et cérémoniaux</h4>
            <figure>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>La promesse</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>Le compagnonage</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>Le départ routier</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>Tu seras un homme mon fils</figcaption></a>
            </figure>
          </article>
        </section>

        <section class="section_distincte">
          <h4>Vidéos de camps</h4>
          <article class="listing">
            <h4>Louveteaux : meute 92</h4>
            <figure>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption></figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption></figcaption></a>
            </figure>
          </article>

          <article class="listing">
            <h4>Scouts : Troupe 29</h4>
            <em>le site des anciens de la troupe : <a class="text_link" href="http://ancienstroupe.wordpress.com">lien</a></em>
            <figure>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>Corse 2009</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="2eme année"><figcaption>Limousin 2010</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="3eme année"><figcaption>Jura 2011</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="4eme année"><figcaption>Allier 2012</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="5eme année"><figcaption>Mercantour 2013</figcaption></a>
            </figure>
          </article>

          <article class="listing">
            <h4>Routier : clan 29 puis 92</h4>
            <figure>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>29 : Plavilla 2014</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>92 : Thoronet 2015</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>92 : Cracovie 2016</figcaption></a>
            </figure>
          </article>

          <article class="listing">
            <h4>Chef scout : Troupe 29</h4>
            <figure>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>Ceau-en-Couhé 2017</figcaption></a>
              <a href = ""><img src = "../Assets/Images_site/NC.png" alt ="1ere année"><figcaption>Cantal 2018</figcaption></a>
            </figure>
          </article>
				</section>

			</div>
		</div>
		<?php
			}
		else{
			header('Location: vie_scoute.php');
		}
	}
		?>


		<footer class = "footer text-center" >
		  <div class = "container">
		    <div class = "row ">
					<a href = "../contact.html" class = "offset-6 col-3 col-md-2 offset-md-8 text-right" style="padding-right : 5px;">Me contacter |    </a>
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
