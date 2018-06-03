<!DOCTYPE html>

<html>
	<head>
		<title>Vianney MORAIN ECM</title>


		<!-- Stylesheet -->
		<link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css" >

		<link rel="stylesheet" href="../Assets/Stylesheet/Global.css" />
		<link rel="stylesheet" href="../Assets/Stylesheet/Tutos.css" />

		<meta charset = "utf-8">
	</head>

	<body>
		<header class="header">
			<img src = "../Assets/Images_blog/bannière.png" alt="bannière provisoire" width="100%" style="opacity:0.7;" />
			<? include mon bandeau de tete avec la barre de navigation ?>
		</header>

		<?php //connexion à la base de donnée
		try{
				$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		}
		catch(Exception $e){
		     die('Erreur : '.$e->getMessage());
		}
		?>
		<!-- requète pour récupérer les données -->
		<?php $req = $bdd_blog->query("SELECT * FROM `articles` ORDER BY date_modif DESC LIMIT 0, 10");?>
		<?php while ($donnees = $req->fetch()){?>

		<section class="corps">
			<header><?php echo $donnees['titre']; ?> </header>
			<figure>
				<a href = "">
						<img src = "<?php echo $donnees['image']; ?>" alt ="image <?php echo $donnees['titre']; ?>">
						<figcaption>
							<?php echo $donnees['date_modif']; ?>
						</figcaption>
				</a>
				<p>
					<?php echo $donnees['intro']; ?>
				</p>
			</figure>
		</section>

		<?php } ?>

		<button class="btn">
			<a href="nouvel_article.php" class = "btn">Ajouter un nouvel article</a>
		</button>

		<footer>
			<? include mon super footer où je dis où ils peuvent me contacter, et les copyrights ?>
		</footer>

	</body>

</html>
