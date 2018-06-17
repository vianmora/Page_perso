<!DOCTYPE html>

<html>
  <?php include('../Templates/head.php')?>

	<body>
    <?php include('../Templates/header.php');?>

		<section class = "container">
			<article class = "row">
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


				<form method = "post" action = "../Actions/envoie_mail.php" class ="col-sm-12">
					<div class = "row form-group">
						<label for = "mail" class="col-6 offset-3"></br>Votre adresse mail</label>
						<input type = "mail" name = "mail" class ="form-control col-6 offset-3" id = "name" autofocus required/>
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

    <?php include('../Templates/footer.php');?>

	</body>

</html>
