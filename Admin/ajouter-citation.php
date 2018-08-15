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
			<nav  class="nav nav-fill justify-content-center  align-items-center">
				<li class="nav-item">
					<a href="../" class="nav-link" title="Accueil page perso">
						<img src ="../Assets/Images_site/home.png" alt="home" width="25px"/>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link active">ajouter une citation</a>
				</li>
				<li class="nav-item">
					<a href = "afficher-citations.php" class="nav-link">afficher la base de données</a>
				</li>
				<li class="nav-item">
					<a href = "" class="nav-link disabled" >en savoir plus</a>
				</li>
			</nav>
		</header>

    <div class="container">
      <div class="row align-self-start">
        <section class="col-md-8 offset-md-2">
          <article>
            <h1>Ajouter une nouvelle citation</h1>
            <?php
            if(isset($_GET['added'])){
              if($_GET['added']){
                ?>
                <i>La citation a bien été ajouté. Voulez vous en ajouter une autre ?</i>
                <?php
              }
            } ?>
            <form method="post" action="../Actions/ajouter-citation.php">
              <div class='form-group'>
                <label for="citation">Citation</label>
                <textarea type="text" name="citation" class="form-control" placeholder="Citation" row="3" required></textarea>
              </div>
              <div class='form-group'>
                <label for="origine">Origine</label>
                <input type="text" name="origine" class="form-control" placeholder="origine" required/>
              </div>
              <div class='form-group'>
                <label for="lien">Ajouter un lien</label>
                <input type="text" name="lien" class="form-control" placeholder="lien" />
              </div>
              <div class='form-group'>
                <label for="carnet">Carnet n°</label>
                <select type="text" name="carnet" class="form-control" required>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class='form-group col-3 offset-9'>
                <input type="submit" name="sent" class="form-control" value="ajouter"/>
              </div>
            </form>

          </article>
        </section>
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
