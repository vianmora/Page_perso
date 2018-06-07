<article>
  <header>
    <h2>Article vierge pour tester</h2>
    <p>
      <?php echo $donnees['tags']; ?>
    </p>
    <img src="bannière-top" class="couverture_article" /><br />
    <h4 class="date_article">Posté le : <?php echo date('j M Y', strtotime($donnees['date_modif'])); ?></h4></br>
  </header>

  <p>
    Blablabla, merci d'être passé, c'est cool, je vous donne des nouvelles très vite ;)
  </p>
  <img src ="#" class="image_article" />
	<figcaption class="figc_article">
		très belle photo
	</figcaption>
	<p>
		blablabla fin de l'article
	</p>
</article>
