
<!DOCTYPE html>

<html>
  <?php include('../Templates/head.php')?>

	<body>
    <?php include('../Templates/header.php');?>

    <?php if(isset($_POST['sent'])){
      if($_POST['message']==''){
        header('Location: ../Home/contact.php?erreur="mv"');
      }

      mail('vianmora@yahoo.fr', $_POST['mail']."vient de t'envoyer un message", $_POST['message']);

    ?>

		<section class = "container">
			<article class = "row">
				<h1 class="col-12">Page de contact</h1>
				<p class ="col-12">
					Votre message m'est bien parvenu, merci de l'intêret que vous portez à mon projet, à très vite !
				</p>
        <p>
          Vianney MORAIN _ La vie est faites de rencontres
        </p>




			</article>

		</section>

    <?php include('../Templates/footer.php')?>
    <?php }
    else{
      header('Location: ../Home/contact.php');
    }?>
	</body>

</html>
