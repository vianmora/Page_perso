<?php session_start();

if(!isset($_SESSION['connected'])){
  header('Location: connection.php');
}
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Vianney MORAIN ECM</title>

    <!-- stylsheet -->
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >
    <link rel="stylesheet" href="../Assets/Stylesheet/global.css" />
    <link rel="stylesheet" href="../Assets/Stylesheet/concret.css" />

    <meta charset = "utf-8">
  </head>


  <body>

    <header class="header">

      <a href = "../" >
        <h1>Page perso Vianney MORAIN</h1>
        <h2>Page admin</h2>
      </a>

    </header>


    <div class="container">
      <div class="row align-self-start">
        <section class="col-12 col-lg-9">
          <article class="article-top">
            <p>
              Bonjour <?php echo $_SESSION['prénom']; ?> ton voyage se passe bien ? Où es-tu actuellement ?<br />
              Tu es connecté en tant qu'administrateur, bon voyage !
            </p>
          </article>
          <a href="deconnection.php">
            <div class="boutton">
              Se déconnecter
            </div>
          </a>
        </section>

        <aside class="col-lg-3 d-none d-lg-flex flex-column justify-content-start" style="padding-left:30px;">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCalistFornia%2F&tabs&width=240&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="240" height="214" style="margin-top:30px;margin-bottom: 20px;border:none;overflow:scroll" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
						<a class="twitter-timeline" style="width:260px;" data-width="260" data-height="300" data-theme="light" data-link-color="#2B7BB9" href="https://twitter.com/VianneyMorain?ref_src=twsrc%5Etfw">Tweets by VianneyMorain</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</aside>
      </div>
    </div>

    <footer class = "footer text-center" >
		  <div class = "container">
		    <div class = "row ">
					<a href = "../contact.html" class = "text_link offset-6 col-3 col-md-2 offset-md-8 text-right" style="padding-right : 5px;">Me contacter |    </a>
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
