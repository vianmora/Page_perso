<?php session_start() ?>

<!DOCTYPE html>

<html>
	<?php include('../Templates/head.php')?>

	<body>
		<?php
		if(isset($_GET['id'])){
			$num_article = htmlspecialchars($_GET['id']);
			$bdd_blog = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
			$donnees = $bdd_blog->query("SELECT MAX(id) AS 'id_max' FROM `articles`;")->fetch();
			if($num_article>$donnees['id_max']){
				header('Location: ../index.php');
			}
		}
		else{
			header('Location: ../index.php');
		}
		$donnees = $bdd_blog->query("SELECT * FROM `articles` WHERE id=$num_article;")->fetch();
		?>

		<?php include('../Templates/header.php')?>


		<section>
			<?php include($num_article.'.php'); ?>

		</section>

		<?php if(isset($_SESSION['connected'])){?>
			<aside>
				<a href="../Admin/modifier_article.php?id=<?php echo $donnees['id'];?>">modifier l'article</a>
				<a href="../Admin/supprimer_article.php?id=<?php echo $donnees['id'];?>">supprimer l'article</a>
			</aside>
			<?php
		}
		?>
		<section>
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCalistFornia%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		</section>

		<section>
			<a class="twitter-timeline" href="https://twitter.com/VianneyMorain?ref_src=twsrc%5Etfw">Tweets by VianneyMorain</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</section>




		<?php include('../Templates/footer.php')?>

	</body>

</html>
