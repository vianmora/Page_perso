<?php session_start()?>

<!DOCTYPE html>

<html>
	<?php include('../Templates/head.php') ?>

	<body>

		<?php
		$active = 'blog';
		include('../Templates/header.php'); ?>

		<?php //connexion à la base de donnée
		try{
				$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
		}
		catch(Exception $e){
		     die('Erreur : '.$e->getMessage());
		}
		?>
		<section>
			<!-- requète pour récupérer les données -->
			<?php $req = $bdd_blog->query("SELECT * FROM `articles` ORDER BY date_modif DESC LIMIT 0, 10");?>
			<?php
			while ($donnees = $req->fetch()){?>

			<article class = "banniere b_gauche">
					<a href = "<?php echo '../articles/article.php?id='.$donnees['id'] ;?>">
							<img src = "<?php echo '../'.$donnees['image_index']; ?>" alt ="image <?php echo $donnees['titre']; ?>">
					</a>
					<figcaption>
						<header><?php echo $donnees['titre']; ?> </header>
						<p class = 'id_article'>
							<?php $date_modif = strtotime($donnees['date_modif']);
						echo date('j M Y', $date_modif); ?>
						</p>
						<p>
							<?php echo nl2br(htmlspecialchars($donnees['intro'])); ?>
						</p>
					</figcaption>
			</article>
			<?php
			if (isset($_SESSION['connected'])) {?>
				<!-- Ajouter une possibilité de supprimer ou de modifier un article -->
				<a href="../Admin/modifier_article.php?id=<?php echo $donnees['id'];?>">modifier l'article</a>
				<a href="../Admin/supprimer_article.php?id=<?php echo $donnees['id'];?>">supprimer l'article</a>
				<?php
			}
 		}
			if(isset($_SESSION['connected']))
			{?>
				<a href="../Admin/nouvel_article.php">
					<div class="boutton">
						Ajouter un nouvel article
					</div>
				</a>
				<?php
			}?>

		</section>


		<?php include('../Templates/footer.php') ?>

	</body>

</html>
