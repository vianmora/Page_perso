<!DOCTYPE html>

<html>
	<head>
		<title>Vianney MORAIN _ Contact</title>

		<div class = "stylesheet">
			<link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css" >
			<link rel="stylesheet" href="Assets/Stylesheet/global.css" />
			<link rel="stylesheet" href="Assets/Stylesheet/concret.css" />

		</div>

		<meta charset = "utf-8">
	</head>

	<body>
		<header class="header">
			<a href = "index.html" >
				<h1>Page perso Vianney MORAIN</h1>
			</a>
		</header>

		<div class="container">
			<div class="row align-self-start">
				<section class="col-12">
					<article class="article-top">

						<h1 class="col-12">Page de contact</h1>
						<p class ="col-12">
							Vous pouvez me contacter en remplissant directement ce formulaire, je vous répondrai alors dès que possible
						</p>
						<?php if(isset($_GET['erreur']))
						{
							?>
							<p style="font-style:italic;">
								je suis désolé, mais votre message n'a pas pu partir...
								Normalement c'est dut soit à un message vide soit à une adresse mail invalide,
								pouvez vous réessayer s'il vous plait ?
							</p>
						<?php
					}
						?>


						<form method = "post" action = "./Actions/envoie_mail.php" class ="col-sm-12">
							<div class = "row form-group">
								<label for = "mail" class="col-6 offset-3"></br>Votre adresse mail</label>
								<input type = "email" name = "mail" class ="form-control col-6 offset-3" id = "name" autofocus required/>
							</div>
							<div class ="row form-group">
								<label for = "message" class ="col-6 offset-3"></br>Votre message<br></label>
								<textarea type = "text" name = "message" id = "message" class ="form-control col-6 offset-3" i rows = "6"></textarea>
							</div>
							</br>
							<div class="row form-groupe">
								<input type="submit" class ="form-control col-2 offset-3" name="sent" value="Envoyer" />
							</div>
						</form>


					</article>
				</section>
			</div>
		</div>

		<footer class = "footer text-center" >
		  <div class = "container">
		    <div class = "row ">
					<a href = "contact.php" class = "text_link offset-6 col-3 col-md-2 offset-md-8 text-right" style="padding-right : 5px;">Me contacter |    </a>
		      <div class = "col-3 col-md-2 container contact d-flex align-self-center">
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
