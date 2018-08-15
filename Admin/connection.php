<?php session_start()?>

<!DOCTYPE html>

<html>
  <head>
    <title>Vianney MORAIN ECM</title>

    <!-- stylsheet -->
    <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >
    <link rel="stylesheet" href="../Assets/Stylesheet/global.css" />
    <link rel="stylesheet" href="../Assets/Stylesheet/concret.css" />
  </head>

  <body>
    <header class="header">

      <a href = "../Home/home_blog.php" >
        <h1>Page perso Vianney MORAIN</h1>
        <h2>Page admin</h2>
      </a>

    </header>

    <?php

    if(isset($_SESSION['connected'])){
      if($_SESSION['connected']){
        header('Location: index.php');
      }
    }

    if(!isset($_POST['identifiant']))
    {
      ?>

      <div class="container">
  			<div class="row align-self-start">
  				<section class="col-12 col-lg-9">
            <article>
              <h1>Page admin</h1>
              <h3>Veuilley vous identifier</h3>
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
              <form method="POST" action="connection.php"><br />
                <label for="identifiant">identifiant</label>
                <input type="text" name="identifiant" /><br />
                <label for="mot_de_passe">mot de passe</label>
                <input type="password" name="mot_de_passe" /><br /><br />
                <input name="sent" type="submit" value="se connecter" />
              </form>
            </article>
          </section>

          <aside class="col-lg-3 d-none d-lg-flex flex-column justify-content-start" style="padding-left:30px;">
  						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCalistFornia%2F&tabs&width=240&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="240" height="214" style="margin-top:30px;margin-bottom: 20px;border:none;overflow:scroll" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  						<a class="twitter-timeline" style="width:260px;" data-width="260" data-height="300" data-theme="light" data-link-color="#2B7BB9" href="https://twitter.com/VianneyMorain?ref_src=twsrc%5Etfw">Tweets by VianneyMorain</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  				</aside>

  			</div>
  		</div>

    <?php
    }

    else{
      if($_POST['identifiant']=='VianneyBG' || $_POST['mot_de_passe']=='UnPetitPastis?'){
        header('Location: connection.php?idOK=-1');
      }
      elseif($_POST['identifiant']!='vianmora' || $_POST['mot_de_passe']!='PetitBambouGris13'){
        header('Location: connection.php?idOK=0');
      }

      else{
        $_SESSION['connected']=1;
        $_SESSION['prénom']='Vianney';
        header('Location: index.php');
      }
    }?>


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
