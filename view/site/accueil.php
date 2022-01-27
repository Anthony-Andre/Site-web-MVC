
<article>

   <h1>Accueil</h1>

    <?php
    foreach($articles as $article) {
    ?>
    <p><?= $article->getTitre(); ?></p>
    <?php  
    }
    ?>


</article>