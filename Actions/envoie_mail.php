<!DOCTYPE html>

<html>
  <head>
    <title>Vianney MORAIN _ Contact</title>

    <div class = "stylesheet">
      <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >
      <link rel="stylesheet" href="../Assets/Stylesheet/global.css" />
      <link rel="stylesheet" href="../Assets/Stylesheet/concret.css" />

    </div>

    <meta charset = "utf-8">
  </head>

	<body>
    <header class="header">
			<a href = "../index.html" >
				<h1>Page perso Vianney MORAIN</h1>
			</a>
		</header>

    <?php if(isset($_POST['sent'])){
      if($_POST['message']==''){
        header('Location: ../contact.php?erreur="mv"');
      }

      mail('vianmora@yahoo.fr', $_POST['mail']." vient de t'envoyer un message", $_POST['message']);

    ?>

    <div class="container">
			<div class="row align-self-start">
				<section class="col-12">
					<article class="article-top">
    				<h1 class="col-12">Page de contact</h1>
    				<p class ="col-12">
    					Votre message m'est bien parvenu, merci de l'intêret que vous portez à mon projet, à très vite !
    				</p>
            <p>
              Vianney MORAIN _ La vie est faites de rencontres
            </p>

    			</article>
    		</section>

        <aside class="options d-flex align-items-center">
          <a href="../index.html" class="boutton">retour à la page d'accueil</a>
        </aside>
      </div>
    </div>

    <footer class = "footer text-center" >
      <div class = "container">
        <div class = "row ">
          <a href = "contact.php" class = "text_link offset-6 col-3 col-md-2 offset-md-8 text-right" style="padding-right : 5px;">Me contacter |    </a>
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

    <?php }
    else{
      header('Location: ../contact.php');
    }?>
	</body>

</html>
